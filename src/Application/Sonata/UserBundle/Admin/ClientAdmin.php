<?php
/**
 * Description of UserAdmin
 *
 * @author bartek
 */
namespace Application\Sonata\UserBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Security\Acl\Permission\MaskBuilder;

use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Model\GroupManagerInterface;


class ClientAdmin extends Admin{
    
    
    protected $formOptions = array(
        'validation_groups' => 'Profile'
    );
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array('required' => false))
            ->end() 
            ->with('Aditional Informations', array('collapsed' => true))
                ->add('hi_points', 'number')
            ->end()    
            ->with('Management')
                /*->add('roles', 'sonata_security_roles', array(
                    'expanded' => true,
                    'multiple' => true,
                    'required' => false,
                    //'attr' => array('style'=>'display:none;'),
                    'label' => '',
                ))*/
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('enabled', null, array('required' => false))
                ->add('credentialsExpired', null, array('required' => false))
            ->end()
                
                
        ;
    }

    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('enabled')
            ->add('locked')
            ->add('createdAt')
        ;

    }
    
    
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('username')
            ->add('locked')
            ->add('email')
            ->add('id')
        ;
    }
    
    
    
    public function prePersist($user)
    {
        $group = $this->getGroupManager()->findGroupByName('client');

        if (!$user->hasGroup('client'))
        {
            $user->addGroup($group);
        }
    }

    public function preUpdate($user)
    {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
    }

    public function setUserManager(UserManagerInterface $user_manager)
    {
        $this->user_manager = $user_manager;
    }

    public function getUserManager()
    {
        return $this->user_manager;
    }

    public function setGroupManager(GroupManagerInterface $group_manager)
    {
        $this->group_manager = $group_manager;
    }

    public function getGroupManager()
    {
        return $this->group_manager;
    }
    
    
}
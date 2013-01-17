<?php
/**
 * Description of StudentAdmin
 *
 * @author bartek
 */
namespace Application\Sonata\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;

use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Model\GroupManagerInterface;

class StoreOwnerAdmin extends BaseAdmin {
    
    
    protected $formOptions = array(
        'validation_groups' => 'Create'
    );
    
    public function getNewInstance()
    {
        $class = $this->getClass();

        return new $class('', array());
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('fullname')
            ->add('email')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('username', 'doctrine_orm_callback', array(
                'callback' => array($this, 'getWithProfileFields'),
                'field_type' => 'text',
                
            ),null, array('attr'=>array('placeholder'=>"lastname, email, phone")))    
            
            
        ;
    }
    
    public function getWithProfileFields($queryBuilder, $alias, $field, $value)
    {
        if (!$value['value']) {
            return;
        }

        $search_str = $value['value'].'%';
        
        $queryBuilder
            ->orWhere(sprintf('%s.lastname', $alias).' like :p1')
                ->setParameter('p1', $search_str)
            ->orWhere(sprintf('%s.email', $alias).' like :p2')
                ->setParameter('p2', $search_str)
            ->orWhere(sprintf('%s.mobile', $alias).' like :p2')
                ->setParameter('p2', $search_str)
        ;

        return true;
    }
    
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('firstname')
                ->add('lastname')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array('required' => false))
            ->end()
            
            ->with('Aditional Informations', array('collapsed' => true))
                ->add('date_of_birth', 'date', array(
                    'input'  => 'timestamp', 
                    'widget' => 'choice', 
                    'pattern' => '{{ year }} {{ month }} {{ day }}', 
                    'data_timezone' => 'Etc/UTC', 
                    'user_timezone' => 'Europe/London',
                    'empty_value' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day'),
                    'years' => range(date('Y') -80, date('Y') - 10)
                    )
                )
                ->add('place_of_birth')
                ->add('country_of_birth')
                ->add('citizenship')
                ->add('nationality')
                ->add('gender','choice', array(
                    'choices' => array(
                        'M' => 'male',
                        'F' => 'female'
                    )
                ))
                
            ->end()
                
           ->with("Address", array('collapsed' => true))
                ->add('address', 'sonata_type_collection', array(
                    'required' => false,
                    'by_reference' => false,
                    'label' => 'User Address'
                ), array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'link_parameters' => array('context' => 'default'),
                    'help' => 'Optionally add or select user address.'
                ))
           ->end()
            
           ->with('Management')
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('enabled', null, array('required' => false))
            ->end()
        ;
    }
    
    
    public function prePersist($user)
    {
        $group = $this->getGroupManager()->findGroupByName('storeowner');

        if (!$user->hasGroup('storeowner'))
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
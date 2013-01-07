<?php
/**
 * Description of UserAdmin
 *
 * @author bartek
 */
namespace Application\Sonata\UserBundle\Admin;


use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Application\Sonata\UserBundle\Entity\Address;

class AddressAdmin extends BaseAdmin{
    
    public function getNewInstance()
    {
        $class = $this->getClass();

        return new $class('', array());
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('address_name')
            
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('address_name')
        ;
    }
    
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('address_name', null, array('label' => 'address.form.name'))
            ->add('line_1')
            ->add('line_2')    
            ->add('town')
            //->add('county') 
            ->add('postcode')
            //->add('country')  
            ->add('type','choice', array(
                    'choices' => array(
                        Address::TYPE_BILLING => Address::TYPE_BILLING,
                        Address::TYPE_DELIVERY => Address::TYPE_DELIVERY
                    )
                ))
        ;
    }
    
    
}
<?php
namespace Traffic\StoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Application\Sonata\UserBundle\Entity\Address;


/**
 * Description of UserAdmin
 *
 * @author bartek
 */
class ProductAdmin extends BaseAdmin{
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('price')
            ->add('store')
            
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }
    
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('store')
            ->add('category')    
            ->add('price','money')
            ->add('vat_rate')
        ;
    }
    
    
}
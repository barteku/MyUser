<?php
/**
 * Description of UserAdmin
 *
 * @author bartek
 */
namespace Traffic\StoreBundle\Admin;


use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;


class CategoryAdmin extends BaseAdmin{
    
    protected $baseRouteName = 'traffic_store_bundle_category_admin';
    protected $baseRoutePattern = '/store/category';
    
    
    public function configureRoutes(RouteCollection $collection) {
        $collection->add('tree_rename','tree/rename');
        $collection->add('tree_remove','tree/remove');
        $collection->add('tree_add','tree/add');
        $collection->add('tree_move','tree/move');
        
        //$collection->remove('create');
        $collection->remove('delete');
        $collection->remove('add');
    }
    
    
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('parent')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array()
                )
            ))
            
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
            ->add('parent')
            //->add('children')    
        ;
    }
    
    
    
    public function getObjectRepository(){
        return $this->getConfigurationPool()->getContainer()->get('doctrine')->getRepository($this->getClass());
    }
    
}
<?php
namespace Traffic\StoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Application\Sonata\UserBundle\Entity\Address;

use Kitpages\FileSystemBundle\Model\AdapterFile;
use Kitpages\FileSystemBundle\Service\Adapter\AmazonS3;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Description of UserAdmin
 *
 * @author bartek
 */
class StoreAdmin extends BaseAdmin{
    
    protected $s3Adapter;
    
    
    public function __construct($code, $class, $baseControllerName, AmazonS3 $s3Adapter) {
        parent::__construct($code, $class, $baseControllerName);
        
        $this->s3Adapter = $s3Adapter;
    }
    
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            
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
            ->add('logo_file', 'file')
            ->add('description')
            ->add('owner')    
            ->add('company_name')
            ->add('enabled')
            ->add('live')
        ;
    }
    
    public function prePersist($object) {
        parent::prePersist($object);
        $filename = sha1(uniqid(mt_rand(), true));
        
        $object->setLogo($filename.'.'.$object->logo_file->guessExtension());
        
    }
    
    
    public function postPersist($object) {
        parent::prePersist($object);
        
        $this->s3Adapter->copyTempToAdapter($object->logo_file, new AdapterFile("/store/".$object->getId()."/logo/".$object->getLogo()));
    }
        
}
<?php
/**
 * Description of LearningStructureManager
 *
 * @author bartek
 */
namespace Traffic\StoreBundle\Manager;

use Doctrine\ORM\EntityManager;
use Traffic\StoreBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;



class CategoryManager {
    
    protected $em;
    protected $class;
    protected $repository;
    
    
    /**
     * Constructor.
     *
     * @param EntityManager           $em
     * @param string                  $class
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $em->getRepository($class);

        $metadata = $em->getClassMetadata($class);
        $this->class = $metadata->name;
    }
    
    
    /**
     * {@inheritDoc}
     */
    public function getClass()
    {
        return $this->class;
    }
    
    /**
     * Returns an empty category instance
     *
     * @return LearningStructure
     */
    public function create($name = null)
    {
        $class = $this->getClass();
        $object = new $class;
        
        if($name != null){
            $object->setName($name);
        }
            
        return $object;
    }
    
    
    public function rename($id, $name){
        $object = $this->findById($id);
        $object->setName($name);
        
        $this->persist($object);
        return $object;
    }
    
    public function persist(LearningStructure $object, $andFlush = true)
    {
        $this->em->persist($object);
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    
    public function findById($id){
        return $this->findBy(array('id' => $id));
    }
    

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    
    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria)
    {
        return $this->repository->findBy($criteria);
    }
    
    
    public function move(Request $request){
        $node = $this->findById($request->get('node'));
        $new_parent = $request->get('parent',null);
        
        $position = explode('_', $request->get('position'));
        
        if($new_parent == null){
            $node->setParent(null);
            
            $this->repository->persistAsNextSibling($node);
            $this->em->flush();
            $move = $position[1] - 1 - $position[0];
            
            if($move > 0){
                $this->repository->moveUp($node, $move);
                $this->em->flush();
            }
        }else{
            $new_parent = $this->findById($new_parent);
            
            if($new_parent instanceof LearningStructure){
                if($node->getParent() === $new_parent){
                    $old_position = ($node->getLft() - $node->getParent()->getLft() -1)/2;
                    $new_position = $position[0];
                    
                    $move = abs($new_position - $old_position);
                    if($move > 0){
                        if($new_position > $old_position){
                            $this->repository->moveDown($node, $move);
                        }else{
                            $this->repository->moveUp($node, $move);
                        }
                    }
                    $this->em->flush();
                    
                }else{
                    $move = $position[1] - 1 - $position[0];
                    $this->repository->persistAsLastChildOf($node, $new_parent);
                    $this->em->flush();
                    if($move > 0){
                        $this->repository->moveUp($node, $move);
                        $this->em->flush();
                    }
                }
            }
            
        }
        
        
        
    }
    
    
    
    
    
}
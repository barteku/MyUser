<?php
/**
 * Description of CategoryModel
 *
 * @author bart
 */
namespace Traffic\StoreBundle\Model;

use Traffic\StoreBundle\Model\CategoryInterface;


class CategoryModel implements CategoryInterface {

    /**
     * unique identifier
     * 
     * @var type mixed
     */
    protected $id;

    /**
     *
     * @var type string
     */
    protected $name;

    /**
     *
     * @var type integer
     */
    protected $lft;

    /**
     *
     * @var type integer
     */
    protected $lvl;

    /**
     *
     * @var type integer
     */
    protected $rgt;

    /**
     *
     * @var type integer
     */
    protected $root;

    /**
     *
     * @var type object Category
     */
    protected $parent;

    /**
     *
     * @var type ArrayCollection
     */
    protected $children;
    
    /**
     *
     * @var type \DateTime
     */
    protected $deletedAt;
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return self
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return self
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    
        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return self
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     * @return self
     */
    public function setRoot($root)
    {
        $this->root = $root;
    
        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set parent
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $parent
     * @return self
     */
    public function setParent(\Traffic\StoreBundle\Model\CategoryInterface $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \Traffic\StoreBundle\Model\CategoryInterface
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $children
     * @return self
     */
    public function addChildren(\Traffic\StoreBundle\Model\CategoryInterface $children)
    {
        $this->children[] = $children;
    
        return $this;
    }

    /**
     * Remove children
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $children
     */
    public function removeChildren(\Traffic\StoreBundle\Model\CategoryInterface $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt)
    {
        $this->deletedAt = $deletedAt;
    
        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
    
    
    
}
<?php
/**
 *
 * @author bart
 */
namespace Traffic\StoreBundle\Model;

interface CategoryInterface {

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set lft
     *
     * @param integer $lft
     * @return self
     */
    public function setLft($lft);

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft();
    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return self
     */
    public function setLvl($lvl);

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl();

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return self
     */
    public function setRgt($rgt);

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt();

    /**
     * Set root
     *
     * @param integer $root
     * @return self
     */
    public function setRoot($root);

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot();

    /**
     * Set parent
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $parent
     * @return self
     */
    public function setParent(\Traffic\StoreBundle\Model\CategoryInterface $parent = null);

    /**
     * Get parent
     *
     * @return \Traffic\StoreBundle\Model\CategoryInterface
     */
    public function getParent();

    /**
     * Add children
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $children
     * @return self
     */
    public function addChildren(\Traffic\StoreBundle\Model\CategoryInterface $children);

    /**
     * Remove children
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $children
     */
    public function removeChildren(\Traffic\StoreBundle\Model\CategoryInterface $children);

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren();

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt);

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt();
    
    
}



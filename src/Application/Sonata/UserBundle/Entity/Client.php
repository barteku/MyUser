<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * 
 */
class Client extends User {

    
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @var \DateTime
     */
    protected $deletedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;
   
    /**
     * @var boolean $loyalty_points
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $hi_points;
    
    
    
    /**
     * Set hi_points
     *
     * @param integer $hiPoints
     * @return Client
     */
    public function setHiPoints($hiPoints)
    {
        $this->hi_points = $hiPoints;
    
        return $this;
    }

    /**
     * Get hi_points
     *
     * @return integer 
     */
    public function getHiPoints()
    {
        return $this->hi_points;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set created
     *
     * @param \DateTime $created
     * @return Client
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Client
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Client
     */
    public function setDeletedAt($deletedAt)
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

    /**
     * Add address
     *
     * @param \Application\Sonata\UserBundle\Entity\Address $address
     * @return Client
     */
    public function addAddress(\Application\Sonata\UserBundle\Entity\Address $address)
    {
        $this->address[] = $address;
    
        return $this;
    }

    /**
     * Remove address
     *
     * @param \Application\Sonata\UserBundle\Entity\Address $address
     */
    public function removeAddres(\Application\Sonata\UserBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
    }

    
}
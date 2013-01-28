<?php
/**
 * Description of UserModel
 *
 * @author bart
 */
namespace Application\Sonata\UserBundle\Model;

use Sonata\UserBundle\Model\User as SonataBaseUser;
use Application\Sonata\UserBundle\Model\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;


class User extends SonataBaseUser implements UserInterface  {
    
    /**
     * @var integer $id
     *
     */
    protected $id;
    
    /**
     * @var type ArrayCollection
     */
    protected $address;
    
    /**
     * @var type ArrayCollection
     */
    protected $groups;

        
    /**
     * @var type \DateTime
     */
    protected $createdBy;
    
    /**
     * @var type \DateTime
     */
    protected $updatedBy;
    
    /**
     * @var type \DateTime
     */
    protected $deletedAt;
    
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->address = new ArrayCollection();
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
     * set address
     *
     * @param array of Address objects
     * @return self
     */
    public function setAddress($address)
    {
        foreach($address as $a){
            $this->addAddress($a);
        }
        
        return $this;
    }
    
    /**
     * Add address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     * @return self
     */
    public function addAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address)
    {
        $this->address[] = $address;
        $address->setUser($this);
        return $this;
    }

    /**
     * Remove address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     */
    public function removeAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address)
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

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return self
     */
    public function setUpdatedBy(\DateTime $updatedBy)
    {
        $this->updatedBy = $updatedBy;
    
        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return self
     */
    public function setCreatedBy(\DateTime $createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }
    
     /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
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

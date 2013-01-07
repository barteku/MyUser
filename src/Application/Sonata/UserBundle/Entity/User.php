<?php
namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Application\Sonata\UserBundle\Entity\Group;
use Application\Sonata\UserBundle\Entity\Address;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 * @ORM\MappedSuperclass
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"storeowner" = "StoreOwner", "client" = "Client", "emploee" = "Emploee"})
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
abstract class User extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="user", cascade={"all"})
     */
    protected $address;
   
    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;


    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    protected $deletedAt;



    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return StoreOwner
     */
    public function addAddre(\Application\Sonata\UserBundle\Entity\Address $address)
    {
        $this->addAddres($address);
    
        return $this;
    }
    
    /**
     * Add address
     *
     * @param \Application\Sonata\UserBundle\Entity\Address $address
     * @return User
     */
    public function addAddres(\Application\Sonata\UserBundle\Entity\Address $address)
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
<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Application\Sonata\UserBundle\Entity\Address
 *
 * @ORM\Table(name="Address")
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class Address {
    
    const TYPE_BILLING = 'billing';
    const TYPE_DELIVERY = 'delivery';
    
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $address_name
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    private $address_name;

    /**
     * @var string $line_1
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required line_1", groups={"checkout"})
     */
    private $line_1;

    /**
     * @var string $line_2
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $line_2;

    /**
     * @var string $town
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required town", groups={"checkout"})
     */
    private $town;

    /**
     * @var string $county
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $county;

    /**
     * @var string $country
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string $postcode
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required postcode", groups={"checkout"})
     */
    private $postcode;

    /**
     * @var string $telephone
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required", groups={"checkout"})
     */
    private $telephone;
    
    
    /**
     * @var string $type
     *
     * @ORM\Column(type="string", columnDefinition="ENUM('billing', 'delivery')")
     */
    private $type;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"})
     */
    private $user;

    
    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $created;

    
    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    
    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;
    
    /**
     * @var boolean $is_default
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_default = 0;
    
    
    
    
    
    public function __construct()
    {
        $this->type = self::TYPE_DELIVERY;
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
     * Set address_name
     *
     * @param string $addressName
     * @return Address
     */
    public function setAddressName($addressName)
    {
        $this->address_name = $addressName;
    
        return $this;
    }

    /**
     * Get address_name
     *
     * @return string 
     */
    public function getAddressName()
    {
        return $this->address_name;
    }

    /**
     * Set line_1
     *
     * @param string $line1
     * @return Address
     */
    public function setLine1($line1)
    {
        $this->line_1 = $line1;
    
        return $this;
    }

    /**
     * Get line_1
     *
     * @return string 
     */
    public function getLine1()
    {
        return $this->line_1;
    }

    /**
     * Set line_2
     *
     * @param string $line2
     * @return Address
     */
    public function setLine2($line2)
    {
        $this->line_2 = $line2;
    
        return $this;
    }

    /**
     * Get line_2
     *
     * @return string 
     */
    public function getLine2()
    {
        return $this->line_2;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->town = $town;
    
        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;
    
        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Address
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Address
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
     * @return Address
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
     * @return Address
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
     * Set is_default
     *
     * @param boolean $isDefault
     * @return Address
     */
    public function setIsDefault($isDefault)
    {
        $this->is_default = $isDefault;
    
        return $this;
    }

    /**
     * Get is_default
     *
     * @return boolean 
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return Address
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
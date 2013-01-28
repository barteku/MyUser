<?php
/**
 * Description of AddressModel
 *
 * @author bart
 */

namespace Application\Sonata\UserBundle\Model;
use Application\Sonata\UserBundle\Model\AddressInterface;


class Address implements AddressInterface {
    
    /**
     * @var integer $id
     *
     */
    protected $id;

    /**
     * @var string $address_name
     *
     */
    protected $address_name;

    /**
     * @var string $line_1
     *
     */
    protected $line_1;

    /**
     * @var string $line_2
     *
     */
    protected $line_2;

    /**
     * @var string $town
     *
     */
    protected $town;

    /**
     * @var string $county
     *
     */
    protected $county;

    /**
     * @var string $country
     *
     */
    protected $country;

    /**
     * @var string $postcode
     *
     */
    protected $postcode;

    /**
     * @var string $telephone
     *
     */
    protected $telephone;

    /**
     * @var string $mobile
     *
     */
    protected $mobile;
    
    /**
     *
     * @var type UserInterface
     */
    protected $user;
    
    /**
     * @var string $type
     */
    protected $type;
    
    /**
     * @var datetime $updated
     */
    protected $createdAt;

    /**
     * @var datetime $updated
     *
     */
    protected $updatedAt;
    
    /**
     * @var boolean $is_default
     * 
     */
    protected $is_default = 0;
    
    
    
    
    public function __construct()
    {
        $this->type = self::TYPE_BILLING;
    }
    
    
    public function __toString() {
        return $this->getAddressName().','.$this->getLine1().",".$this->getTown();
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * Set mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return self
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
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return self
     */
    public function setUser(\Application\Sonata\UserBundle\Model\UserInterface $user = null)
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
    
    
}

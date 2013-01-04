<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User;


/**
 * @ORM\Entity
 * 
 */
class StoreOwner extends User {

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
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $place_of_birth;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $country_of_birth;
    
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nationality;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $citizenship;
    
    /** 
     * @ORM\Column(type="string", columnDefinition="ENUM('F', 'M')") 
     * 
     */
    protected $sex;

    /**
     * @var string
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    protected $mobile;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=9, nullable=true)
     */
    protected $phone_number;

   
    
    /**
     * Set place_of_birth
     *
     * @param string $placeOfBirth
     * @return StoreOwner
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->place_of_birth = $placeOfBirth;
    
        return $this;
    }

    /**
     * Get place_of_birth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->place_of_birth;
    }

    /**
     * Set country_of_birth
     *
     * @param string $countryOfBirth
     * @return StoreOwner
     */
    public function setCountryOfBirth($countryOfBirth)
    {
        $this->country_of_birth = $countryOfBirth;
    
        return $this;
    }

    /**
     * Get country_of_birth
     *
     * @return string 
     */
    public function getCountryOfBirth()
    {
        return $this->country_of_birth;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return StoreOwner
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set citizenship
     *
     * @param string $citizenship
     * @return StoreOwner
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;
    
        return $this;
    }

    /**
     * Get citizenship
     *
     * @return string 
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return StoreOwner
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return StoreOwner
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
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return StoreOwner
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phone_number
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
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
     * @return StoreOwner
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
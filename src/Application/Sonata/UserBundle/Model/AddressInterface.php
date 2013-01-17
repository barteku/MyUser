<?php
/**
 *
 * @author bart
 */

namespace Application\Sonata\UserBundle\Model;


interface AddressInterface {

    const TYPE_BILLING = 'billing';
    const TYPE_DELIVERY = 'delivery';
    
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId();

    /**
     * Set address_name
     *
     * @param string $addressName
     * @return self
     */
    public function setAddressName($addressName);
    
    /**
     * Get address_name
     *
     * @return string 
     */
    public function getAddressName();

    /**
     * Set line_1
     *
     * @param string $line1
     * @return self
     */
    public function setLine1($line1);

    /**
     * Get line_1
     *
     * @return string 
     */
    public function getLine1();

    /**
     * Set line_2
     *
     * @param string $line2
     * @return self
     */
    public function setLine2($line2);

    /**
     * Get line_2
     *
     * @return string 
     */
    public function getLine2();

    /**
     * Set town
     *
     * @param string $town
     * @return self
     */
    public function setTown($town);

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown();

    /**
     * Set county
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county);

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty();

    /**
     * Set country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country);

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry();

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return self
     */
    public function setPostcode($postcode);

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode();

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone);

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone();

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile);

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile();

    /**
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return string 
     */
    public function getType();
    

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Model\UserInterface $user
     * @return self
     */
    public function setUser(\Application\Sonata\UserBundle\Model\UserInterface $user = null);

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Model\UserInterface
     */
    public function getUser();
    
    
}


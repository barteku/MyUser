<?php
/**
 *
 * @author bart
 */

namespace Application\Sonata\UserBundle\Model;

interface StoreOwnerInterface {
    
    /**
     * Set place_of_birth
     *
     * @param string $placeOfBirth
     * @return self
     */
    public function setPlaceOfBirth($placeOfBirth);

    /**
     * Get place_of_birth
     *
     * @return string 
     */
    public function getPlaceOfBirth();

    /**
     * Set country_of_birth
     *
     * @param string $countryOfBirth
     * @return self
     */
    public function setCountryOfBirth($countryOfBirth);

    /**
     * Get country_of_birth
     *
     * @return string 
     */
    public function getCountryOfBirth();
    
    /**
     * Set nationality
     *
     * @param string $nationality
     * @return self
     */
    public function setNationality($nationality);

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality();

    /**
     * Set citizenship
     *
     * @param string $citizenship
     * @return self
     */
    public function setCitizenship($citizenship);

    /**
     * Get citizenship
     *
     * @return string 
     */
    public function getCitizenship();
    
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
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * Get phone_number
     *
     * @return string 
     */
    public function getPhoneNumber();

    
    
}


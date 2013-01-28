<?php
namespace Traffic\StoreBundle\Model;

/**
 *
 * @author bart
 */
interface StoreInterface {
    
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
     * @return Store
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set description
     *
     * @param string $description
     * @return Store
     */
    public function setDescription($description);
    

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set slug
     *
     * @param string $slug
     * @return Store
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug();

    /**
     * Set company_name
     *
     * @param string $companyName
     * @return Store
     */
    public function setCompanyName($companyName);

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Store
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled();

    /**
     * Set live
     *
     * @param boolean $live
     * @return Store
     */
    public function setLive($live);

    /**
     * Get live
     *
     * @return boolean 
     */
    public function getLive();

    /**
     * Set owner
     *
     * @param \Application\Sonata\UserBundle\Model\StoreOwnerInterface $owner
     * @return Store
     */
    public function setOwner(\Application\Sonata\UserBundle\Model\StoreOwnerInterface $owner = null);

    /**
     * Get owner
     *
     * @return \Application\Sonata\UserBundle\Model\StoreOwnerInterface 
     */
    public function getOwner();

    /**
     * Set address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     * @return Store
     */
    public function setAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address = null);

    /**
     * Get address
     *
     * @return \Application\Sonata\UserBundle\Model\AddressInterface 
     */
    public function getAddress();

    /**
     * Add products
     *
     * @param \Traffic\StoreBundle\Model\ProductInterface $products
     * @return Store
     */
    public function addProduct(\Traffic\StoreBundle\Model\ProductInterface $products);

    /**
     * Remove products
     *
     * @param \Traffic\StoreBundle\Model\ProductInterface $products
     */
    public function removeProduct(\Traffic\StoreBundle\Model\ProductInterface $products);

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts();
    
    
}

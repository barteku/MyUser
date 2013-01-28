<?php
namespace Traffic\StoreBundle\Model;


/**
 *
 * @author bart
 */
interface ProductInterface {
    
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
     * @return Product
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string 
     */
    public function getName();

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug();

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription();

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price);

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice();

    /**
     * Set vat_rate
     *
     * @param float $vatRate
     * @return Product
     */
    public function setVatRate($vatRate);

    /**
     * Get vat_rate
     *
     * @return float 
     */
    public function getVatRate();

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Product
     */
    public function setCreated(\DateTime $created);

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated();

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Product
     */
    public function setUpdated(\DateTime $updated);

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated();

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Product
     */
    public function setDeletedAt(\DateTime $deletedAt);

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt();

    /**
     * Set store
     *
     * @param \Traffic\StoreBundle\Model\StoreInterface $store
     * @return Product
     */
    public function setStore(\Traffic\StoreBundle\Model\StoreInterface $store = null);

    /**
     * Get store
     *
     * @return \Traffic\StoreBundle\Model\StoreInterface
     */
    public function getStore();

    /**
     * Set category
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterfac $category
     * @return Product
     */
    public function setCategory(\Traffic\StoreBundle\Model\CategoryInterface $category = null);

    /**
     * Get category
     *
     * @return \Traffic\StoreBundle\Model\CategoryInterfac
     */
    public function getCategory();
}

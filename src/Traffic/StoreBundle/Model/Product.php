<?php

namespace Traffic\StoreBundle\Model;
use Traffic\StoreBundle\Model\ProductInterface;


/**
 * Description of Product
 *
 * @author bart
 */
class Product implements ProductInterface {

    /**
     * unique identifier
     * 
     * @var type mixed
     */
    protected $id;

    /**
     *
     * @var type string
     */
    protected $name;
    
    /**
     *
     * @var type object Traffic\StoreBundle\Store
     */
    protected $store;
    
    /**
     * @var string $slug
     * 
     */
    protected $slug;
    
    /**
     * @var string $description
     * 
     */
    protected $description;
    
    /**
     *
     * @var type float
     */
    protected $price;
    
    /**
     *
     * @var type integer
     */
    protected $vat_rate;
    
    /**
     *
     * @var type object Traffic\StoreBundle\Model\CategoryInterface
     */
    protected $category;
    
    /**
     *
     * @var type ArrayCollection
     */
    protected $images;
    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set vat_rate
     *
     * @param float $vatRate
     * @return self
     */
    public function setVatRate($vatRate)
    {
        $this->vat_rate = $vatRate;
    
        return $this;
    }

    /**
     * Get vat_rate
     *
     * @return float 
     */
    public function getVatRate()
    {
        return $this->vat_rate;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return self
     */
    public function setCreated(\DateTime $created)
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
     * @return self
     */
    public function setUpdated(\DateTime $updated)
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

    /**
     * Set store
     *
     * @param \Traffic\StoreBundle\Model\StoreInterface $store
     * @return self
     */
    public function setStore(\Traffic\StoreBundle\Model\StoreInterface $store = null)
    {
        $this->store = $store;
    
        return $this;
    }

    /**
     * Get store
     *
     * @return \Traffic\StoreBundle\Model\StoreInterface 
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Set category
     *
     * @param \Traffic\StoreBundle\Model\CategoryInterface $category
     * @return self
     */
    public function setCategory(\Traffic\StoreBundle\Model\CategoryInterface $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Traffic\StoreBundle\Model\CategoryInterface
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    
}


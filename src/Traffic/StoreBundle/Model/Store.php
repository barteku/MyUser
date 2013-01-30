<?php

namespace Traffic\StoreBundle\Model;

use Traffic\StoreBundle\Model\StoreInterface;

/**
 * Description of Store
 *
 * @author bart
 */
class Store implements StoreInterface {
    
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
     * @var type string
     */
    protected $logo;
    
    
    /**
     * @var string $description
     * 
     */
    protected $description;
    
    /**
     * @var string $slug
     * 
     */
    protected $slug;
    
    /**
     *
     * @var type object Application\Sonata\UserBundle\Model\StoreOwnerInterface
     */
    protected $owner;
    
    /**
     *
     * @var type string
     */
    protected $company_name;
    
    /**
     * @var type ArrayCollection
     */
    protected $address;
    
    /**
     *
     * @var type ArrayCollection
     */
    protected $images;
    
    /**
     *
     * @var type ArrayCollection
     */
    protected $products;
    
    /**
     *
     * @var type boolean
     */
    protected $enabled = false;

    /**
     *
     * @var type boolean
     */
    protected $live = false;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set company_name
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;
    
        return $this;
    }

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set live
     *
     * @param boolean $live
     * @return self
     */
    public function setLive($live)
    {
        $this->live = $live;
    
        return $this;
    }

    /**
     * Get live
     *
     * @return boolean 
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * Set owner
     *
     * @param \Application\Sonata\UserBundle\Model\StoreOwnerInterface $owner
     * @return self
     */
    public function setOwner(\Application\Sonata\UserBundle\Model\StoreOwnerInterface $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return \Application\Sonata\UserBundle\Model\StoreOwnerInterface 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     * @return self
     */
    public function setAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return \Application\Sonata\UserBundle\Model\AddressInterface 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add products
     *
     * @param \Traffic\StoreBundle\Model\ProductInterface $products
     * @return self
     */
    public function addProduct(\Traffic\StoreBundle\Model\ProductInterface $products)
    {
        $this->products[] = $products;
    
        return $this;
    }

    /**
     * Remove products
     *
     * @param \Traffic\StoreBundle\Model\ProductInterface $products
     */
    public function removeProduct(\Traffic\StoreBundle\Model\ProductInterface $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * 
     * @return type string
     */
    public function getLogo(){
        return $this->logo;
    }
    
    /**
     * 
     * @param type $logo
     * @return self
     */
    public function setLogo($logo){
        $this->logo = $logo;
        
        return $this;
    }
}


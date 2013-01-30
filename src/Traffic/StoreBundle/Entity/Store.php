<?php

namespace Traffic\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

use Traffic\StoreBundle\Model\Store as StoreModel;

/**
 * Description of Store
 * 
 * @ORM\Table(name="Store")
 * @ORM\Entity(repositoryClass="Traffic\StoreBundle\Repository\StoreRepository")
 * @author bart
 */
class Store extends StoreModel {
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *    message="Please provide your shop name"
     * )
     */
    protected $name;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $logo_file;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $logo;
    
    /**
     * @var string $description
     * 
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;
    
    /**
     * @var string $slug
     * 
     * @Gedmo\Slug(fields={"name"}, unique=true, updatable=true)
     * @ORM\Column(type="string", length=255)
     */
    protected $slug;
    
    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\StoreOwner", inversedBy="stores")
     * 
     */
    protected $owner;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $company_name;
    
    /**
     * @ORM\OneToOne(targetEntity="Application\Sonata\UserBundle\Entity\Address", cascade={"all"}, orphanRemoval=true)
     */
    protected $address;
    
    /**
     *
     * @var type ArrayCollection
     */
    //protected $images;
    
    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="store", cascade={"persist"})
     */
    protected $products;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $enabled = false;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $live = false;
    
}
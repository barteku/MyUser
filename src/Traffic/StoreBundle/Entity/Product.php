<?php

namespace Traffic\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

use Traffic\StoreBundle\Model\Product as ProductModel;

/**
 * Description of Product
 * 
 * @ORM\Table(name="Product")
 * @ORM\Entity(repositoryClass="Traffic\StoreBundle\Repository\ProductRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 * @Gedmo\Loggable
 * @author bart
 */
class Product extends ProductModel {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;

    /**
     * @var string $name
     * @Gedmo\Versioned
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(
     *    message="Please provide a product name."
     * )
     * 
     */
    protected $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Store", inversedBy="products")
     * @ORM\OrderBy({"name" = "ASC"})
     * 
     */
    protected $store;
    
    /**
     * @var string $slug
     * @Gedmo\Slug(fields={"name"}, unique=true, updatable=true)
     * @ORM\Column(type="string", length=255)
     * 
     */
    protected $slug;
    
    /**
     * @var string $description
     * @Gedmo\Versioned
     * @ORM\Column(type="string", length=2000)
     * @Assert\NotBlank(
     *    message="Please provide a description for product."
     * )
     */
    protected $description;
    
    /**
     * @var decimal $price
     * @Gedmo\Versioned
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     * @var decimal $vat_rate
     * @Gedmo\Versioned
     * @ORM\Column(type="decimal", scale=2)
     * 
     */
    protected $vat_rate;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @Assert\NotBlank(
     *    message="Please provide a category."
     * )
     */
    protected $category;
    
    /**
     *
     * @var type ArrayCollection
     */
    //protected $images;
    
    /**
     * @var datetime $created
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $created;
    
    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updated;
    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    protected $deletedAt;

   
}
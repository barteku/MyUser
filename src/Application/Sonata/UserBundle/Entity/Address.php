<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

use Application\Sonata\UserBundle\Model\AddressModel;

/**
 * Application\Sonata\UserBundle\Entity\Address
 *
 * @ORM\Table(name="Address")
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class Address extends AddressModel {
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $address_name
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    protected $address_name;

    /**
     * @var string $line_1
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required line_1", groups={"checkout"})
     */
    protected $line_1;

    /**
     * @var string $line_2
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $line_2;

    /**
     * @var string $town
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required town", groups={"checkout"})
     */
    protected $town;

    /**
     * @var string $county
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $county;

    /**
     * @var string $country
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $country;

    /**
     * @var string $postcode
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required postcode", groups={"checkout"})
     */
    protected $postcode;

    /**
     * @var string $telephone
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This field is required", groups={"checkout"})
     */
    protected $telephone;
    
    
    /**
     * @var string $type
     *
     * @ORM\Column(type="string", columnDefinition="ENUM('billing', 'delivery')")
     */
    protected $type;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"})
     */
    protected $user;

    
    /**
     * @var datetime $updated
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
    
    /**
     * @var boolean $is_default
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_default = 0;
    
    
}
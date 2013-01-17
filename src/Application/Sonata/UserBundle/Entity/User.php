<?php
namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Model\UserModel;


/**
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 * @ORM\MappedSuperclass
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"storeowner" = "StoreOwner", "client" = "Client", "emploee" = "Emploee"})
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
abstract class User extends UserModel
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="user", cascade={"all"})
     */
    protected $address;
   
    /**
     * @ORM\ManyToMany(targetEntity="Application\Sonata\UserBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;


    /**
     * @var string $createdBy
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(type="string", nullable=true)
     */
    protected $createdBy;
    
    /**
     * @var string $updatedBy
     * 
     * @Gedmo\Blameable(on="update")
     * @ORM\Column(type="string", nullable=true)
     * 
     */
    protected $updatedBy;

    
    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    protected $deletedAt;

}
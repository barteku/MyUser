<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\UserBundle\Entity\User;

/**
 * @ORM\Entity
 * 
 */
class Emploee extends User {
  
    
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @var \DateTime
     */
    protected $deletedAt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;
    
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $company_number;

    /**
     * @var string $bank_name
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $bank_name;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $bank_sortcode;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $bank_account_number;
    
    
    
    /**
     * Set company_number
     *
     * @param string $companyNumber
     * @return Emploee
     */
    public function setCompanyNumber($companyNumber)
    {
        $this->company_number = $companyNumber;
    
        return $this;
    }

    /**
     * Get company_number
     *
     * @return string 
     */
    public function getCompanyNumber()
    {
        return $this->company_number;
    }

    /**
     * Set bank_name
     *
     * @param string $bankName
     * @return Emploee
     */
    public function setBankName($bankName)
    {
        $this->bank_name = $bankName;
    
        return $this;
    }

    /**
     * Get bank_name
     *
     * @return string 
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Set bank_sortcode
     *
     * @param string $bankSortcode
     * @return Emploee
     */
    public function setBankSortcode($bankSortcode)
    {
        $this->bank_sortcode = $bankSortcode;
    
        return $this;
    }

    /**
     * Get bank_sortcode
     *
     * @return string 
     */
    public function getBankSortcode()
    {
        return $this->bank_sortcode;
    }

    /**
     * Set bank_account_number
     *
     * @param string $bankAccountNumber
     * @return Emploee
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bank_account_number = $bankAccountNumber;
    
        return $this;
    }

    /**
     * Get bank_account_number
     *
     * @return string 
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }

    

    
    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Emploee
     */
    public function setCreated($created)
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
     * @return Emploee
     */
    public function setUpdated($updated)
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
     * @return Emploee
     */
    public function setDeletedAt($deletedAt)
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
     * Add address
     *
     * @param \Application\Sonata\UserBundle\Entity\Address $address
     * @return Emploee
     */
    public function addAddress(\Application\Sonata\UserBundle\Entity\Address $address)
    {
        $this->address[] = $address;
    
        return $this;
    }

    
}
<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Model\EmploeeInterface;


/**
 * @ORM\Entity
 * 
 */
class Emploee extends User implements EmploeeInterface {
  
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

    

    
}
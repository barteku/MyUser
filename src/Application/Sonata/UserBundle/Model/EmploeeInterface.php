<?php
/**
 *
 * @author bart
 */
namespace Application\Sonata\UserBundle\Model;
use Application\Sonata\UserBundle\Model\UserInterface;


interface EmploeeInterface extends UserInterface {
    
    
    /**
     * Set company_number
     *
     * @param string $companyNumber
     * @return self
     */
    public function setCompanyNumber($companyNumber);

    /**
     * Get company_number
     *
     * @return string 
     */
    public function getCompanyNumber();

    /**
     * Set bank_name
     *
     * @param string $bankName
     * @return self
     */
    public function setBankName($bankName);

    /**
     * Get bank_name
     *
     * @return string 
     */
    public function getBankName();

    /**
     * Set bank_sortcode
     *
     * @param string $bankSortcode
     * @return self
     */
    public function setBankSortcode($bankSortcode);

    /**
     * Get bank_sortcode
     *
     * @return string 
     */
    public function getBankSortcode();

    /**
     * Set bank_account_number
     *
     * @param string $bankAccountNumber
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber);

    /**
     * Get bank_account_number
     *
     * @return string 
     */
    public function getBankAccountNumber();

    
}


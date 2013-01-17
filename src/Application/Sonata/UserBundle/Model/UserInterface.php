<?php
/**
 *
 * @author bart
 */

namespace Application\Sonata\UserBundle\Model;
use Sonata\UserBundle\Model\UserInterface as SonataUserInterface;

interface UserInterface extends SonataUserInterface {
    
    /**
     * Add address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     * @return User
     */
    public function addAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address);

    /**
     * Remove address
     *
     * @param \Application\Sonata\UserBundle\Model\AddressInterface $address
     */
    public function removeAddress(\Application\Sonata\UserBundle\Model\AddressInterface $address);

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress();

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return self
     */
    public function setUpdatedBy(\DateTime $updatedBy);

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy();

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return self
     */
    public function setCreatedBy(\DateTime $createdBy);

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy();
    
    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt);

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt();
}

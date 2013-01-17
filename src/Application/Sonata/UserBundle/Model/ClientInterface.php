<?php
/**
 *
 * @author bart
 */
namespace Application\Sonata\UserBundle\Model;

interface ClientInterface {
    
    
    /**
     * Set hi_points
     *
     * @param integer $hiPoints
     * @return self
     */
    public function setHiPoints($hiPoints);

    /**
     * Get hi_points
     *
     * @return integer 
     */
    public function getHiPoints();
    
}


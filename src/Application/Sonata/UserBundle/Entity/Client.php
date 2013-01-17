<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Model\ClientInterface;


/**
 * @ORM\Entity
 * 
 */
class Client extends User implements ClientInterface {

    /**
     * @var integer $loyalty_points
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $hi_points;
    
    
    
    /**
     * Set hi_points
     *
     * @param integer $hiPoints
     * @return Client
     */
    public function setHiPoints($hiPoints)
    {
        $this->hi_points = $hiPoints;
    
        return $this;
    }

    /**
     * Get hi_points
     *
     * @return integer 
     */
    public function getHiPoints()
    {
        return $this->hi_points;
    }
    
}
<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="session")
 */
class Session {

    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $session_id;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $session_value;
       
    
     /**
     * @ORM\Column(type="datetime")
     */
    protected $session_time;
    
    
    
}
<?php

namespace Api\Entity\Userdata;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="userdata_user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    protected $id;
    /**
     * @ORM\Column(name="first_name", type="string", nullable=true)
     */    
    protected $firstName;
    /**
     * @ORM\Column(name="last_name", type="string", nullable=true)
     */    
    protected $lastName;
        
/*** Getters and Setters ***/

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }    
    
    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
        
/*** End: Getters and Setters ***/
    
}
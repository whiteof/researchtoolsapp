<?php

namespace Api\Model;

use Api\Entity\Userdata\User;

class UserdataModel
{
    
    protected $EntityManager;
    
    public function __construct($EntityManager) {
        $this->EntityManager = $EntityManager;
    }
    
    public function getAllUsers() {
        $Items = $this->EntityManager->getRepository('Api\Entity\Userdata\User')->findAll();
        return $Items;
    }

    public function getUserById($id) {
        $Item = $this->EntityManager->getRepository('Api\Entity\Userdata\User')->find($id);
        return $Item;
    }
    
    public function saveUserdata($data) {
        if(!empty($data)) {
            $dataArr = json_decode($data['userdata'], true);
            $User = new User();
            /*
            foreach($dataArr as $dataItem) {
                $User->setFirstName($dataItem);
            }
            */
            $User->setFirstName($dataArr['first_name']);
            $User->setLastName($dataArr['last_name']);
            $this->EntityManager->persist($User);
            $this->EntityManager->flush();
            return $User->getId();
        }
        return null;
    }
    
}
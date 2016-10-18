<?php

namespace Api\Factory;

use Api\Model\UserdataModel;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserdataModelFactory implements FactoryInterface
{
    /**
     * Create service
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $EntityManager = $serviceLocator->get('doctrine.entitymanager.orm_default');
        return new UserdataModel($EntityManager);
    }
    
}
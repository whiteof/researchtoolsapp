<?php

namespace Api\Factory;

use Api\Controller\UserdataController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserdataControllerFactory implements FactoryInterface
{
    /**
     * Create service
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $UserdataModel = $realServiceLocator->get('Api\Model\UserdataModel');
        return new UserdataController($UserdataModel);
    }
    
}
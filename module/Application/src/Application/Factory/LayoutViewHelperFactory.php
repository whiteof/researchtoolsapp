<?php

namespace Application\Factory;

use Application\Helper\LayoutViewHelper;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class LayoutViewHelperFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $userAuthService    = $realServiceLocator->get('zfcuser_auth_service');

        return new LayoutViewHelper($userAuthService);
    }
}
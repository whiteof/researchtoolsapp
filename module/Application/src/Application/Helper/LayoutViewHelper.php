<?php

namespace Application\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\Authentication\AuthenticationService;

class LayoutViewHelper extends AbstractHelper
{
    /**
     * @var \Zend\Authentication\AuthenticationService
     */
    protected $userAuthService;

    public function __construct(AuthenticationService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }    
    
    public function getUserAuthService()
    {
        return $this->userAuthService;
    }
    
}
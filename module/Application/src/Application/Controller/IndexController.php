<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Authentication\AuthenticationService;

class IndexController extends AbstractActionController
{
    /**
     * @var \Zend\Authentication\AuthenticationService
     */
    protected $userAuthService;

    public function __construct(AuthenticationService $userAuthService)
    {
        $this->userAuthService = $userAuthService;
    }    
    
    public function indexAction()
    {
        $this->layout('layout/home');
        return new ViewModel();
    }
}

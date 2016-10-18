<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserdataController extends AbstractActionController
{
    
    protected $UserdataModel;
    
    public function __construct($UserdataModel) {
        $this->UserdataModel = $UserdataModel;
    }
    
    public function submitAction()
    {
        $id = 1;
        $request = $this->getRequest();
        if ($request->isPost()) {
            $data = $request->getPost();
            $id = $this->UserdataModel->saveUserdata($data);
		}

        
        
        
        $item = $this->UserdataModel->getUserById($id);
        $view = array(
            'request' => 'test123',
            //'items' => $items,
            'item' => $item
        );
        
        $viewModel = new ViewModel();
        $viewModel->setVariables($view);
        $viewModel->setTerminal(true);
        return $viewModel;        
    }
}

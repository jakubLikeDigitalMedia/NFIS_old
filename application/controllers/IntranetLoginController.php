<?php

class IntranetLoginController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_helper->layout()->setLayout('layout');
        $this->view->headTitle('Login');
        $this->view->headScript()->appendFile('login.js');
        $this->view->content = 'Content';
    }


}


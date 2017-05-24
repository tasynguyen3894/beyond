<?php

    class indexController extends ControllerBase
    {
        public function init()
        {
           
        }

        public function indexAction()
        {
            $this->view->setVar('title', 'HOME');
        }
    }
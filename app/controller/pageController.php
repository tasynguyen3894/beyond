<?php

    class pageController extends ControllerBase
    {
        public function init()
        {
           parent::init();
        }

        public function aboutAction()
        {
            $this->view->setVar('title', 'ABOUT');
        }

        public function contactAction()
        {
            $this->view->setVar('title', 'CONTACT');
        }
    }
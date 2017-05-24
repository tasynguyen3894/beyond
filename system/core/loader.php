<?php

    // Load all

    class Loader
    {
        private $controller_name;
        private $action_name;

        private function _loadFile()
        {
            // Load config
            require_once(PATH_CORE . "/config.php");

            foreach (glob(PATH_LIBRARY . "/*.php") as $filename)
            {
                require_once($filename);
            }

            // Load all core 
            require_once(PATH_CORE . "/view.php");
            require_once(PATH_CORE . "/controller.php");

            foreach (glob(PATH_APPLICATION . "/controller/*.php") as $filename)
            {
                require_once($filename);
            }

        }

        private function _loadController()
        {
            if(isset($_GET['_request_uri']) && !empty($_GET['_request_uri']))
            {
                $request_Uri = $_GET['_request_uri'];
            }
            else
            {
                $request_Uri = "";
            }

            $array_request_Uri = explode("/", $request_Uri);

            if(isset($array_request_Uri[0]) && !empty($array_request_Uri[0]))
            {
                $controller = $array_request_Uri[0];
            }
            else
            {
                $controller = 'index';
            }

            if(isset($array_request_Uri[1]) && !empty($array_request_Uri[1]))
            {
                $action = $array_request_Uri[1];
            }
            else
            {
                $action = 'index';
            }

            $this->controller_name = $controller;
            $this->action_name = $action;

            $controller_name = ucfirst($controller) . "Controller";
            $action_name = strtolower($action) . "Action";
            if (!file_exists(PATH_APPLICATION . '/controller/' . $controller_name . '.php')){
                die ('Controller not exist!');
            }

            // require_once(PATH_APPLICATION . '/controller/' . $controller_name . '.php');

            if (!class_exists($controller_name)){
                die ('Controller not exist!');
            }
            
            $controller_call = new $controller_name();

            if ( !method_exists($controller_name, $action_name)){
                die ('Action not exist!');
            }
            if(count($array_request_Uri) <= 2)
            {
                $controller_call->{$action_name}();
            }
            else
            {
                $array_params = array();
                for($i = 2; $i < count($array_request_Uri); $i++)
                {
                    $array_params[] = $array_request_Uri[$i];
                }
                call_user_func_array(array($controller_call, $action_name), $array_params);
            }
            return $controller_call->view;
        }

        public function _load()
        {

            $this->_loadFile();
            $info_controller = $this->_loadController();
            $info_controller->_loadView($this->controller_name . '/' . $this->action_name);
        }
    }
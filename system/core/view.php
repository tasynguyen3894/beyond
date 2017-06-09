<?php
    class view
    {
        protected $_varible;

        protected $_layout;

        protected $_config;

        protected $_isLoadLayout = false;

        protected $_content = '';

        protected $_url = '';
        
        private $error_message;

        public function getErrorMessage()
        {
            return $this->error_message;
        }

        public function __construct()
        {
            $this->_config = config::getConfig();
            $this->_varible = array();
            $this->_url = new url();
            $this->_layout = $this->_config['view']['layout'];
            if(!empty($this->_layout))
            {
                $this->_isLoadLayout = true;
            }
        }

        public function setVar($name = '', $value = '')
        {
            $this->_varible[$name] = $value;
        }

        public function getVar($name = '')
        {
            return $this->_varible[$name];
        }

        public function _isLoadLayout($isLoadLayout = true)
        {
            $this->_isLoadLayout = $isLoadLayout;
        }
        
        public function loadContent()
        {
            echo $this->_content;
        }

        public function url($url)
        {
            echo $this->_url->baseUrl . $url;
        }

        public function _loadView($view = '')
        {
            $contentHtml = '';
            extract($this->_varible);
            if(file_exists(PATH_APPLICATION . '/view/' . $view . '.php'))
            {
                ob_start();
                require PATH_APPLICATION . '/view/' . $view . '.php';
                $contentHtml = ob_get_contents();
                ob_end_clean();
            }
            else
            {
                $this->error_message = "View " . $view . '.php not exists!';
                return;
            }

            if(!empty($this->_layout) && $this->_isLoadLayout == true)
            {
                $this->_content = $contentHtml;
                $this->_loadLayout();
            }
            else
            {
                echo $contentHtml;
            }
        }

        protected function _loadLayout()
        {
            $loadView = '';
            extract($this->_varible);
            if(file_exists(PATH_APPLICATION . '/' . $this->_layout . '.php'))
            {
                ob_start();
                require PATH_APPLICATION . '/' . $this->_layout . '.php';
                $loadView = ob_get_contents();
                ob_end_clean();
            }
            else
            {
                $this->error_message = "View " . $this->_layout . '.php not exists!';
                return;
            }
            echo $loadView;
        }
    }
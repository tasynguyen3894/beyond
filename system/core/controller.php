<?php

    class controller
    {
        public $view;

        protected $db;

        protected $url;

        protected $request;

        protected $session;

        protected $config;

        public function init()
        {

        }

        public function controller()
        {
            $this->view = new view();
            $this->request = new request();
            $this->config = config::getConfig();
            $this->session = new session();
            $this->url = new url();
            $this->db = new database($this->config['database']);
            $this->init();
        }
    }
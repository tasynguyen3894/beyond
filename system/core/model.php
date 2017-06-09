<?php

    class model
    {
        protected $db;

        protected $config;

        public function model()
        {
            
            $this->config = config::getConfig();
            $this->db = new database($this->config['database']);
        }
    }
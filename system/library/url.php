<?php

    class url
    {
        public $baseUrl = '';

        public function url()
        {
            if(empty($_SERVER['REDIRECT_URL']))
            {
                $this->baseUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            }
            else
            {
                $pos = strrpos($_SERVER['REDIRECT_URL'], $_GET['_request_uri']);
                if($pos !== false){
                    $subject = substr_replace($_SERVER['REDIRECT_URL'], "", $pos, strlen($_SERVER['REDIRECT_URL']));
                }

                $this->baseUrl = $subject;
            }
            
        }

        public function redirect($url = '')
        {
            header('Location: ' . $this->baseUrl . $url);
            die();
        }
    }
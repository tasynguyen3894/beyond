<?php

    class request
    {
        public function getPost($name)
        {
            if($name != '')
            {
                if(isset($_POST[$name]))
                {
                    return $_POST[$name];
                }
                return;
            }
            return;
        }

        public function get($name)
        {
            if($name != '')
            {
                if(isset($_GET[$name]))
                {
                    return $_GET[$name];
                }
                return;
            }
            return;
        }

        public function isPost()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                return true;
            }
            return false;
        }
    }
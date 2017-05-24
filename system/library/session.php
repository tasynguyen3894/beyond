<?php

    class session
    {
        public function session()
        {
            session_start();
        }

        public function set($key = '', $value = '')
        {
            $_SESSION[$key] = $value;
        }

        public function get($key = '')
        {
            if(!empty($_SESSION[$key]))
            {
                return $_SESSION[$key];
            }
            else
            {
                return '';
            }
        }

        public function delete($key = '')
        {
            session_unset($key);
        }

        public function destroy()
        {
            session_destroy();
            session_start();
        }

    }
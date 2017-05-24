<?php

    class config
    {
        public static function getConfig($info = '')
        {
            $get = array(
                'database' => array(
                    'adapter' => 'Mysql',
                    'host' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'dbname' => 'include',
                    'charset' => 'utf8',
                ),
                'view' => array(
                    'layout' => 'layout/layout'
                )
            );

            if(empty($info))
            {
                return $get;
            }
            else
            {
                return $get[$info];
            }
        }
    }
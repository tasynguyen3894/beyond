<?php

    class database 
    {
        protected $_dbInfo;

        public function database($params = array())
        {
            $this->_dbInfo = $params;
        }

        public function dbConnect()
        {
            $db = new PDO('mysql:host=' . $this->_dbInfo['host'] . ';dbname=' . $this->_dbInfo['dbname'] .';charset=' . $this->_dbInfo['charset']
                                , $this->_dbInfo['username'], $this->_dbInfo['password']);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $db;
        }

        public function query($sql = "", $getData = false)
        {
            $db = $this->dbConnect();
            $stmt = $db->prepare($sql);
            
            $stmt->execute();
            if($getData == true)
            {
                $data = $stmt->fetchAll();
            }
            $stmt->closeCursor();
            $db = $stmt = null;
            if($getData == true)
            {
                return $data;
            }
        }

    }
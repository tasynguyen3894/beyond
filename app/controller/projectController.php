<?php

    class projectController extends ControllerBase
    {
        public function init()
        {
           parent::init();
        }

        public function indexAction()
        {
            $sql = "SELECT 
                        p.*,
                        pt.name as `type_name`
                    FROM `project` p
                    LEFT JOIN `project_type` pt ON pt.id = p.type_id
                    WHERE p.del <> 1";

            $data = $this->db->query($sql, true);
            $this->view->setVar('data', $data);
            $this->view->setVar('title', 'PROJECT');
        }

    }
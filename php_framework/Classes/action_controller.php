<?php

    require_once 'database_connection.php';
    require_once 'database_actions.php';

    class controller extends connection
    {
        protected $obj_query;

        public function __construct()
		{
			//Executa construtor do connection
            parent::__construct();
            $this->obj_query = new actions($this->conn);
        }
        
        public function read_table($table, $msg_error)
        {
            $table_login = $this->obj_query->exec_query_read_table($msg_error);
            $table_login = is_array($table_login) ? json_encode($table_login) : $msg_error;
            
            return $table_login;
        }

        public function login($user, $pass, $msg_error)
        {
            $table_login = $this->obj_query->exec_query_login($user, $pass, $msg_error);
            $table_login = is_array($table_login) ? json_encode($table_login) : $msg_error;

            return $table_login;
        }
    }
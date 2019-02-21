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
        
        public function read_table()
        {
            $table_data = $this->obj_query->exec_query_read_table();
            $table_data = is_array($table_data) ? json_encode($table_data) : $msg_error;
            
            return $table_data;
        }

        public function login($user, $pass)
        {
            $table_login = $this->obj_query->exec_query_login($user, $pass);
            $table_login = is_array($table_login) ? json_encode($table_login) : "error";

            return $table_login;
        }
    }
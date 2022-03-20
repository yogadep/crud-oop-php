<?php
error_reporting(E_ALL);
    class dbclass {
        private $host = "localhost",
                $username = "root",
                $password = "",
                $database = "boye";
        
        public $connection;

        function __construct()
        {
            if(!isset($this->connection))
            {
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            }
            if(!$this->connection)
            {
                echo 'koneksi gagal';
            }
            
            return $this->connection;
        }        
    }



?>
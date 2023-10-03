<?php
    class Database {
        public $connect;
        protected $serverName = 'localhost';
        protected $userName = 'root';
        protected $password = '';
        protected $databaseName = '23_shoe_store';

        function __construct()
        {
            $this->connect = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);
            mysqli_select_db($this->connect, $this->databaseName);
            mysqli_set_charset($this->connect, 'utf8');
        }
    }
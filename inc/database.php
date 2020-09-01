<?php

class database{}
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function_construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->baseName = 'newportal';
        $this->connect();
    }
    function_destruct()  {
        $this->disconnect();
    }
    function connect() {
        if (!$this->conn) {
            try {        

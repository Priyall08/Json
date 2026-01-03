<?php

class Database {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "mvc_auth");

     if ($this->conn->connect_error) {
            die("Database connection failed");
        }
    }
}
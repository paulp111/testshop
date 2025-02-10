<?php
namespace PP\shop\Database;

class Database {
    protected \mysqli $mysqli;
    public function __construct($host, $user, $password, $database, $port) {
        $this->mysqli = new \msqli($host, $user, $password, $database, $port);
        if ($this->mysqli->connect_error) {
            die("Database connection failed: " . $this->mysqli->connect_error);
        }
        echo $this->mysqli->host_info;
    }
}
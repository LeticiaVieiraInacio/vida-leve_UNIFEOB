<?php
namespace Classes;

use PDO;

class Database {
    protected $conn, $stmt, $sql;
    
    public function __construct()
    {
        $conn = new PDO('mysql:host=localhost;dbname=vidaleve', 'root', 'root');

        $this->conn = $conn;
    }

    protected function setSql($sql)
    {
        return $this->sql = $sql;
    }

    protected function getSql()
    {
        return $this->sql;
    }
}
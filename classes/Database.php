<?php
namespace Classes;

use PDO;
use PDOException;

class Database {
    protected $conn, $stmt, $sql;
    
    public function __construct()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=vidaleve', 'root', '');
        } catch (PDOException $ex) {
            http_response_code(502);
            
            throw $ex;
        }

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
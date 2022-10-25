<?php
namespace Classes;

use PDO;

class Database {
    private $conn;
    
    public function __construct()
    {
        $conn = new PDO('mysql:host=localhost;dbname=vidaleve', 'root', 'root');

        $this->conn = $conn;
    }
}
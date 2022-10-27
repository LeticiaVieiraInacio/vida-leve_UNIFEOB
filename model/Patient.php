<?php
namespace Model;

use Classes\Database;
use PDO;

class Patient extends Database
{
    public function fetchAll()
    {
        try {
            $this->setSql("SELECT * FROM pacientes");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->execute();

            if ($this->stmt->rowCount()) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
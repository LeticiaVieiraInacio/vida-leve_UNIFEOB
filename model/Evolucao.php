<?php
namespace Model;

use Classes\Database;
use PDO;

class Evolucao extends Database
{
    public function fetch($id)
    {
        try {
            $this->setSql("SELECT * FROM evolucao WHERE id_paciente = ?");

            
            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $id);

            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            //throw $th;
        }
    }

    public function exames($id)
    {
        try {
            $this->setSql("SELECT * FROM exames WHERE id_paciente = ?");

            
            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $id);

            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            //throw $th;
        }
    }

    public function fetchAll()
    {
        try {
            $this->setSql("SELECT * FROM pacientes");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            //throw $th;
        }
    }

    public function count()
    {
        try {
            $this->setSql("SELECT COUNT(*) as 'count' FROM pacientes");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->execute();

            return $this->stmt->fetch(PDO::FETCH_ASSOC)['count'];
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            //throw $th;
        }
    }

    public function create($user)
    {
        try {
            $this->setSql("INSERT INTO pacientes (nome, email, idade) VALUES (?, ?, ?)");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->bindParam(1, $user['nome']);
            $this->stmt->bindParam(2, $user['email']);
            $this->stmt->bindParam(3, $user['idade']);
            
            if ($this->stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            //throw $th;
        }
    }
}
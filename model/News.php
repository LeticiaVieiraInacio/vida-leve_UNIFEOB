<?php
namespace Model;

use Classes\Database;
use PDO;

class News extends Database
{
    public function fetch($id)
    {
        try {
            $this->setSql("SELECT * FROM noticias WHERE id = ?");

            
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
            $this->setSql("SELECT * FROM noticias");

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

    public function create($new)
    {
        try {
            $this->setSql("INSERT INTO noticias (banner, titulo, descricao) VALUES (?, ?, ?)");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->bindParam(1, $new['banner']);
            $this->stmt->bindParam(2, $new['titulo']);
            $this->stmt->bindParam(3, $new['descricao']);
            
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
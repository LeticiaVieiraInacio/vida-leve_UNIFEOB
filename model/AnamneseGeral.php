<?php
namespace Model;

use Classes\Database;
use PDO;

class AnamneseGeral extends Database
{
    public function fetch($id)
    {
        try {
            $this->setSql("SELECT * FROM pacientes WHERE id = ?");

            
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

    public function create($paciente)
    {
        try {
            $this->setSql("INSERT INTO anamnese_geral (id_paciente, estado_civil, cor, etnia, religiao, endereco, bairro, cidade, telefone_residencial, telefone_celular, escolaridade, trabalha_atualmente, permite_ativo, renda_familiar, habitos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $this->stmt = $this->conn->prepare($this->getSql());

            $this->stmt->bindParam(1, $paciente['id_paciente']);
            $this->stmt->bindParam(2, $paciente['estado_civil']);
            $this->stmt->bindParam(3, $paciente['cor']);
            $this->stmt->bindParam(4, $paciente['etnia']);
            $this->stmt->bindParam(5, $paciente['religiao']);
            $this->stmt->bindParam(6, $paciente['endereco']);
            $this->stmt->bindParam(7, $paciente['bairro']);
            $this->stmt->bindParam(8, $paciente['cidade']);
            $this->stmt->bindParam(9, $paciente['telefone_residencial']);
            $this->stmt->bindParam(10, $paciente['telefone_celular']);
            $this->stmt->bindParam(11, $paciente['escolaridade']);
            $this->stmt->bindParam(12, $paciente['trabalha_atualmente']);
            $this->stmt->bindParam(13, $paciente['permite_ativo']);
            $this->stmt->bindParam(14, $paciente['renda_familiar']);
            $this->stmt->bindParam(15, $paciente['habitos']);
            
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
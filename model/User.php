<?php
namespace Model;

use Classes\Database;
use Model\Response;
use Model\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PDO;

class User extends Database
{
    public function fetch($id)
    {
        try {
            $this->setSql("SELECT * FROM usuarios WHERE id = ?");

            
            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $id);

            $this->stmt->execute();

            if ($this->stmt->rowCount() > 0) {
                $response = $this->stmt->fetch(PDO::FETCH_ASSOC);

                Response::success($response);
            } else {
                return [];
            }
        } catch (\PDOException $ex) {
            return Response::error();
        }
    }
    
    public function login($email, $password)
    {
        if (!$this->verifyEmail($email)) {
            header('HTTP/1.1 500 Internal Server Error');

            return Response::error(null, Exception::USER_NOT_FOUND);
        }
        
        try {
            $this->setSql("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $email);
            $this->stmt->bindParam(2, $password);
            
            $this->stmt->execute();
            
            if ($this->stmt->rowCount()) {
                $response = $this->stmt->fetch(PDO::FETCH_ASSOC);
                
                return Response::success($response);
            } else {
                header('HTTP/1.1 500 Internal Server Error');
                
                return Response::error(null, Exception::WRONG_PASSWORD);
            }
        } catch (\PDOException $exception) {
            return Response::error();
        }
    }

    public function create($email, $password, $name)
    {
        if ($this->verifyEmail($email)) {
            header('HTTP/1.1 500 Internal Server Error');

            return Response::error(null, Exception::EMAIL_ALREADY_IN_USE);
        }
        
        try {
            $this->setSql("INSERT INTO usuarios (email, senha, nome) VALUES (?, ?, ?)");

            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $email);
            $this->stmt->bindParam(2, $password);
            $this->stmt->bindParam(3, $name);

            $this->stmt->execute();

            if ($this->stmt->rowCount()) {
                $response = $this->stmt->fetch(PDO::FETCH_ASSOC);
                
                return Response::success($response);
            } else {
                header('HTTP/1.1 500 Internal Server Error');
                
                return Response::error();
            }
            
        } catch (\PDOException $exception) {
            return Response::error();
        }
    }

    public function verifyEmail($email)
    {
        try {
            $this->setSql("SELECT * FROM usuarios WHERE email = ?");

            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $email);

            $this->stmt->execute();
            
            return $this->stmt->rowCount();
        } catch (\PDOException $exception) {
            return Response::error();
        }
    }

    public function forgotPassword($email, $code)
    {
        if (!$this->verifyEmail($email)) {
            header('HTTP/1.1 500 Internal Server Error');

            return Response::error(null, Exception::USER_NOT_FOUND);
        }
        
        try {
            if ($this->sendEmail($email, $code)) {
                return Response::success();
            } else {
                return Response::error();
            }
        } catch (\PDOException $exception) {
            return Response::error();
        }
    }

    public function changePassword($email, $password)
    {
        try {
            
            $this->setSql("UPDATE usuarios SET senha = ? WHERE email = ?");
            
            $this->stmt = $this->conn->prepare($this->getSql());
            $this->stmt->bindParam(1, $password);
            $this->stmt->bindParam(2, $email);
            
            $this->stmt->execute();

            return Response::success();
        } catch (\PDOException $_) {
            return Response::error();
        }
    }

    public function sendEmail($email, $code)
    {
        try {
            $mail = new PHPMailer();
            
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = 'vidaleveconta@gmail.com';
            $mail->Password = 'wneurgyytcrjbfps';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('vidaleveconta@gmail.com', 'Vida Leve');
            $mail->addAddress($email, 'Usuário');
            $mail->addReplyTo('vidaleveconta@gmail.com', 'Contato');
            $mail->addCC('emanueldascorrea@gmail.com');
            $mail->addBCC('emanuel.correa@sou.unifeob.edu.br');

            $templateContent = file_get_contents('../views/template/resetPassword.html');

            $htmlContent = str_replace('{CODE}', $code, $templateContent);

            $mail->isHTML(true);
            $mail->Subject = "{$code} - Código para redefinição de senha";
            $mail->msgHTML($htmlContent);

            $mail->send();
            return true;
        } catch (PHPMailerException $e) {
            return false;
        }
    }
}
<?php
use Model\User;

$user = new User();

header('Content-Type: application/json; charset=utf-8');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = $user->create($email, $password, $name);

    echo json_encode($response);
}

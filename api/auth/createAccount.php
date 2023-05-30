<?php
use Model\User;

$user = new User();

header('Content-Type: application/x-www-form-urlencoded');

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    sleep(2);

    $response = $user->create($email, $password, $name);

    echo json_encode($response);
}

<?php
use Model\User;

$user = new User();

echo 'TESTE';

if (isset($_POST['email']) && isset($_POST['password'])) {  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = $user->login($email, $password);

    echo json_encode($response);
}

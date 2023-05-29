<?php
use Model\User;

$user = new User();

header('Content-Type: application/x-www-form-urlencoded');

if (isset($_POST['email']) && isset($_POST['password'])) {  
    $email = $_POST['email'];
    $password = $_POST['password'];

    sleep(2);

    $response = $user->changePassword($email, $password);

    http_response_code(200);
    echo json_encode($response);
}

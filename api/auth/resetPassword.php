<?php
use Model\User;

$user = new User();

header('Content-Type: application/x-www-form-urlencoded');

if (isset($_POST['email']) && isset($_POST['code'])) {  
    $email = $_POST['email'];
    $code = $_POST['code'];

    $response = $user->forgotPassword($email, $code);

    http_response_code(200);
    echo json_encode($response);
}

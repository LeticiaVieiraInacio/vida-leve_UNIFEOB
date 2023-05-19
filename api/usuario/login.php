<?php
use Model\User;

$user = new User();

echo json_encode($_POST);

if (isset($_POST['email']) && isset($_POST['password'])) {  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = $user->login($email, $password);

    echo json_encode($response);
}
?> 
<?php

use Model\HelpGPT;
use Model\User;

$help = new HelpGPT();

header('Content-Type: application/x-www-form-urlencoded');

if (isset($_POST['context'])) {  
    $context = json_decode($_POST['context'], true);
    // $newContext = [
    //     'data' => $context
    // ];

    $response = $help->ask($context);

    http_response_code(200);
    // echo json_encode($response);
    echo json_encode($response);
}

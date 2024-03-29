<?php
require(__DIR__ . '../../vendor/autoload.php');


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

$api = $_GET['api'];
$action = $_GET['action'];

if (isset($api) && isset($action)) {
    require_once("./$api/$action.php");
}

exit();
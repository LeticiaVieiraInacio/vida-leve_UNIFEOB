<?php
require(__DIR__ . '../../vendor/autoload.php');

$api = $_GET['api'];
$action = $_GET['action'];

if (isset($api) && isset($action)) {
    require_once("./$api/$action.php");
}
<?php
$api = $_GET['dir'];
$action = $_GET['action'];

if (isset($api) && isset($action)) {
    require_once("./$api/$action.php");
}
<?php
require_once("vendor/autoload.php");

session_start();

if (!isset($_SESSION['user']) && !($_GET['page'] === "login")) {
  header("Location: ?page=login");
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'main';
?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Title -->
    <title>Vida Leve - Unifeob</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/listar-pacientes.css">
    <link rel="stylesheet" href="assets/css/cadastrar-paciente.css">
    <link rel="stylesheet" href="assets/css/anamnese-geral.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <script src="assets/js/config.js" type="text/javascript"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body>
    <?php !str_contains('login', $page) && require_once('views/header.php'); ?>
    <?php file_exists("views/{$page}/{$action}.php") && require_once("views/{$page}/{$action}.php") ?>
    <?php !str_contains('login', $page) && require_once('views/footer.php'); ?>

    <script src="https://kit.fontawesome.com/c9dce17fd3.js" crossorigin="anonymous"></script>
</body>

</html>
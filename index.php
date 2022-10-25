<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $action = isset($_GET['action']) ? $_GET['action'] : 'main';
?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Title -->
    <title>Login</title>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php file_exists("views/{$page}/{$action}.php") && require_once("views/{$page}/{$action}.php") ?>
</body>

</html>
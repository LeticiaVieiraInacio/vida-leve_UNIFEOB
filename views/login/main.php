<?php

use Model\User;

$user = new User();

if (isset($_GET['logout'])) {
    session_destroy();
    session_abort();
    unset($_SESSION);

    header("Location: ?page=login&action=main");
}

if (isset($_SESSION['user'])) {
    header("Location: ?page=home&action=main");
}

if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $user = $user->login($email, $password);

    if ($user) {
        $_SESSION['user'] = $user;

        header("Location: ?page=home&action=main");
    }
}
?>

<main class="main-login">
    <form action="#" method="POST" autocomplete="off">
        <div class="login-card">
            <div class="logo">
                <img src="assets/images/logo-vidaleve-preto.png" alt="Logo">
                <h3>Vida Leve</h3>
            </div>
            <h2>Por favor, insira suas credênciais para entrar no sistema.</h2>
            <div class="fields">
                <div class="input">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="input">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="password" placeholder="Digite sua senha">
                </div>
            </div>
            <button type="submit" name="submit">
                <span>Entrar</span>
            </button>
            <span>Esqueci minha senha</span>
        </div>
    </form>
</main>
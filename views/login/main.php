<?php
use Model\User;

$user = new User();

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

<main class="main-login" >
    <form action="#" method="POST">
        <div class="login-card">
            <div class="logo">
            <img src="assets/images/logo.png" alt="Logo">
            </div>
            <h2>Login</h2>
            <div class="fields">
            <div class="input">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="input">
                <label for="password">Senha</label>
                <input type="text" name="senha" id="password" placeholder="Digite sua senha">
            </div>
            </div>
            <button type="submit" name="submit">
                <span>Entrar</span>
            </button>
            <span>Esqueci minha senha</span>
        </div>
    </form>
</main>
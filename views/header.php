<header class="navbar">
    <div class="container">
        <div>
            <div class="logo">
                <img src="assets/images/logo-vidaleve.png" alt="Logo">
                <p>Vida Leve</p>
            </div>
            <div class="nav-links">
                <ul>
                    <li>
                        <a href="?page=home">Página Inicial</a>
                    </li>
                    <li>
                        <a href="?page=listar-pacientes">Listar Pacientes</a>
                    </li>
                    <li>
                        <a href="?page=cadastrar-paciente">Cadastrar Paciente</a>
                    </li>
                    <li>
                        <a href="?page=noticias">Noticias</a>
                    </li>
                    <li>
                        <a href="#">Ajuda</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="user">
            <h3><?= $_SESSION['user']['nome']; ?></h3>

            <?php if (!$_SESSION['user']['foto']) : ?>
                <span><?= substr($_SESSION['user']['nome'], 0, 1); ?></span>
            <?php else : ?>
                <img style="width: 45px; height: 45px; border-radius: 50%; box-shadow: 0px 2px 0.5rem rgb(0 0 0 / 30%);" src="<?= $_SESSION['user']['foto'] ?>">
            <?php endif; ?>
            <a href="?page=login&action=main&logout=true">Sair</a>
        </div>
    </div>
</header>
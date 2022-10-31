<header class="navbar">
    <div class="container">
        <div>
            <div class="logo">
            <img src="assets/images/logo.png" alt="Logo">
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
                    <a href="#">Ajuda</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="user">
            <h3><?= $_SESSION['user']['nome']; ?></h3>
            <span><?= substr($_SESSION['user']['nome'], 0, 1); ?></span>
        </div>
    </div>
</header>
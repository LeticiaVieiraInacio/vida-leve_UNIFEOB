<?php

use Model\Paciente;
use Model\News;

$paciente = new Paciente();
$news = new News();

$pacientes = $paciente->count();
$newsData = $news->fetchAll();
?>

<main class="main-home" >
    <section class="people">
        <h3><?= $pacientes ?><br>Pessoas participando</h3>
    </section>

    <section class="news">
        <h2>Noticias</h2>

        <ul>
            <?php foreach ($newsData as $new): ?>
                <li>
                    <div class="news-image">
                        <img src="<?= $new['banner'] ?>" alt="Vida Leve">
                    </div>
                    <div class="news-body">
                        <h3><?= $new['titulo'] ?></h3>
                        <p><?= $new['descricao'] ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        
         <a href="?page=listar-pacientes">Ir a Lista de pacientes</a>
    </section>
</main>
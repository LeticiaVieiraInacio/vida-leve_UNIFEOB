<?php
use Model\Paciente;

$paciente = new Paciente();

$pacienteData = $paciente->fetch($_GET['id']);
?>

<main class="main-lista-pacientes general">
    <div class="container">
        <?php require_once(__DIR__ . '/../aside.php'); ?>

        <div class="content">
            Exames
        </div>
    </div>
</main>
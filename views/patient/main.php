<?php
use Model\Patient;

$patient = new Patient();

$patientData = $patient->fetch($_GET['id']);
?>

<main class="main-lista-patients general">
    <div class="container">
        <?php require_once(__DIR__ . '/../aside.php'); ?>

        <div class="content">
            Exames
        </div>
    </div>
</main>
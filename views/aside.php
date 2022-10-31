<?php

use Model\Patient;

if (isset($_GET['id'])) {
    $patient = new Patient();
    $patientData = $patient->fetch($_GET['id']);
?>


<aside>
    <div class="user">
        <img src="assets/images/user.png" alt="User">
        <div class="info">
            <i class="fa-solid fa-circle-info"></i>
            <span>Informações</span>
        </div>
        <p><?= $patientData['nome']; ?></p>
    </div>

    <div class="links">
        <ul>
            <li>
                <a href="?page=patient&action=exames&id=<?= $_GET['id']; ?>">Exames</a>
            </li>
            <li>
                <a href="?page=patient&action=anamneses&id=<?= $_GET['id']; ?>">Anamneses</a>
            </li>
            <li>
                <a href="?page=patient&action=evolucao&id=<?= $_GET['id']; ?>">Evolução</a>
            </li>
            <li>
                <a href="?page=patient&action=pacientes&id=<?= $_GET['id']; ?>">Pacientes</a>
            </li>
        </ul>
    </div>
</aside>

<?php } ?>
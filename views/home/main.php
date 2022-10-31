<?php

use Model\Patient;

$patient = new Patient();

$patients = $patient->count();

?>

<main class="main-home" >
    <div class="container">
        <div class="people">
            <h3><?= $patients ?><br>Pessoas participando</h3>
        </div>
    </div>
</main>
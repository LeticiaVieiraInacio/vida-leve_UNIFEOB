<?php
use Model\Paciente;
use Model\User;

$paciente = new Paciente();
$user = new User();

$exames = $paciente->exames($_GET['id']);
?>

<main class="main-lista-pacientes general">
    <div class="container">
        <?php require_once(__DIR__ . '/../aside.php'); ?>

        <div class="content">
            <form action="#" class="search-paciente">
            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="search" id="search" placeholder="Pesquisar nome do exame" autocomplete="off">
                <button type="submit">Enviar</button>
            </div>
            </form>

            <div class="paciente-list">
            <h1>Lista de exames</h1>

            <table>
                <thead>
                <tr>
                    <th>Médico</th>
                    <th>Nome do Exame</th>
                    <th>Data do exame</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($exames as $exame): $medico = $user->fetch($_GET['id']); ?>
                        <tr>
                            <td><?= $medico['nome']; ?></td>
                            <td><?= $exame['nome'] ?></td>
                            <td><?= $exame['criado_em'] ?></td>
                            <td><a href="#">Download do anexo</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?php if (!count($exames)): ?>
               <h2 style="text-align: center; margin: 1rem; font-weight: normal;">Não há exames cadastrados.</h2>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>
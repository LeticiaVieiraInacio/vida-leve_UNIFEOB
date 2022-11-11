<?php
use Model\Paciente;

$paciente = new Paciente();

$pacientes = $paciente->fetchAll();
?>

<main class="main-lista-pacientes general">
    <div class="container">
        <div class="content">
            <form action="#" class="search-paciente">
            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="search" id="search" placeholder="Pesquisar nome do paciente" autocomplete="off">
                <button type="submit">Enviar</button>
            </div>
            </form>

            <div class="paciente-list">
            <h1>Lista de pacientes</h1>

            <table>
                <thead>
                <tr>
                    <th>Nome completo</th>
                    <th>Frequência</th>
                    <th>ID</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($pacientes as $pacienteData): ?>
                        <tr>
                            <td><?= $pacienteData['nome'] ?></td>
                            <td>Presente</td>
                            <td><?= $pacienteData['id'] ?></td>
                            <td>
                                <a href="?page=paciente&action=exames&id=<?= $pacienteData['id'] ?>">Visualizar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?php if (!count($pacientes)): ?>
               <h2 style="text-align: center; margin: 1rem; font-weight: normal;">Não há pacientes cadastrados.</h2>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>
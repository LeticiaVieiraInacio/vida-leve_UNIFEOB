<?php
use Model\Paciente;
use Model\User;

$paciente = new Paciente();
$user = new User();

$pacienteData = $paciente->fetch($_GET['id']);
$exames = $paciente->exames($_GET['id']);
$evolucao = $pacienteData['evolucao'];
?>

<main class="main-lista-paciente anamnese-geral general">
    <div class="container">
        <?php require_once(__DIR__ . '/../aside.php'); ?>

        <div class="content">
            <fieldset>
                <h3 style="text-align: center; font-size: 2rem; margin-top: 2rem;">Indentificação e historico familiar</h3>

                <form id="anamnese-geral" action="#" method="POST">
                    <div class="input-forms">
                        <div class="input-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" value="<?= $pacienteData['nome'] ?>">
                        </div>
                        <div class="input-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" id="cpf" value="<?= $pacienteData['cpf'] ?>">
                        </div>
                        <div class="input-group">
                            <label for="email">CPF:</label>
                            <input type="text" name="email" id="email" value="<?= $pacienteData['email'] ?>">
                        </div>
                        <div class="input-group">
                            <label for="alergias">Digite o estado civil:</label>
                            <textarea type="text" name="alergias" id="alergias" placeholder="Digite sua resposta...">
                            </textarea>
                        </div>
                        <div class="input-group">
                            <label for="historico_familiar">Digite o estado civil:</label>
                            <textarea type="text" name="historico_familiar" id="historico_familiar" placeholder="Digite sua resposta...">
                            </textarea>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</main>
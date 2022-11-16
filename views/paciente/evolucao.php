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
                    <section>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" value="<?= $pacienteData['nome'] ?>">
                            </div>
                            <div class="input-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" name="cpf" id="cpf" value="123.456.789-10">
                            </div>
                            <div class="input-group">
                                <label for="cpf">Telefone:</label>
                                <input type="text" name="cpf" id="cpf" value="19982198289">
                            </div>
                            <div class="input-group">
                                <label for="email">E-mail:</label>
                                <input type="text" name="email" id="email" value="<?= $pacienteData['email'] ?>">
                            </div>
                            <div class="input-group">
                                <label for="alergias">Alergias:</label>
                                <textarea type="text" name="alergias" id="alergias" placeholder="Digite sua resposta..." rows="10" style="height: unset">Amedoim e Zolpidem
                                </textarea>
                            </div>
                            <div class="input-group">
                                <label for="historico_familiar">Histórico Familiar:</label>
                                <textarea type="text" name="historico_familiar" id="historico_familiar" placeholder="Digite sua resposta..." rows="10" style="height: unset">Pai e mãe com pressão alta e 5 pessoas já tiveram cancêr em sua família.
                                </textarea>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 style="text-align: center; font-size: 2rem; margin-top: 2rem;">Nutricionista: <b>Emanuel Médico</b></h3>
                        
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="historico_familiar">Comentário 16/11/2022:</label>
                                <textarea type="text" name="historico_familiar" id="historico_familiar" placeholder="Digite sua resposta..." rows="10" style="height: unset">Passei uma dieta para ela melhorar seu estilo de vida.</textarea>
                            </div>
                        </div>
                    </section>

                </form>
            </fieldset>
        </div>
    </div>
</main>
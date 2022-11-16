<?php
use Model\AnamneseGeral;

$anamneseGeral = new AnamneseGeral;

if (count($_POST)) {
  $_POST['id_paciente'] = $_GET['id'];

  if ($anamneseGeral->create($_POST)) {
    header("Location: ?page=paciente&action=anamneses&id={$_GET['id']}");
  }
}
?>


<main class="anamnese-geral general">
    <div class="container">
        <?php require_once(__DIR__ . '/../aside.php'); ?>

        <div class="content">
            <div class="actions">
                <button class="add-question">
                    <i class="fa-solid fa-plus"></i>
                    <span>Adicionar pergunta</span>
                </button>
                <button class="add-question">
                    <span>Finalizar</span>
                </button>
            </div>

            <form id="anamnese-geral" action="?<?= $_SERVER['QUERY_STRING'] ?>" method="POST" class="forms">
                <section class="information">
                    <fieldset>
                        <h3>Dados pessoais / Anamnese Geral</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="estado_civil">Já fez alguma dieta?</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cor">Se sim, há quanto tempo foi a última?</label>
                                <input type="text" name="cor" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="etnia">Que tipo de dieta fez?</label>
                                <input type="text" name="etnia" id="etnia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Porque desistiu?</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Preferência alimentar:</label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Aversão alimentar:</label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
        
                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="endereco">Alteração do apetite recente ? (aumento/diminuição):</label>
                                <input type="text" name="endereco" id="endereco" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="bairro">Quantas refeições faz por dia?</label>
                                <input type="text" name="bairro" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cidade">Faz parte da sua rotina tomar café da manhã todos os dias?</label>
                                <input type="text" name="cidade" id="cidade" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_residencial">Atualmente segue alguma dieta especial?</label>
                                <input type="text" name="telefone_residencial" id="telefone_residencial" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_celular">Quem prepara as refeições?</label>
                                <input type="text" name="telefone_celular" id="telefone_celular" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_celular">Onde realiza as refeições?</label>
                                <input type="text" name="telefone_celular" id="telefone_celular" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
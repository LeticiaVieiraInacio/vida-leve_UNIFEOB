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
                        <h3>Dados pessoais / Psicologia</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="estado_civil">Atitude dos pais e familiares em relação à obesidade e à comida:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cor">Identificação dos momentos do dia de maior ingestão, beliscos, voracidade alimentar: </label>
                                <input type="text" name="cor" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="etnia">Investigação da síndrome da fome noturna:</label>
                                <input type="text" name="etnia" id="etnia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Presença de vômitos, laxantes, diuréticos, apneia do sono, etc.:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">HISTÓRIA PSIQUIÁTRICA PESSOAL E FAMILIAR Depressão e outras patologias:</label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Grau de propensão à adição e de impulsividade (cigarros, álcool, drogas, suicídio, exagero no gasto dinheiro com compras, jogo): </label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Informações/h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="estado_civil">DESENVOLVIMENTO (Relacionamentos) Infância, adolescência, adulto:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cor">ANÁLISE DO MODO DE VIDA: sedentário, hobbies, lazer:</label>
                                <input type="text" name="cor" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="etnia">Avaliação da motivação para participar do projeto e para a mudança:</label>
                                <input type="text" name="etnia" id="etnia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Busca do significado da obesidade na vida do paciente e no seu grupo social:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Verificação do quanto o ambiente pode lhe proporcionar apoio (família, amigos, trabalho):</label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
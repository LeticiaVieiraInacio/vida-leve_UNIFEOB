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
                        <h3>Dados pessoais / Farmácia</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label style="font-size: 1.6rem" for="estado_civil">AVALIAÇÃO FARMACOTERAPÊUTICA: Relacione os problemas de saúde
relatados com os medicamentos utilizados para seu controle, indicando a
dose, posologia, início do tratamento e se a enfermidade está sob controle.<br>
Caso utilize outros medicamentos sem prescrição médica ou motivo clínico
diagnosticado relatar o uso nos mesmos parâmetros.<br>

*

POR EXEMPLO: paciente hipertenso grau 2, utiliza hidrocortiazida 25mg VO 2x/dia e losartana 50mg VO
2x/dia, desde agosto/2020. Atualmente PA sob controle. Paciente também utiliza Neosoro (cloreto de<br>
benzalcônio) Spray Nasal, sem prescrição. Relata o uso por desconforto provocado por congestão
nasal, sendo indicado seu uso na farmácia. Não soube informar dosagem diária, mas ao ser
questionado, relatou que um frasco é consumido entre 10 e 15 dias.:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                        <div class="input-forms">
                            <div class="input-group">
                                <label style="font-size: 1.6rem" for="estado_civil">AVALIAÇÃO FARMACOTERAPÊUTICA: Paciente relata utilizar ou ter utilizado
algum destes medicamentos? (Relação de medicamentos utilizados no
tratamento da obesidade)-:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
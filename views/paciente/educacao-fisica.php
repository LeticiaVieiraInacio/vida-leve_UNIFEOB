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
                        <h3>Dados pessoais / Educação Física</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="estado_civil">Circunferência da Cintura:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cor">Circunferência Abdominal:</label>
                                <input type="text" name="cor" id="email" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Qual seu nível de condicionamento?</h3>
                        <div class="input-forms checkbox">
                            <div>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Sedentário</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Ativo 2 x na semana</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Ativo 3 x na semana</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Todos os dias</label>
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Qual seu nível de atividade física?</h3>
                        <div class="input-forms checkbox">
                            <div>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Sedentário</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Iniciante (menos de 3 meses)</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Intermediário (mais de 3 meses)</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Avançado (mais de 1 ano)</label>
                            </div>
                        </div>
                    </fieldset>
                </section>
        
                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="endereco">Já praticou alguma atividade física no passado? Quais por quanto tempo?:</label>
                                <input type="text" name="endereco" id="endereco" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="bairro">Pratica alguma atividade física ? Quais e a quanto tempo?:</label>
                                <input type="text" name="bairro" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cidade">Normalmente qual a sua dificuldade para correr, levantar objetos pesados, praticar esportes ou realizar trabalhos pesados?:</label>
                                <input type="text" name="cidade" id="cidade" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_residencial">Normalmente qual a sua dificuldade para abaixar-se, ajoelhar-se ou curvar-se ?:</label>
                                <input type="text" name="telefone_residencial" id="telefone_residencial" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_celular">Nesse último mês, você teve dores no peito quando não estava fazendo atividade física ?:</label>
                                <input type="text" name="telefone_celular" id="telefone_celular" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Nesse último mês, você teve dores no peito quando não estava fazendo atividade física?</h3>
                        <div class="input-forms checkbox">
                            <div>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Não</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Sim</label>
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Você sente dor no peito quando faz atividade física?</h3>
                        <div class="input-forms checkbox">
                            <div>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Não</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Sim</label>
                            </div>
                        </div>
                    </fieldset>
                </section>
        
                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="escolaridade">Você tem algum problema musculoesquelético? Qual?:</label>
                                <input type="text" name="escolaridade" id="escolaridade" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="trabalha_atualmente">Você tem algum problema ósseo ou articular (por exemplo: costas, joelho ou quadril) que possa piorar com a prática de atividades físicas?:</label>
                                <input type="text" name="trabalha_atualmente" id="trabalha_atualmente" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="permite_ativo">Você tem conhecimento de alguma outra razão que contraindique a prática de atividade física?:</label>
                                <input type="text" name="permite_ativo" id="permite_ativo" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="renda_familiar">Você perdeu equilíbrio em virtude de tonturas ou perdeu a consciência quando estava praticando atividade física?:</label>
                                <input type="text" name="renda_familiar" id="renda_familiar" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
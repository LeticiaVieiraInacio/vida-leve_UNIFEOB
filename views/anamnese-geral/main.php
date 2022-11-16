<?php
    // if (isset($_POST)) {
    //     echo "<pre style='font-size: 3rem'>";
    //     print_r($_SESSION);
    //     $_POST['nome'] = $_SESSION['nome'];
    //     $_POST['email'] = $_SESSION['email'];
    //     print_r($_POST);
    //     echo "</pre>";
    // }
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

            <form id="anamnese-geral" action="#" method="POST" class="forms">
                <section class="information">
                    <fieldset>
                        <h3>Dados pessoais</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="estado_civil">Digite o estado civil:</label>
                                <input type="text" name="estado_civil" id="estado_civil" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cor">Digite a cor:</label>
                                <input type="text" name="cor" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="etinia">Digite a etinia:</label>
                                <input type="text" name="etinia" id="etinia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Digite a religião:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Profissão e horário de trabalho:</label>
                                <input type="text" name="profissao_horario" id="profissao_horario" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="profissao_horario">Naturalidade:</label>
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
                                <label for="endereco">Digite endereço:</label>
                                <input type="text" name="endereco" id="endereco" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="bairro">Digite o bairro:</label>
                                <input type="text" name="bairro" id="email" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="cidade">Digite a cidade:</label>
                                <input type="text" name="cidade" id="cidade" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_residencial">Digite o telefone residencial:</label>
                                <input type="text" name="telefone_residencial" id="telefone_residencial" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="telefone_celular">Digite o telefone celular:</label>
                                <input type="text" name="telefone_celular" id="telefone_celular" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
        
                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="escolaridade">Digite a escolaridade:</label>
                                <input type="text" name="escolaridade" id="escolaridade" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="trabalha_atualmente">Digite se trabalha atualmente:</label>
                                <input type="text" name="trabalha_atualmente" id="trabalha_atualmente" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="permite_ativo">O seu trabalho permite que você esteja mais ativo ou mais sedentário:</label>
                                <input type="text" name="permite_ativo" id="permite_ativo" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="renda_familiar">Digite a renda familiar:</label>
                                <input type="text" name="renda_familiar" id="renda_familiar" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="habitos">Digite os habitos:</label>
                                <input type="text" name="habitos" id="habitos" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="etinia">Frequência Cardíaca:</label>
                                <input type="text" name="etinia" id="etinia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Glicemia Capilar:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Pulso:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Temperatura:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Saturação:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Frequência Respiratória:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Possui alguma dor? Quais?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Queixa principal:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
                <section class="information">
                    <fieldset>
                        <h3>Comorbidades / Patologia de base</h3>
                        <div class="input-forms">
                            <div>
                                <input type="checkbox" id="scales" name="scales" checked>
                                <label for="scales">Scales</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Horns</label>
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
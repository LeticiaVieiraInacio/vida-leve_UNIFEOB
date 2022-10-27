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

            <section class="information">
                <fieldset>
                    <h3>Dados pessoais</h3>
                    <form action="#" method="POST">
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
                    </form>
                </fieldset>
            </section>

            <section class="information">
                <fieldset>
                    <h3>Informações</h3>
                    <form action="#" method="POST">
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
                    </form>
                </fieldset>
            </section>

            <section class="information">
                <fieldset>
                    <h3>Informações</h3>
                    <form action="#" method="POST">
                        <div class="input-group">
                            <label for="escolaridade">Digite a escolaridade:</label>
                            <input type="text" name="escolaridade" id="escolaridade" placeholder="Digite sua resposta...">
                        </div>
                        <div class="input-group">
                            <label for="trabalha_atualmente">Digite se trabalha atualmente:</label>
                            <input type="text" name="trabalha_atualmente" id="trabalha_atualmente" placeholder="Digite sua resposta...">
                        </div>
                        <div class="input-group">
                            <label for="permite_ativo">Digite se o trabalho permite ser ativo:</label>
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
                    </form>
                </fieldset>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
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
                        <h3>Dados pessoais / Enfermagem</h3>
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
                                <label for="etnia">Digite a etnia:</label>
                                <input type="text" name="etnia" id="etnia" placeholder="Digite sua resposta...">
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
                        <div class="input-forms checkbox">
                            <div>
                                <input type="checkbox" id="scales" name="scales">
                                <label for="scales">Diabetes - tipo 1</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Obesidade - grau 1</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Obesidade - grau 2</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Obesidade - grau 3</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Hipotiroidismo</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Hipertensão</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Renal</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Dislipidemia</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Neoplasia</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Cardiopatias</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Esteose Hepática</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">Depressão</label>
                            </div>

                            <div>
                                <input type="checkbox" id="horns" name="horns">
                                <label for="horns">SOP</label>
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="information">
                    <fieldset>
                        <h3>Informações</h3>
                        <div class="input-forms">
                            <div class="input-group">
                                <label for="etinia">Patologias Pregressas / Cirurgias anteriores:</label>
                                <input type="text" name="etinia" id="etinia" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Antecedentes familiares:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Condições gerais : Medicamentos de Uso Contínuo:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Portador de Marcapasso :</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Faz uso de anticoncepcional ? Qual?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Seu ciclo menstrual é regular?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Gestante?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Possui filhos? Quantos?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Alergias?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Uso de próteses?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Uso de próteses:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Funcionamento intestinal é regular?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Eliminação Fisiológica:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Locomoção:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Tendência de ganho de peso:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Exame Físico : Estado Geral:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Exame Físico : Olhos, Ouvidos, Boca e Nariz:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Exame Físico : Pescoço, Respiração, Circulação e Pele:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Estado de Higiene:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Você fuma?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                            <div class="input-group">
                                <label for="religiao">Qual sua frequência do uso de bebida alcoólica?:</label>
                                <input type="text" name="religiao" id="religiao" placeholder="Digite sua resposta...">
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/anamnese-geral.js"></script>
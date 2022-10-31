<?php

use Model\Patient;

$patient = new Patient();

if (isset($_POST['submit']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $user = [
        'nome' => $nome,
        'email' => $email,
        'idade' => $idade
    ];

    print_r($user['nome']);
    
    if ($patient->create($user)) {
        header("Location: ?page=listar-pacientes");
    }
}
?>

<main class="main-cadastrar-paciente anamnese-geral general">
    <div class="container">
        <div class="content">
            <h1>Cadastro de pacientes</h1>
            <form action="#" class="create-patient" method="POST">
                <div class="input-group">
                    <label for="nome">Nome do paciente:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome do paciente">
                </div>
                <div class="input-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" placeholder="Digite o e-mail do paciente">
                </div>
                <div class="input-group">
                    <label for="idade">Idade:</label>
                    <input type="text" name="idade" id="idade" placeholder="Digite a idade do paciente">
                </div>
                <div class="input-group">
                    <label for="genero">Gênero:</label>
                    <select name="genero" id="genero">
                        <option disabled>Escolha um gênero</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="">Prefiro não dizer</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="foto">Foto de perfil:</label>
                    <input type="file" name="foto" id="foto">
                </div>

                <button type="submit" name="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</main>
<?php

use Model\Paciente;

$paciente = new Paciente();

if (isset($_POST['submit']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $foto = $_POST['foto'];
    $cpf = $_POST['cpf'];

    $user = [
        'nome' => $nome,
        'email' => $email,
        'idade' => $idade,
        'genero' => $genero,
        'foto' => $foto,
        'cpf' => $cpf
    ];

    if ($paciente->create($user)) {
        header("Location: ?page=listar-pacientes");
    }
}
?>

<main class="main-cadastrar-paciente anamnese-geral general">
    <div class="container">
        <div class="content">
            <h1>Cadastro de pacientes</h1>
            <form action="#" class="create-paciente" method="POST">
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
                    <label for="data_nascimento">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento">
                </div>
                <div class="input-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite o CPF do paciente">
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
                <div class="input-group" >
                    <label for="foto">Foto de perfil</label>
                    <div style="display: flex; align-items: center; gap: 1rem; ">
                        <input type="file" name="foto" id="foto" style="position: relative; top: 10px">
                        
                        <p style="text-align: center; font-size: 1.5rem">ou</p>
                        
                        <input type="text" name="foto" id="foto" placeholder="URL da foto">
                    </div>
                </div>

                <button type="submit" name="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</main>
<?php

use Model\News;

$news = new News();

if (isset($_POST['submit']) && isset($_POST['titulo']) && isset($_POST['descricao'])) {
    $titulo = $_POST['titulo'];
    $banner = isset($_POST['banner']) ? $_POST['banner'] : '';
    $descricao = $_POST['descricao'];

    $new = [
        'banner' => $banner,
        'titulo' => $titulo,
        'descricao' => $descricao
    ];

    if ($news->create($new)) {
      header("Location: ?page=noticias");
    }
}
?>

<main class="main-cadastrar-news anamnese-geral general">
    <div class="container">
        <div class="content">
            <h1>Cadastro de Noticias</h1>
            <form action="#" class="create-paciente" method="POST">
                <div class="input-group">
                    <label for="banner">Banner</label>
                    <input type="text" name="banner" id="banner" placeholder="URL do banner">
                </div>
                <div class="input-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Digite o titulo da noticia">
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição:</label>
                    <textarea type="text" name="descricao" id="descricao" placeholder="Digite a descrição da noticia" rows="10" style="height: unset; font-family: 'Roboto'; padding-top: 1.5rem; font-size: 1.4rem"></textarea>
                </div>

                <button type="submit" name="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</main>
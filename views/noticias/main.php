<?php

use Model\News;

$news = new News();
$newsData = $news->fetchAll();
?>

<main class="main-lista-news general">
    <div class="container">
        <div class="content">
            <form action="#" class="search-news">
              <div class="input">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input type="search" name="search" id="search" placeholder="Pesquisar titulo da noticia" autocomplete="off">
                  <button type="submit">Enviar</button>
              </div>
              <div class="create">
                <a href="?page=noticias&action=create">Criar Noticia</a>
              </div>
            </form>

            <div class="news-list">
            <h1 style="margin: 0 auto">Lista de noticias</h1>

            <table style="width: 689.75px;">
                <thead>
                <tr>
                    <th></th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Data de criação</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($newsData as $new): ?>
                      <tr>
                          <td style="display: flex; align-items: center; justify-content: center">
                            <img src="<?= $new['banner'] ?>" alt="banner da imagem" width="100">
                          </td>
                          <td><?= $new['titulo'] ?></td>
                          <td><?= $new['descricao'] ?></td>
                          <td><?= $new['criado_em'] ?></td>
                          <td class="table-options">
                            <div>
                              <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                              <i class="fa-solid fa-trash"></i>
                            </div>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (!count($newsData)): ?>
               <h2 style="text-align: center; margin: 1rem; font-weight: normal;">Não há noticias cadastradas.</h2>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<!-- //TODO Criar COM COMENTÁRIOS -->

<?php

session_start();

include_once("../modelos/conexao.php");
include_once("../modelos/modelopost.php");

$post = BuscaPostEspecifico($conn, $_GET['id']);



?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>


    <div class="container" style="text-align:center">
        <br><br>
        <h1><?= $post['titulo_post'] ?></h1>
        <img class="reset" src="../imagens/posts/<?= $post['id_post'] ?>.png" width="250" height="250" alt="">
        <br><br>
        <p><?= $post['texto_post'] ?></p>
        <small>Data do Post: <?= $post['data_post'] ?></small>
        <br><br>
        <hr><br>
        <h1>Comentários</h1>
    </div>



</body>

</html>
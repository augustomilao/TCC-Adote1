<!-- //TODO Criar COM COMENTÁRIOS -->

<?php

session_start();

include_once("../modelos/conexao.php");
include_once("../modelos/modelopost.php");
include_once("../modelos/modelocomentario.php");

$post = BuscaPostEspecifico($conn, $_GET['id']);
$comentarios = BuscaComentariosPorPost($conn, $_GET['id']);



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
        <button onclick="ModalAvalicao()" class="btn btn-success">Novo Comentário</button>
        <div style="width: 30%; margin:auto; display: none;" id="modal"><br>
            <form action="../controladores/controleComentario.php" method="post">
                <input type="hidden" name="id_post" value="<?= $_GET['id'] ?>">
                <label for="texto_comentario">Comentário</label>
                <textarea class="form-control" type="text" name="texto_comentario" maxlength="500"></textarea>
                <br>
                <button class="btn btn-primary">Enviar Comentário</button>
            </form>
        </div>
        <div style="text-align: left;">
        <?php

            foreach($comentarios as $c){
                echo '<h4>' . $c["nome_usuario"] . '</h4>';
                echo '<p>' . $c["texto_comentario"] . '</p><br>';
            }

        ?>
        </div>
    </div>


    <script>
        function ModalAvalicao() {
            var display = document.getElementById('modal').style.display;
            if (display == 'none') {
                document.getElementById('modal').style.display = "block";
            } else {
                document.getElementById('modal').style.display = "none";
            }
        }
    </script>
</body>

</html>
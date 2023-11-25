<?php

// var_dump($_GET);

include_once("../modelos/conexao.php");
include_once("../modelos/modeloservico.php");
include_once("../modelos/modeloavaliacao.php");

$post = BuscaServicoEspecifico($conn, $_GET['cod']);
$avaliacoes = BuscaAvaliacaoPorServico($conn, $_GET['cod']);

?>
<!-- //TODO Criar avaliação -->
<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Servico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>


    <div class="container" style="text-align:center">
        <br><br>
        <h1><?= $post['nome_servico'] ?></h1>
        <img class="reset" src="../imagens/servicos/<?= $post['foto_servico'] ?>.png" width="250" height="250" alt="">
        <br><br>
        <p><?= $post['descricao_servico'] ?></p>
        <br>
        <h5>Entre em contato: <?= $post['contato_servico'] ?></h5>
        <small>Localidade: <?= $post['local_servico'] ?></small>
        <hr>
        <h1>Avaliações</h1>
        <button onclick="ModalAvalicao()" class="btn btn-success">Nova Avaliação</button>
        <div style="width: 30%; margin:auto; display: none;" id="modal"><br>
            <form action="../controladores/controleAvaliacao.php" method="post">
                <input type="hidden" name="id_servico" value="<?= $_GET['cod'] ?>">
                <label for="texto_avaliacao">Texto (Opcional)</label>
                <textarea class="form-control" type="text" name="texto_avaliacao" maxlength="500"></textarea>
                <br>
                <label for="nota">Nota</label>
                <select class="form-control" name="nota" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                </select><br>
                <button class="btn btn-primary">Enviar Avaliação</button>
            </form>
        </div>
        <div style="text-align: left;">
            <?php
            foreach ($avaliacoes as $av) {
                echo '<h4>' . $av["nome_usuario"] . '</h4>';
                echo '<h5> Nota: ' . $av["nota"] . '/5</h5>';
                echo '<p>' . $av["texto_avaliacao"] . '</p><br>';
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
<!--
Criar funções
POST
adoção
exposição
reclamação (?)

-->

<?php
session_start();
include '../modelos/conexao.php';
include '../modelos/modelopost.php';

$posts = BuscaTodosPosts($conn);

?>


<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Fórum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>

    <div class="container">
        <br>
        <h2>Fórum</h2>
        <p style="margin: 0;">Aqui nós interagimos! Mostre seu pet para nós, ou adote um novo amigo!</p>
        <br>
        <form action="" method="get">
            <label for="filtro">Filtar por:</label>
            <select onchange="Filtro()" class="form-control" name="filtro" id="">
                <option value="todos" selected>Todos</option>
                <option value="pets">Pets</option>
                <option value="perdido">Pet Perdido</option>
                <option value="dicas">Dicas</option>
                <option value="reclamacao">Reclamação</option>
                <option value="elogio">Elogio</option>
                <option value="recomendacao">Recomendação</option>
            </select>
        </form>
        <br>
        <button class="btn btn-primary" onclick="NovoPost()">Novo Post</button>
        <hr>

        <div class="container">
            <div style="text-align: center;" id="todos">
                <?php
                foreach ($posts as $post) {
                    echo '<img onClick=Post(' . $post["id_post"] . ') class="reset" src="' . '../imagens/posts/' . $post['id_post'] . '.png" width="250" height="250" alt=""><br>';
                    echo '<p class="reset" style="font-weight: bold;">' . $post['titulo_post'] . '</p>';
                    // echo '<p class="reset" >' . $post['filtro_post'] . '</p>';
                    echo '<p class="reset" >' . $post['texto_post'] . '</p>';
                    echo '<hr>';
                }
                ?>
            </div>

            <div style="text-align: center;" id="especifico">

            </div>

        </div>

    </div>

    <script>

        function loadDoc(x) {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("especifico").innerHTML = this.responseText;
            }
            xhttp.open("GET", "componentes/filtroPost.php?filtro="+x, true);
            xhttp.send();
        }

        function Post(x) {
            location.href = 'post.php?id=' + x;
        }

        function NovoPost() {
            location.href = 'novoPost.php';
        }
    </script>
</body>

</html>
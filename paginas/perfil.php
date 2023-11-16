
<?php

session_start();

include '../modelos/conexao.php';
include '../modelos/modelopost.php';

$posts = BuscaSeusPosts($conn, $_SESSION['cpf']);


?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>

    <div class="tudo container">
        <br>
        <h4>Seus Dados</h4>
        
            <div style="text-align: center;">
                <h5><?= $_SESSION['nome_usuario'] ?></h5>
                <img src="https://placehold.co/250" alt=""><br><br>
            </div>
            <div>
                <div style="text-align: center;">
                    <div>

                        <h5>E-Mail:</h5>
                        <p><?= $_SESSION['email'] ?></p>
                    </div>
                    <div>
                       <h5>CEP:</h5>
                       <p><?= $_SESSION['cep'] ?></p>
                       <br>
                       <!-- //TODO Mudar senha e cep -->
                       <button class="btn btn-danger" style="width: 250px;">Mudar Senha</button><br><br>
                       <button class="btn btn-warning" style="width: 250px;">Mudar CEP</button><br><br>
                       <p>Tem algum serviço que queira anunciar? Cadastre aqui!</p>
                       <button class="btn btn-success" onclick="novoServico()" style="width: 250px;">Cadastrar Serviço</button><br><br>
                    </div>
                </div>
            </div>
        

        <br>
        <hr style="padding: 0; margin:0">
        <br>

        <h4>Seus Posts</h4>
        <div class="container" style="text-align: center;">
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




    </div>

    <script>
        function novoServico(){
            location.href = 'novoServico.php';
        }
    </script>

</body>

</html>
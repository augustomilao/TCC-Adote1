<!--
//TODO: Criar funções
perdidos
adoção
feed
posts
cadastrar pets
perfil
empresas (?)
-->

<?php

session_start();

?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>

    <div class="tudo container">
        <br>
        <h4>Seus Dados</h4>
        <div style="display: grid; grid-template-columns: 30% 70%;">
            <div>
                <img src="https://placehold.co/250" alt="">
            </div>
            <div>
                <div style="display: grid; grid-template-columns: 50% 50%;">
                    <div>
                        <h5>Nome:</h5>
                        <p><?= $_SESSION['nome_usuario'] ?></p>
                        <br><br>
                        <h5>E-Mail:</h5>
                        <p><?= $_SESSION['email'] ?></p>
                    </div>
                    <div>
                       <h5>CEP:</h5>
                       <p><?= $_SESSION['cep'] ?></p>
                       <br>
                       <!-- //TODO Mudar senha e cep -->
                       <button class="btn btn-danger" style="width: 250px;">Mudar Senha</button><br><br>
                       <button class="btn btn-warning" style="width: 250px;">Mudar CEP</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr style="padding: 0; margin:0">
        <br>

        <h4>Seus Pets</h4>
        <p>Adicione pets para mostra-los para o mundo! Ou para achar um novo lar para eles</p>

        <div style="display:grid; grid-template-columns: auto auto auto auto;">

            <div>
                <div>
                    <img style="border: 1px solid black;" src="https://placehold.co/250" alt="" srcset="">
                    <div style="width: 252px;text-align: center;border: 1px solid black;border-top:none;"><p style="margin:0; padding:2px">Nick</p></div>
                </div>
            </div>

            <!-- //TODO Adicionar Pets -->
            <div onclick="AdicionarPet()">
                <img style="border: 1px solid black;" src="../assets/adicionarPets.png" alt="">
            </div>

        </div>




    </div>

</body>

</html>
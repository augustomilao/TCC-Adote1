<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");

Cadastro($conn, $_POST['cpf'], $_POST['nome_usuario'], $_POST['email'], $_POST['senha'], $_POST['cep']);
// var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body class="container">
    <h1>Seja bem vindo !!!</h1>
    <h5>Sendo redirecionado para login</h5>
</body>
<script>
    function redirecionar() {
        window.location.href = "../"; // Substitua com a URL desejada
    }

    // Configurar o temporizador
    setTimeout(redirecionar, 5000); // 5000 milissegundos = 5 segundos
</script>

</html>
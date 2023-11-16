<?php
session_start();
include '../modelos/conexao.php';
include '../modelos/modelousuario.php';

MudarSenha($conn, $_SESSION['cpf'], $_POST['senha']);

?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Senha alterada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="container" style="text-align: center;">

    <h2>Senha Alterada!</h2>
    <button onclick="A()" class="btn btn-success">Fazer login novamente</button>

    <script>
        function A(){
            location.href = 'logout.php';
        }
    </script>
</body>
<!--
Criar funções 
//!FILTROS
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

include_once("../modelos/conexao.php");
include_once("../modelos/modeloservico.php");

$servicos = BuscaServico($conn);

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .reset{
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php include_once("componentes/navegacao.php"); ?>
    <div class="container">
        <br>
        <h2>Serviços para nossos pets!</h2>
        <p style="margin: 0;">Aqui você verá todos os serviços que nossos usuários oferecem!</p>
        <small style="color:brown">Não temos ligação com o serviço, apenas mostramos ele.</small>
        <br>
        <form action="" method="get">
            <label for="filtro">Filtar por:</label>
            <select class="form-control" name="filtro" id="selectfiltro">
                <option value="todos" selected>Todos</option>
                <option value="banhoetosa">Banho e Tosa</option>
                <option value="adestramento">Adestramento</option>
                <option value="veterinario">Veterinario</option>
                <option value="passeiopet">Passeio Pet</option>
                <option value="hotelpet">Hotel Pet</option>
                <option value="outro">Outro</option>
            </select>
        </form><br>
        <button class="btn btn-success" onclick="loadDoc()">Aplicar filtro</button>
        <hr>
    </div>

    <div class="container">

        <div style="text-align: center;" id="todos">
            <?php
            foreach($servicos as $serv){
            echo '<img onClick=Servico('.$serv["foto_servico"].') class="reset" src="'.'../imagens/servicos/'. $serv['foto_servico'].'.png" width="250" height="250" alt=""><br>';
            echo '<p class="reset" style="font-weight: bold;">'. $serv['nome_servico'] .'</p>';
            echo '<p class="reset" >'. $serv['local_servico'] .'</p>';
            echo '<hr>';
            }
            ?>
        </div>
        <div style="text-align: center;" id="especifico">
        </div>

    </div>
    <script>
         function loadDoc() {
            var select = document.getElementById("selectfiltro");
            var x = select.value;
            const xhttp = new XMLHttpRequest();


            xhttp.onload = function() {
                document.getElementById("especifico").innerHTML = this.responseText;
                document.getElementById("todos").style.display = 'none';
            }
            xhttp.open("GET", "componentes/filtroServico.php?filtro="+x, true);
            xhttp.send();
        }


        function Servico(x){
            location.href = 'servico.php?cod=' + x;
        }
    </script>
</body>
</html>
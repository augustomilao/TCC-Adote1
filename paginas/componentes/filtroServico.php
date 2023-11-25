<?php
$filtro = $_GET['filtro'];

if($filtro == "todos"){
    $sql = "SELECT * FROM servicos";
}else{
    $sql = "SELECT * FROM servicos WHERE tipo_servico = '$filtro'";
}

include '../../modelos/conexao.php';
include '../../modelos/modelopost.php';
$servicos = $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC);


foreach($servicos as $serv){
    echo '<img onClick=Servico('.$serv["foto_servico"].') class="reset" src="'.'../imagens/servicos/'. $serv['foto_servico'].'.png" width="250" height="250" alt=""><br>';
    echo '<p class="reset" style="font-weight: bold;">'. $serv['nome_servico'] .'</p>';
    echo '<p class="reset" >'. $serv['local_servico'] .'</p>';
    echo '<hr>';
    }

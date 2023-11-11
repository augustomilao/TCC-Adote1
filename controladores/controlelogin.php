<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");

session_start();

$r = Login($conn, $_POST['cpf'], $_POST['senha']);

if(empty($r)){
    header('Location: ../?erro=CPF e/ou senha errados');
}else{
    SalvaDadosCache($r);
    header('Location: ../paginas/principal.php');
}



?>
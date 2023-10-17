<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");

session_start();

$r = Login($conn, $_POST['cpf'], $_POST['senha']);

SalvaDadosCache($r);

header('Location: ../paginas/principal.php');

?>
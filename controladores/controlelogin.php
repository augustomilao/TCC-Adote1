<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");
var_dump($_POST);

$r = Login($conn, $_POST['cpf'], $_POST['senha']);

var_dump($r);

?>
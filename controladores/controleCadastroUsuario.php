<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");

Cadastro($conn, $_POST['cpf'], $_POST['nome_usuario'], $_POST['email'], $_POST['senha'], $_POST['cep']);
var_dump($_POST);

?>
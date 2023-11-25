<?php

include_once("../modelos/conexao.php");
include_once("../modelos/modelousuario.php");

session_start();

$r = Login($conn, $_POST['cpf'], $_POST['senha']);

if (empty($r)) {
?>
    <script>
        window.location.replace(" ../?erro=CPF e/ou senha errados");
    </script>
<?php
} else {
    SalvaDadosCache($r);
?>
    <script>
        window.location.replace(" ../paginas/principal.php");
    </script>
<?php
}

?>
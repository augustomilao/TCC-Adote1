<?php

session_start();
$data = date('d/m/Y');
// echo $data . "<br>";
include_once '../modelos/conexao.php';
include_once '../modelos/modeloavaliacao.php';

// var_dump($_SESSION);
// echo "<br><br>";
// var_dump($_POST);

NovaAvaliacao($conn, $_POST['id_servico'], $_SESSION['cpf'], $_SESSION['nome_usuario'], $_POST['texto_avaliacao'],$_POST['nota'], $data);

?>
<script>
  window.location.replace(" ../paginas/servico.php?cod="+ <?=$_POST['id_servico'] ?>);
</script>
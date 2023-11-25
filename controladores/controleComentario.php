<?php

session_start();
$data = date('d/m/Y');
// echo $data . "<br>";
include_once '../modelos/conexao.php';
include_once '../modelos/modelocomentario.php';

// var_dump($_SESSION);
// echo "<br><br>";
// var_dump($_POST);

NovoComentario($conn, $_POST['id_post'], $_SESSION['cpf'], $_SESSION['nome_usuario'], $_POST['texto_comentario'], $data);

?>
<script>
  window.location.replace(" ../paginas/post.php?id="+ <?=$_POST['id_post'] ?>);
</script>
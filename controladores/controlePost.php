<?php
var_dump($_POST);

session_start();
var_dump($_SESSION);

include_once("../modelos/conexao.php");
include_once("../modelos/modelopost.php");

$data = date('d/m/Y');

$ultimo = BuscaUltimoPost($conn);
// var_dump($ultimo);
if($ultimo == NULL){
  $ultimo = 1;
}else{
  $ultimo = $ultimo['id_post'] + 1 ;
}
// var_dump($ultimo);

// Imagens
$target_dir = "../imagens/posts/";
$target_file = $target_dir . $ultimo . ".png";

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " Foi enviada.";
      CadastraPost($conn,$_POST['texto'],$_SESSION['cpf'],$ultimo,$data,$_POST['filtro'],$_POST['titulo']);
      // header('Location: ../paginas/servicos.php');

    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  header('Location: ../paginas/forum.php');
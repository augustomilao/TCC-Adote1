<?php

session_start();

$target_dir = "../imagens/usuarios/";
$target_file = $target_dir . $_SESSION['cpf'] . ".png";

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " Foi enviada.";

    } else {
      // echo "Sorry, there was an error uploading your file.";
    }
  }

  header('Location: ../paginas/perfil.php');


?>
<script>
  window.location.replace(" ../paginas/perfil.php");
</script>
<?php
$filtro = $_GET['filtro'];

include '../../modelos/conexao.php';
include '../../modelos/modelopost.php';

$sql = "SELECT * FROM posts WHERE filtro_post = '$filtro'";
$posts = $conn -> query($sql);


foreach ($posts as $post) {
    echo '<img onClick=Post(' . $post["id_post"] . ') class="reset" src="' . '../imagens/posts/' . $post['id_post'] . '.png" width="250" height="250" alt=""><br>';
    echo '<p class="reset" style="font-weight: bold;">' . $post['titulo_post'] . '</p>';
    // echo '<p class="reset" >' . $post['filtro_post'] . '</p>';
    echo '<p class="reset" >' . $post['texto_post'] . '</p>';
    echo '<hr>';
}

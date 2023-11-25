<?php

function NovoComentario($conn, $id_post, $id_usuario, $nome_usuario, $texto_comentario, $data_comentario){
    $sql = "INSERT INTO comentarios (id_post, id_usuario, nome_usuario, texto_comentario, data_comentario) VALUES ('$id_post', '$id_usuario', '$nome_usuario', '$texto_comentario', '$data_comentario')";
    $conn -> query($sql);

}

function BuscaComentariosPorPost($conn, $id_post){
    $sql = "SELECT * FROM comentarios WHERE id_post = '$id_post' ORDER BY data_comentario DESC";
    $resultado = $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC); 
    return $resultado;
}
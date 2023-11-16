<?php

function BuscaSeusPosts($conn, $cpf){
    $sql = "SELECT * FROM posts WHERE id_dono_post = '$cpf'";
    $resultado = $conn -> query($sql) -> fetch_assoc();

    return $resultado;
}

function BuscaUltimoPost($conn){
    $sql = "SELECT id_post FROM posts ORDER BY id_post DESC LIMIT 1";
    $resultado = $conn -> query($sql) -> fetch_assoc();
    return $resultado;
}

function CadastraPost($conn,$texto_post,$id_dono_post,$foto_post,$data_post,$filtro_post,$titulo){
    $sql = "INSERT into posts (texto_post,id_dono_post,foto_post,data_post,filtro_post,titulo_post) VALUES ('$texto_post','$id_dono_post','$foto_post','$data_post','$filtro_post','$titulo')";
    $conn -> query($sql);
}

function BuscaTodosPosts($conn){
    $sql = "SELECT * FROM posts";
    $resultado = $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC);

    return $resultado;
}

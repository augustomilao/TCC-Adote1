<?php

function BuscaSeusPosts($conn, $cpf){
    $sql = "SELECT * FROM posts WHERE id_dono_post = '$cpf'";
    $resultado = $conn -> query($sql) -> fetch_assoc();

    return $resultado;
}
<?php

function NovaAvaliacao($conn,$id_servico,$id_usuario,$nome_usuario,$texto_avaliacao,$nota,$data_avaliacao){
    $sql = "INSERT INTO avaliacao (id_servico, id_usuario, nome_usuario, texto_avaliacao, nota, data_avaliacao) VALUES ('$id_servico','$id_usuario','$nome_usuario','$texto_avaliacao','$nota','$data_avaliacao')";
    $resultado = $conn -> query($sql);
}

function BuscaAvaliacaoPorServico($conn, $id_servico){
    $sql = "SELECT * FROM avaliacao WHERE id_servico = '$id_servico' ORDER BY data_comentario DESC";
    $resultado = $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC);
    return $resultado;
}
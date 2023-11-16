<?php

function BuscaUltimoServico($conn){
    $sql = "SELECT  id_servico FROM servicos ORDER BY id_servico DESC LIMIT 1";
    $resultado = $conn -> query($sql) -> fetch_assoc();
    return $resultado;
}

function CadastraServico($conn,$cpf_dono,$nome_servico,$local_servico,$tipo_servico,$contato_servico,$descricao_servico,$foto_servico){
    $sql = "INSERT INTO servicos (cpf_dono, nome_servico,local_servico,tipo_servico,contato_servico,descricao_servico,foto_servico) VALUES ('$cpf_dono','$nome_servico','$local_servico','$tipo_servico','$contato_servico','$descricao_servico','$foto_servico')";
    $conn -> query($sql);

}

function BuscaServico($conn){
    $sql = "SELECT * FROM servicos";
    $resultado = $conn -> query($sql) -> fetch_all(MYSQLI_ASSOC);
    return $resultado;
}

function BuscaServicoEspecifico($conn, $servico){
    $sql = "SELECT * FROM servicos WHERE id_servico = '$servico'";
    $resultado = $conn -> query($sql) -> fetch_assoc();
    return $resultado;
}



?>
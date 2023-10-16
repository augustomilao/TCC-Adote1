<?php

function Cadastro($conn, $cpf, $nome_usuario, $email, $senha, $cep){
    $recuperarSenha = sha1($cpf . $senha);

    $sql = "INSERT INTO usuarios (cpf, nome_usuario, email, senha, cep, recuperarSenha) VALUES ('$cpf', '$nome_usuario', '$email', '$senha', '$cep', '$recuperarSenha')";
    $resultado = $conn -> query($sql);

    return $resultado;
}

function Login($conn, $cpf, $senha){
    $senha = sha1($senha);
    
    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
    $resultado = $conn -> query($sql) -> fetch_assoc();

    return $resultado;
}
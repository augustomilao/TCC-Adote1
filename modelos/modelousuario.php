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

    if(!$resultado){
        header('Location: ../index.php?erro=login');
    }

    return $resultado;
}

function SalvaDadosCache($resultado){

    $_SESSION['nome_usuario'] = $resultado['nome_usuario'];
    $_SESSION['email'] = $resultado['email'];
    $_SESSION['cep'] = $resultado['cep'];
    $_SESSION['cpf'] = $resultado['cpf'];

}
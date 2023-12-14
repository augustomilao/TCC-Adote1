<?php

session_start();


?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #e3e3e3;
        }

        .divs {
            width: 50%;
            margin: 10vh 25vw;
        }

        .block {
            display: block;
        }

        .none {
            display: none;
        }

        .pointer {
            font-weight: bold;
            cursor: pointer;
        }

        .pointer:hover {
            color: blue;
        }
    </style>
</head>

<body style="background-image: url('assets/fundo.webp');background-size: cover;background-position: center;background-repeat: no-repeat;height: 100vh;">

    <div id="logindiv" class="divs block">
        <h2>Login</h2>
        <form action="controladores/controleLogin.php" method="post">
            <label for="cpf">CPF</label>
            <input oninput="validateCPF(this.value)" class="form-control" type="text" name="cpf">
            <br>
            <label for="senha">Senha</label>
            <input class="form-control" type="password" name="senha">
            <br>
            <?php
            if (@!empty($_GET['erro'])) {
                echo "<p style='color:brown;font-weight:bold'>Erro de: " . $_GET['erro'] . "</p>";
            };
            ?>
            <button id="confirma" disabled class="btn btn-danger" type="submit">Login</button>
        </form>

        <div>
            <br>
            <p class="pointer" onclick="Cadastro()">Não tem cadastro? Se cadastre aqui!</p>
        </div>
    </div>

    <div id="cadastrodiv" class="divs none">

        <h2>Cadastro</h2>
        <form action="controladores/controleCadastroUsuario.php" method="post">

            <label for="cpf">CPF</label>
            <input oninput="validateCPF2(this.value)" class="form-control" type="text" name="cpf">

            <label for="nome_usuario">Nome</label>
            <input class="form-control" type="text" name="nome_usuario">

            <label for="email">E-mail</label>
            <input class="form-control" type="text" name="email">

            <label for="cep">CEP</label>
            <input class="form-control" type="text" name="cep">

            <label for="senha">Senha</label>
            <input class="form-control" type="text" name="senha">

            <!-- <label for="confirmasenha">Confirmar Senha</label>
            <input class="form-control" type="text" name="confirmasenha"> -->
            <br>
            <button id="confirma2" disabled class="btn btn-primary" type="submit">Cadastrar</button>

            <div>
                <br>
                <p class="pointer" onclick="Login()">Já tem cadastro? Faça login aqui!</p>
            </div>
        </form>
    </div>

    <script>
        function Login() {
            document.getElementById('logindiv').style.display = 'block';
            document.getElementById('cadastrodiv').style.display = 'none';
        }

        function Cadastro() {
            document.getElementById('logindiv').style.display = 'none';
            document.getElementById('cadastrodiv').style.display = 'block';
        }

        const cpfsInvalidos = ["11111111111", "22222222222", "33333333333", "44444444444" ,"55555555555", "66666666666", "77777777777", "88888888888", "99999999999"]; // Adicione outros CPFs inválidos conforme necessário

        function validateCPF(cpf) {
            // Remover caracteres não numéricos
            cpf = cpf.replace(/\D/g, '');

            // Verificar se o CPF possui 11 dígitos
            if (cpf.length !== 11) {
                console.log('CPF inválido. Deve conter 11 dígitos.');
                document.getElementById('confirma').disabled = true;
                return;
            }

            // Verificar se o CPF está na lista de CPFs inválidos
            if (cpfsInvalidos.includes(cpf)) {
                document.getElementById('confirma').disabled = true;
                return;
            }

            // Calcular os dígitos verificadores
            const digitos = cpf.split('').map(Number);
            const soma1 = digitos.slice(0, 9).reduce((acc, value, index) => acc + value * (10 - index), 0) % 11;
            const primeiroDigitoVerificador = (soma1 < 2) ? 0 : 11 - soma1;

            const soma2 = digitos.slice(0, 10).reduce((acc, value, index) => acc + value * (11 - index), 0) % 11;
            const segundoDigitoVerificador = (soma2 < 2) ? 0 : 11 - soma2;

            // Verificar se os dígitos verificadores estão corretos
            if (primeiroDigitoVerificador !== digitos[9] || segundoDigitoVerificador !== digitos[10]) {
                document.getElementById('confirma').disabled = true;
            } else {
                document.getElementById('confirma').disabled = false;
            }
        }

        function validateCPF2(cpf) {
            // Remover caracteres não numéricos
            cpf = cpf.replace(/\D/g, '');

            // Verificar se o CPF possui 11 dígitos
            if (cpf.length !== 11) {
                console.log('CPF inválido. Deve conter 11 dígitos.');
                document.getElementById('confirma2').disabled = true;
                return;
            }

            // Verificar se o CPF está na lista de CPFs inválidos
            if (cpfsInvalidos.includes(cpf)) {
                document.getElementById('confirma2').disabled = true;
                return;
            }

            // Calcular os dígitos verificadores
            const digitos = cpf.split('').map(Number);
            const soma1 = digitos.slice(0, 9).reduce((acc, value, index) => acc + value * (10 - index), 0) % 11;
            const primeiroDigitoVerificador = (soma1 < 2) ? 0 : 11 - soma1;

            const soma2 = digitos.slice(0, 10).reduce((acc, value, index) => acc + value * (11 - index), 0) % 11;
            const segundoDigitoVerificador = (soma2 < 2) ? 0 : 11 - soma2;

            // Verificar se os dígitos verificadores estão corretos
            if (primeiroDigitoVerificador !== digitos[9] || segundoDigitoVerificador !== digitos[10]) {
                document.getElementById('confirma2').disabled = true;
            } else {
                document.getElementById('confirma2').disabled = false;
            }
        }
    </script>

</body>

</html>
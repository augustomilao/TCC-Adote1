<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Novo Serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>


    <div class="container">
    <br>
        <h4>Novo Serviço</h4>

        <form action="../controladores/controleServico.php" enctype="multipart/form-data">
            <label for="nome">Nome</label>
            <input class="form-control" name="nome" type="text" required>
            <br>
            <label for="ocal">Local</label>
            <input class="form-control" name="local" type="text" required>
            <br>
            <label for="tipo">Tipo</label>
            <input class="form-control" name="tipo" type="text" required>
            <br>
            <label for="contato">Contato</label>
            <input class="form-control" name="contato" type="text" required>
            <br>
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" type="text" maxlength="500" required></textarea>
            <small>Máximo 500 caracteres</small>
            <br><br>
            <input class="form-control" type="file" name="foto" id="foto" required>
            <br><br>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </form>

    </div>



</body>

</html>
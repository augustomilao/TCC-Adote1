
<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adote +1 | Novo Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once("componentes/navegacao.php"); ?>


    <div class="container">
        <form action="../controladores/controlePost.php" enctype="multipart/form-data" method="post">
            <label for="titulo">Titulo</label>
            <input class="form-control" type="text" name="titulo" required>
            <br>
            <label for="texto">Texto</label>
            <textarea class="form-control" name="texto" id="" cols="30" rows="4" maxlength="500" required></textarea>
            <small>Máximo 500 caracteres</small>
            <br><br>
            <label for="fileToUpload">Imagem</label>
            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" required>
            <small>A imagem ficara em escala 1x1, imagens quadradas serão melhor vistas</small>
            <br>
            <label for="filtro">Escolha um grupo pro seu post</label>
            <select class="form-control" name="filtro" id="" required>
                <option value="" selected>Selecione um</option>
                <option value="pets">Pets</option>
                <option value="perdido">Pet Perdido</option>
                <option value="dicas">Dicas</option>
                <option value="reclamacao">Reclamação</option>
                <option value="elogio">Elogio</option>
                <option value="recomendacao">Recomendação</option>
            </select>
            <small>Deixe sempre um número de contato caso espere respostas (exemplo: Pet perdido)</small>
            <br><br>
            <button class="btn btn-success" type="submit">Criar Post</button>
        </form>
    </div>



</body>

</html>
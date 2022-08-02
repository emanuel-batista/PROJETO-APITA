<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Criar Notícia</title>
    <style>
        .container{
            width: 100vw;
            height: 100vh;
            flex: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: column-reverse;
            color: white;
            align-items: center;
        }

        body{
            background-color: #000A66;
        }
    </style>
</head>
<body>
    <div class='container'>
        <form action="criarnoticia.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>    
            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
            </div>
            <div class="form-group">
                <label for="fileToUpload">Select image to upload:</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-success" name="enviar">Próximo</button>    
            <a href="noticia.php" class="btn btn-secondary">Voltar</a>
                
        </form>
    </div>
</body>
</html>
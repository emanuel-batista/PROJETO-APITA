<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/ekkoemlaabx56uscxsc09zwuin443qhsqhsyieo5f9lbtm8l/tinymce/6/tinymce.min.js'
    src='ekkoemlaabx56uscxsc09zwuin443qhsqhsyieo5f9lbtm8l'
    referrerpolicy="origin">
    </script>
    <script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        width: 600,
        height: 300,
        plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css'
    });
    </script>
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

        .form-group{
            margin: 10px;
        }

        body{
            background-color: whitesmoke;
        }

        .tox{
            width: 95vw !important;
            height: 50vh !important;
        }

        textarea{
            width: 95vw !important;
            height: 50vh !important;
        }

        label{
            font-family: 'Roboto', sans-serif ;
            font-weight: lighter;
            color: black;
        }
    </style>
    <?php include_once '../verificaRanking.php'; ?>
</head>
<body>
    <div class='container'>
        <form action="criarnoticia.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
            </div>    
            <div class="form-group">
                <input type="text" class="form-control" id="chamada" name="chamada" placeholder="Chamada">
            </div>    
            <!-- <div class="form-group"> -->
                <textarea class="form-control" id="myTextarea" name="conteudo">Oiii</textarea>
            <!-- </div> -->
            <div class="form-group">
                <select class="form-control" aria-label="categoria" name='categoria'>
                    <option selected>Escolha uma categoria:</option>
                    <option value="Vôlei">Vôlei</option>
                    <option value="Futebol">Futebol</option>
                    <option value="Basquete">Basquete</option>
                    <option value="Copa">Copa</option>
                    <option value="Olimpíadas">Olimpíadas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fileToUpload">Thumbnail</label><br>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div><br>
            <button type="submit" class="btn btn-success" name="enviar">Próximo</button>    
            <a href="noticia.php" class="btn btn-secondary">Voltar</a>
                
        </form>
    </div>
</body>
</html>
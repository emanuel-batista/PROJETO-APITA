<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include '../../includes/config.php';
    ?>
    <style>
        body{
            background-color: #000A66;
        }
        .pai{
            width: 100vh;
            /* padding: 0px; */
            height: 100vh;
            margin: auto;
            display: flex;


        }

        .containerr{
            width: 70vh;
            /* height: 70vh; */
            flex: auto;
            display: flex;
            flex-direction: column;
            justify-items: column-reverse;
            /* align-items: center; */
            position: abosolute;
            justify-content: space-around;
            /* background: #000A66; */
            margin: 40px;
            border-radius: 30px;
        }

        form{
            margin: 42px;
            color: white;
            box-shadow: 0px 0px 10px #000A66;
        }

        .form-group{
            padding-bottom: 10px;
        }

        #id{
            color: gray;
        }
    </style>

    <!-- pegar variável da url -->
    <?php
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    //pegar conteudo da notícia com base no id
    $sql = "SELECT id_noticia, titulo_noticia, conteudo_noticia, categoria_noticia FROM noticia WHERE id_noticia = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id_noticia'];
    $titulo = $row['titulo_noticia'];
    $conteudo = $row['conteudo_noticia'];
    $categoria = $row['categoria_noticia'];

    //titulo da página
    echo "<title>Editar Notícia $nome</title>";
    ?>


</head>
<body>
    <div class='pai'>
        <div class='containerr'>
            <form action="updatenoticia.php" method="post">
                <div class="form-group">
                    <label for="titulo">ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Título" value='<?php echo $id; ?>' readonly>
                </div>    
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value='<?php echo $titulo; ?>'>
                </div>    
                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea class="form-control" id="conteudo" name="conteudo" rows="3"><?php echo $conteudo; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" value='<?php echo $categoria; ?>'>
                </div>
                <button type="submit" value="update" class="btn btn-success">Enviar</button>    
                <button type="submit" value="delete" name="delete" class="btn btn-danger">Apagar</button>
                <a href="noticia.php" class="btn btn-secondary">Voltar</a>
                    
            </form>
        </div>
    </div>
</body>
</html>
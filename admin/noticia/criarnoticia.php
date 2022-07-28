<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Imagem</title>
</head>
<body>
    <?php
    //incluir config
    include '../../includes/config.php';

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $categoria = $_POST['categoria'];
    $img = 'imagem.png';
    $publicado = true;
    $idusuario = '1';
        
    //não deixar inserir variavel nula
    if(empty($titulo) || empty($conteudo) || empty($categoria)){
        echo '<script>alert("Preencha todos os campos!");</script>';
        echo '<script>window.location.href = "../noticia/noticia.php";</script>';
    }else{
        //inserir no banco de dados
        $sql = "INSERT INTO noticia (titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia, publicado_noticia, id_usuario) VALUES ('$titulo', '$conteudo', '$categoria', '$img', '$publicado', '$idusuario')";
        $result = mysqli_query($conn, $sql);
        ?>

        //form de inserção de imagem
        <form action="imgnoticia.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">ID</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" readonly>
            </div>    
            <div class="form-group">
                <label for="img">Imagem</label>
                <input type="file" class="form-control-file" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <a href="imgnoticia.php" class="btn btn-secondary">Voltar</a>

        <?php
         if($result){
            echo '<script>alert("Notícia inserida com sucesso!");</script>';
            echo 'E veio aí!';
        }else{
            echo '<script>alert("Erro ao inserir notícia!");</script>';
            echo '<script>window.location.href = "../noticia/noticia.php";</script>';
        }
        //header ir para página de inserção de imagem
        //header('Location: ../noticia/imgnoticia.php');
    }

    /* //função inserts
    function insert($titulo, $conteudo, $categoria, $img, $publicado, $idusuario) {
        global $conn;
        echo $titulo . $conteudo . $categoria;
        $sql = "INSERT INTO noticia(titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia, publicado_noticia, id_usuario) 
        VALUES ('$titulo', '$conteudo', '$categoria', '$img', '$publicado', '$idusuario')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Notícia inserida com sucesso!";
        }else{
            echo "Erro ao inserir notícia!";
        }
    }

    insert($titulo, $conteudo, $categoria, $img, $publicado, $idusuario); */
    ?>


</body>
</html>




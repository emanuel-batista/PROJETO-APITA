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
    //Deus ajuda
        $target_dir = "../../static/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    //ajudou

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $categoria = $_POST['categoria'];
    $img = $_POST['fileToUpload'];
    $publicado = true;
    $idusuario = '1';

    echo $img;
        
    //não deixar inserir variavel nula
    if(empty($titulo) || empty($conteudo) || empty($categoria)){
        echo '<script>alert("Preencha todos os campos!");</script>';
        echo '<script>window.location.href = "../noticia/noticia.php";</script>';
    }elseif (isset($_POST['enviar'])) {
        # code...
    
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
        //inserir no banco de dados
        $sql = "INSERT INTO noticia (titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia, publicado_noticia, id_usuario) VALUES ('$titulo', '$conteudo', '$categoria', '$img', '$publicado', '$idusuario')";
        $result = mysqli_query($conn, $sql);
        ?>

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




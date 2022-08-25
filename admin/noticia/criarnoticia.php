<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Notícia inserida</title>
    <?php include_once '../verificaRanking.php'; ?>
</head>
<body>
    <?php
    //incluir config
    include '../../includes/config.php';
    //Deus ajuda
        $target_dir = "../../static/images/imagens-noticia/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        /* var_dump($_FILES["fileToUpload"]); */
        $imagembb = $_FILES["fileToUpload"]["name"];
        $uploadOk = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        /* move_uploaded_file($_FILES["fileToUpload"]["name"], $target_file); */


    //ajudou

    $titulo = addslashes(htmlentities($_POST['titulo'], ENT_QUOTES,'UTF-8'));
    $conteudo = $_POST['conteudo'];
    //colocar mysql_escape_string para apóstrofes e aspas simples
    function mysql_escape_mimic($inp) {
        if(is_array($inp))
            return array_map(__METHOD__, $inp);
    
        if(!empty($inp) && is_string($inp)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
        }
    
        return $inp;
    }

    $conteudo_esc = mysql_escape_mimic($conteudo);

    $categoria = $_POST['categoria'];
    $chamada = addslashes($_POST['chamada']);
    // $img = $_POST['fileToUpload'];
    $publicado = true;
    $idusuario = $_SESSION['id'];
    //pegar data e hora atual
    $data = date('Y-m-d');
   
        
    //não deixar inserir variavel nula
    if(empty($titulo) || empty($conteudo) || empty($categoria)){
        echo '<script>alert("Preencha todos os campos!");</script>';
        echo '<script>window.location.href = "../noticia/noticia.php";</script>';
    }elseif (isset($_POST['enviar'])) {        
        // Check if image file is a actual image or fake image
        if(isset($_POST["enviar"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "<script>header('Location: ../noticia/noticia.php');</script>";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script>header('Location: ../noticia/noticia.php');</script>";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
        }
        //inserir no banco de dados
        //criar váriavel com o nome do autor puxando da sessão
        $autor = $_SESSION['nome'];
        $sql = "INSERT INTO noticia (titulo_noticia, conteudo_noticia, categoria_noticia, img_noticia, chamada_noticia, publicado_noticia, id_usuario, created_at, nome_usuario) VALUES ('$titulo', '$conteudo_esc', '$categoria', '$imagembb', '$chamada', '$publicado', '$idusuario', now(), '$autor');";
        
        $result = mysqli_query($conn, $sql);
        ?>

        <?php
         if($result){
            //criar váriavel global para mostrar mensagem de sucesso
            $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Notícia inserida com sucesso!</div>";
            echo "<script>window.location.href = 'noticia.php';</script>";
        }else{
            echo '<script>alert("Erro ao inserir notícia!");</script>';
            //criar váriavel global para mostrar mensagem de erro
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao inserir notícia!</div>";
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




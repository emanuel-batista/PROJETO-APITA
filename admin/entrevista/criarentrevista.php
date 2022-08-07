<?php
//incluir config
require_once '../../includes/config.php';
include_once '../verificaRanking.php';
$titulo = addslashes($_POST['titulo']);
$conteudo = addslashes($_POST['conteudo']);
$link = addslashes($_POST['link']);
//pegar imagem
    $target_dir = "../../static/images/imagens-noticia/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 0;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 //pegou

$idusuario = '1';
    


//função inserts
if(empty($titulo) || empty($conteudo) || empty($link)){
    echo '<script>alert("Preencha todos os campos!");</script>';
    echo '<script>window.location.href = "../noticia/noticia.php";</script>';
}elseif (isset($_POST['enviar'])) {        
    // Check if image file is a actual image or fake image
    if(isset($_POST["enviar"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "<script>header('Location: ../entrevista/entrevista.php');</script>";
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
        echo "<script>header('Location: ../entrevista/entrevista.php');</script>";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    }

    //inserir no banco de dados
    $sql = "INSERT INTO entrevista (titulo_entrevista, conteudo_entrevista, link_entrevista, img_entrevista, id_usuario) VALUES ('$titulo', '$conteudo', '$link', '$target_file', '$idusuario');";
        
    $result = mysqli_query($conn, $sql);
    ?>

    <?php
     if($result){
        echo '<script>alert("Notícia inserida com sucesso!");</script>';
        echo "<script>header('Location: entrevista.php');</script>";
    }else{
        echo '<script>alert("Erro ao inserir notícia!");</script>';
        echo '<script>window.location.href = "../entrevista/entrevista.php";</script>';
    }
}


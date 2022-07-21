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
    if($result){
        echo '<script>alert("Notícia inserida com sucesso!");</script>';
        echo '<script>window.location.href = "../noticia/noticia.php";</script>';
    }else{
        echo '<script>alert("Erro ao inserir notícia!");</script>';
        echo '<script>window.location.href = "../noticia/noticia.php";</script>';
    }
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



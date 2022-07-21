<?php
//incluir config
require_once '../includes/config.php';

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$img = 'imagem.png';
$idusuario = '1';
    


//função inserts
function insert($titulo, $conteudo,  $img, $idusuario) {
    global $conn;
    $sql = "INSERT INTO entrevista(titulo_entrevista, link_entrevista, img_entrevista, id_usuario) 
    VALUES ('$titulo', '$conteudo', '$img', '$idusuario')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Notícia inserida com sucesso!";
    }else{
        echo "Erro ao inserir notícia!";
    }
}

insert($titulo, $conteudo, $img, $idusuario);



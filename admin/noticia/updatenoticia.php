<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../includes/config.php'; ?>
    <title>Update na Notícia</title>
    <?php include_once '../verificaRanking.php'; ?>
</head>
<body>
    <?php
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $texto = $_POST['conteudo'];
        $categoria = $_POST['categoria'];
        if(isset($_POST['delete'])){
            //apagar notícia
            $sql = "DELETE FROM noticia WHERE id_noticia = $id";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<script>alert("Notícia apagada com sucesso!");</script>';
                echo '<script>window.location.href = "../noticia/noticia.php";</script>';
            }else{
                echo '<script>alert("Erro ao apagar notícia");</script>';
                echo '<script>window.location.href = "../noticia/noticia.php";</script>';
            }
        }
        else{
        $sql = "UPDATE noticia SET titulo_noticia = '$titulo', conteudo_noticia = '$texto', categoria_noticia = '$categoria' WHERE id_noticia = $id";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "'<script>alert('Notícia atualizada com sucesso!');</script>'";
            echo '<script>window.location.href = "../noticia/noticia.php";</script>';
        }else{
            echo "<h1>Erro ao atualizar notícia!</h1>";
            echo "<a href='noticia.php' class='btn btn-primary'>Voltar</a>";
    }
}
    ?>
</body>
</html>
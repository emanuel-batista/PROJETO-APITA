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
        $chamada = $_POST['chamada'];
        $texto = $_POST['conteudo'];
    //colocar mysql_escape_string para apóstrofes e aspas simples
        function mysql_escape_mimic($inp) {
            if(is_array($inp))
                return array_map(__METHOD__, $inp);
        
            if(!empty($inp) && is_string($inp)) {
                return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
            }
        
            return $inp;
        }

        $conteudo_esc = mysql_escape_mimic($texto);
        $categoria = $_POST['categoria'];
        if(isset($_POST['delete'])){
            //apagar notícia
            $sql = "DELETE FROM noticia WHERE id_noticia = $id";
            $result = mysqli_query($conn, $sql);
            if($result){
                //criar variavel de sessão para mostrar mensagem de sucesso
                $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Notícia apagada com sucesso!</div>";
                header("Location: noticia.php");
            }else{
                //criar variavel de sessão para mostrar mensagem de erro
                $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao apagar notícia!</div>";
                header("Location: noticia.php");
            }
        }
        else{
        $sql = "UPDATE noticia SET titulo_noticia = '$titulo', conteudo_noticia = '$conteudo_esc', categoria_noticia = '$categoria', chamada_noticia = '$chamada' WHERE id_noticia = $id";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result){
            //criar váriavel global para mostrar mensagem de sucesso
            $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Notícia atualizada com sucesso!</div>";
            echo "<script>window.location.href = 'noticia.php';</script>";

        }else{
            //criar váriavel global para mostrar mensagem de erro
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao atualizar notícia!</div>";
            echo "<script>window.location.href = 'noticia.php';</script>";
    }
}
    ?>
</body>
</html>
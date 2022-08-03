<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../includes/config.php'; ?>
    <title>Update na Entrevista</title>
</head>
<body>
    <?php
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $texto = $_POST['conteudo'];
        $link = $_POST['link'];
        if(isset($_POST['delete'])){
            //apagar notícia
            $sql = "DELETE FROM entrevista WHERE id_entrevista = $id";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<script>alert("Entrevista apagada com sucesso!");</script>';
                echo '<script>window.location.href = "../entrevista/entrevista.php";</script>';
            }else{
                echo '<script>alert("Erro ao apagar entrevista");</script>';
                echo '<script>window.location.href = "../entrevista/entrevista.php";</script>';
            }
        }
        else{
        $sql = "UPDATE entrevista SET titulo_entrevista = '$titulo', conteudo_entrevista = '$texto', link_entrevista = '$link' WHERE id_entrevista = $id";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "'<script>alert('Entrevista atualizada com sucesso!');</script>'";
            echo '<script>window.location.href = "../entrevista/entrevista.php";</script>';
        }else{
            echo "<h1>Erro ao atualizar entrevista!</h1>";
            echo "<a href='entrevista.php' class='btn btn-primary'>Voltar</a>";
    }
}
    ?>
</body>
</html>
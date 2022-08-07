<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php include_once '../verificaRanking.php'; ?>
    <?php 
        require_once '../../includes/config.php';

        //selecionar o usuario pelo id
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
        echo "<title>Editar Usuário $nome</title>"; 
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        echo"<h1>Você deseja apagar o usuário <b>$id</b>?</h1>";
        echo"<h2 style='color: darkgreen;' class='text-capitalize'>$nome</h2>";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="apagarusuario.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                    <input type="submit" value="Apagar" class="btn btn-danger">
                </form>
            </div>
            <div class="col-md-6">
                <a href="usuario.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




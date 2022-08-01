<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../includes/config.php'; ?>
    <?php 
        $nome = $_GET['nome'];
        $id = $_GET['id'];
        echo "<title>Ver notícia $nome</title>"
    ?>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
</head>
<body>
    <?php
        echo("<h1>$nome</h1>");
        //pegar conteudo da noticia no banco de dados
        $sql = "SELECT * FROM noticia WHERE id_noticia = $id;";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            echo("<p>".$row['conteudo_noticia']."</p>");
        }
        else{
            echo("<h1>Erro ao pegar conteúdo da notícia!</h1>");
        }
    
        
    
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
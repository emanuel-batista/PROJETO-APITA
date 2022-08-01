<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
            align-self: center;
            margin-top: 10px;
            max-height: 60%;
            object-fit: contain;
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .btn{
            width: 20%;
            align-self: center;
            margin-top: 20px;
            font-weight: 700 !important;
            background-color: #d9d9d9 !important;
            border-radius: 50px !important;    
            color: black !important;

        }

        .btn:hover{
            background-color: ##ffc107 !important;
            color: #fff;
            border-radius: 50px;
        }
    </style>
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
        echo("<div class='container'>");
        echo("<h1>$nome</h1>");
        //pegar conteudo da noticia no banco de dados
        $sql = "SELECT * FROM noticia WHERE id_noticia = $id;";
        $result = mysqli_query($conn, $sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            echo("<p>".$row['CONTEUDO_NOTICIA']."</p>");
            //echo da imagem da notícia
            echo("<img src='".$row['IMG_NOTICIA']."' alt='Imagem da notícia' width='50%'>");
            //botão de voltar para notícia.php
            echo("<a href='noticia.php' class='btn'>Voltar</a>");
            echo("</div>");
        }
        else{
            echo("<h1>Erro ao pegar conteúdo da notícia!</h1>");
        }
    
        
    
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include '../includes/config.php'; 
    //select na tabela de entrevista
    ?>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver entrevista: "<?php 
        //pegar o titulo a partir do id da entrevista na url
        $id = $_GET['id'];
        $sql = "SELECT * FROM entrevista WHERE ID_ENTREVISTA = $id";
        $result = mysqli_query($conn, $sql);
        $entrevista = mysqli_fetch_assoc($result);
        echo $entrevista['TITULO_ENTREVISTA'];

    
    ?>" - AP!TA</title>
</head>
<body>
    
</body>
</html>
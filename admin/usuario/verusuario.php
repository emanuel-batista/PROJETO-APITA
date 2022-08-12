<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once '../../includes/config.php'; 
        $nome = $_GET['nome'];
        $id = $_GET['id'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo o usuário <?php $nome ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head>
<body style='background-color: #000A66; display: flex;'>
    <div class="info-usuario container">
        <?php 
            //pegar foto de perfil do usuário
            $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            //armazenar foto numa variável	
            $foto = $row['FOTO'];
            $data = date('d/m/Y', strtotime($row['created_at']));
            echo '<img src="../../static/images/imagens-perfil/'.$foto.'" alt="foto de perfil" class="img-fluid">';
        ?>
        <div class="informacoes">
            <h1 class="text-capitalize"><?php echo $nome ?></h1>
            <p class="text-capitalize">Entrou em: <strong><?php echo $data ?></strong></p>
            <a href='usuario.php' class='btn btn-primary'>Voltar</a>
        </div>
    </div>

    <style>
        .info-usuario{
            display: flex;
            flex-direction: row;
            background-color: white;
            border-radius: 40px;
            align-items: center;
            justify-content: center;
            height: 40vh;
        }

        .informacoes{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin-left: 20px;
        }

        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100vw;
        }

        img{
            width: 200px !important;
            height: 200px !important;
            max-width: 200px !important;
            max-height: 200px !important;
            object-fit: cover;
            border-radius: 100% !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
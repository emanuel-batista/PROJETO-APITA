<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <title>Ver perfil</title>
</head>
<body>
    <div class="navbar">
        
        <?php 
        include '../includes/config.php'; 
        require_once(ROOT_PATH . '/navbar.php'); ?> 
    </div>
   
    <!-- <div class="container-perfil">
        <form action="../includes/logout.php" method="post">
            <input type="submit" name="logout_btn" value="Sair" class="btn btn-waning">
        </form>
    </div> -->

    <?php
       include(ROOT_PATH . '/public_functions.php');

        $user = getLoggedUser();
        $id = $user['ID_USUARIO'];
        $nome = $user['NOME'];
        $foto = $user['FOTO'];
        $bio = $user['BIO_USUARIO'];
        $esporte = $user['ESPORTE_USUARIO'];
        $rede = $user['REDE_SOCIAL'];
        $data = date('d/m/Y', strtotime($user['created_at']));
        
       
    ?>

    <div class="info-usuario container">
        <div class="informacoes">
        <?php echo '<img src="../static/images/imagens-perfil/'.$foto.'" alt="foto de perfil" class="img-fluid">'; ?>
            <h1 class="text-capitalize"><?php echo $nome ?></h1>
            <p class="text-capitalize">Entrou em: <strong><?php echo $data ?></strong></p>
            <p class="text">Encontre em: <strong><a href="<?php echo $rede ?>"><?php echo $rede ?></a></strong></p>
            <p class="text-capitalize">Bio: <strong><?php echo $bio ?></strong></p>
            <p class="text-capitalize">Esporte favorito: <strong><?php echo $esporte ?></strong></p>
            <a href='index.php' class='btn btn-primary'>Voltar</a>
        </div>
    </div>


    <style>
        .info-usuario{
            margin-top: 10vh;
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
            align-items: center;
            justify-content: center;
            margin-left: 20px;
        }

        .img-fluid{
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
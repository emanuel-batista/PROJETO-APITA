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
   
    <div class="container-perfil">
        <form action="../includes/logout.php" method="post">
            <input type="submit" name="logout_btn" value="Sair" class="btn btn-waning">
        </form>
    </div>

    <?php
       include(ROOT_PATH . '/public_functions.php');
        var_dump($_SESSION);

        $user = getLoggedUser();
        $id = $user['ID_USUARIO'];
        $nome = $user['NOME'];
        $foto = $user['FOTO'];
        $rede = $user['REDE_SOCIAL'];
        $data = date('d/m/Y', strtotime($user['created_at']));
        

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
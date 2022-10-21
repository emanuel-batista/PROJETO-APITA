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
        $capa = $user['CAPA'];
        $data = date('d/m/Y', strtotime($user['created_at']));
        
       
    ?>
    <div class="foto-de-capa" style="background-image: url(../static/images/flags-pattern/<?php echo $capa ?>.jpg); background-size: 95em; background-position: top center; background-repeat-x: repeat; background-repeat-y: no-repeat; height: 39vh; z-index: 1; box-shadow: 0px 4px 45px 7px rgb(0 0 0 / 25%);">
        
    </div>
    <div class="info-usuario container">
        <div class="informacoes">
        <?php echo '<img src="../static/images/imagens-perfil/'.$foto.'" alt="foto de perfil" class="img-fluid">'; ?>
            <div class="nomesporte">
                <h1 class="text-capitalize nome"><?php echo $nome ?></h1>
                <p class="text-capitalize esporte">Gosta de <strong><?php echo $esporte ?></strong></p>
            </div>
            <p class="text-capitalize bio"><?php echo $bio ?></p>
            <div class="uarr">
                <p class="text-uppercase pp">Projeto Ap!ta</p>
                <p class="text-capitalize pp"><strong><?php echo $data ?></strong></p>
                <p class="text pp"><strong><a href="<?php echo $rede ?>" class='pp'><?php echo $rede ?></a></strong></p>
            </div>
            
            <div class="botoes">
                <a href='index.php' class='btn btn-primary'>Voltar</a>
                <form action="../includes/logout.php" method="post">
                    <input type="submit" name="logout_btn" value="Sair" class="btn btn-waning">
                </form>
            </div>
        </div>
    </div>


    <style>
        .nomesporte{
            display: flex;
            align-items: flex-end;
            align-content: center;
            flex-direction: row;
            justify-content: center;
            width: fit-content;
        }

        .nome{
            font-family: 'Roboto Condensed';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 42px;

            color: #000000;
        }

        .esporte{
            font-family: 'Roboto Condensed';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 23px;

            color: #999999;
            margin-left: 10px;
        }

        .bio{
            font-family: 'Roboto Condensed' !important;
            font-style: normal;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 38px !important;
            width: 30vw;
            color: #000000;
            text-transform: none !important;
        }

        .pp{
            font-family: 'Roboto Condensed';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            color: #999999;
            text-decoration: none;
            margin: 0px;
        }

        .botoes{
            display: flex;
            margin: 10px;
        }

        .info-usuario{
            margin-top: -10vh;
            display: flex;
            flex-direction: row;
            /* background-color: white; */
            border-radius: 40px;
            align-items: center;
            justify-content: center;
            height: 40vh;
        }

        .uarr{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .informacoes{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .img-fluid{
            width: 400px !important;
            height: 400px !important;
            max-width: 500px !important;
            max-height: 500px !important;
            object-fit: cover;
            border-radius: 100% !important;
            filter: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
        }

        body{
            background-color: #f3f3f3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
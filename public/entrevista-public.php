<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include '../includes/config.php'; 
    ?>   
    <link rel="stylesheet" href="../static/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrevistas - AP!TA</title>
</head>
<body>
    <div class="mae">
        <div class="navbar"> 
        <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
        <!-- incluir public_functions --> 
        <?php require_once(ROOT_PATH . '/public_functions.php'); 
            $entrevistas = getPublishedPostsRecentEntrevista(); 
        ?> 
        </div> 
        <div class="entrevista entrevista-1">
            <div class="conteudo-entrevista">
                <div class="info-entrevista">
                    <h2 style='color: #474747;'><?php echo $entrevistas[0]['TITULO_ENTREVISTA']; ?></h2>
                    <p style="color: #4E4E4E;"><?php echo $entrevistas[0]['CONTEUDO_ENTREVISTA']; ?></p>
                    <a href="entrevista1.php" class="btn btn-warning">Ver entrevista</a>
                </div>
                <!-- <img src="../static/images/imagens-perfil/ygona-moura.jpg" alt="Imagem da entrevista" width="500px" class="img-entrevista"> -->
                <img src= "<?php echo $entrevistas[0]["IMG_ENTREVISTA"]?>" class="img-entrevista" alt="Imagem da entrevista" width="500px">
            </div>
        </div>
        <div class="entrevista entrevista-2">
            <div class="conteudo-entrevista-2">
                <div class="info-entrevista-2">
                    <h2 style='color: #474747;'>Entrevista 2</h2>
                    <p style="color: #4E4E4E; text-align: end;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quam temporibus quae repellat deserunt veritatis doloribus quisquam laudantium. Impedit eveniet laboriosam cupiditate ea nisi dicta pariatur veniam nobis voluptatibus eaque.</p>
                    <a href="entrevista1.php" class="btn btn-warning">Ver entrevista</a>
                </div>
                <img src="../static/images/belle_bellinha.jpg" alt="Imagem da entrevista" width="500px" class="img-entrevista-2">
            </div>
        </div>
        <div class="entrevista entrevista-3">
            <div class="conteudo-entrevista">
                <div class="info-entrevista">
                    <h2 style='color: #474747;'>Entrevista 3</h2>
                    <p style="color: #4E4E4E;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quam temporibus quae repellat deserunt veritatis doloribus quisquam laudantium. Impedit eveniet laboriosam cupiditate ea nisi dicta pariatur veniam nobis voluptatibus eaque.</p>
                    <a href="entrevista1.php" class="btn btn-warning">Ver entrevista</a>
                </div>
                <img src="../static/images/tun-quiz2.jpg" alt="Imagem da entrevista" width="500px" class="img-entrevista">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
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
            $entrevistas = getPublishedPostsAllEntrevista(); 
        ?> 
        </div> 
        <div class="filtros-entrevista">
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Filtros
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="entrevista-public.php" >Mais recentes</a></li>
                  <li><a class="dropdown-item" href="entrevista-atg.php">Mais antigas</a></li>
                  <li><a class="dropdown-item active" href="entrevista-tds.php">Todas as Entrevistas</a></li>
                </ul>
              </div>
        </div>
        <div class="entrevista entrevista-1">
            <div class="conteudo-entrevista">
                <div class="info-entrevista">
                    <h2 style='color: #474747;'><?php echo $entrevistas[0]['TITULO_ENTREVISTA']; ?></h2>
                    <p style="color: #4E4E4E;"><?php echo $entrevistas[0]['CONTEUDO_ENTREVISTA']; ?></p>
                    <a href="<?php 
                        //pegar o href da entrevista
                        $href = $entrevistas[0]['LINK_ENTREVISTA'];
                        echo $href;
                    
                    ?>" class="btn btn-warning">Ver entrevista</a>
                </div>
                <!-- <img src="../static/images/imagens-perfil/ygona-moura.jpg" alt="Imagem da entrevista" width="500px" class="img-entrevista"> -->
                <img src= "../static/images/imagens-noticia/<?php echo $entrevistas[0]["IMG_ENTREVISTA"];?>" class="img-entrevista" alt="Imagem da entrevista" width="500px">
            </div>
        </div>
       <?php
            //while para pegar as entrevistas da função getPublishedPostsOldEntrevista()
            $i = 1;
            while($i < count($entrevistas)){
                //echo para mostrar as entrevistas
                echo "<div class='entrevista entrevista-2'>
                <div class='conteudo-entrevista'>
                    <div class='info-entrevista'>
                        <h2 style='color: #474747;'>".$entrevistas[$i]['TITULO_ENTREVISTA']."</h2>
                        <p style='color: #4E4E4E;'>".$entrevistas[$i]['CONTEUDO_ENTREVISTA']."</p>
                        <a href='".$entrevistas[$i]['LINK_ENTREVISTA']."' class='btn btn-warning'>Ver entrevista</a>
                    </div>
                    <img src= '../static/images/imagens-noticia/".$entrevistas[$i]['IMG_ENTREVISTA']."' class='img-entrevista' alt='Imagem da entrevista' width='500px'>
                </div>
            </div>";
            $i++;
            }

       ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style/style-index.css">
    <?php include '../includes/config.php'; 
    ?>   
    <link rel="stylesheet" href="../static/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <title>AP!TA - Veja as últimas notícias!</title>
</head>
<body>
    <div class="all">
        <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
        <!-- incluir public_functions --> 
        <?php require_once(ROOT_PATH . '/public_functions.php'); 
            $posts = getPublishedPostsRecent(); 
            $noticias = getPublishedPosts4();
            $entrevistas = getPublishedPosts5();
        
        ?>

        <div class="n-1">
            <h2 class='h2-n1'>Últimas Notícias</h2>
            <div class="sub-n1">
                <div class="sub-t">
                    <h3 class="h3-n1"><?php echo $posts[0]['TITULO_NOTICIA']; ?></h3>
                    <p class='p-n1'><?php echo $posts[0]['CONTEUDO_NOTICIA']; ?></p>
                </div>
                <a href="vernoticiaclick.php?id=<?php echo $posts[0]['ID_NOTICIA']; ?>"><img src="../static/images/imagens-noticia/<?php echo $posts[0]['IMG_NOTICIA'] ?>" alt="AK-47 é o porte do homem" class='img-n1'></a>
            </div>
            <hr>
            <div class="articles-n1">
                <div class="article">
                    <a href="vernoticiaclick.php?id=<?php echo $noticias[0]['ID_NOTICIA']; ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $noticias[0]['IMG_NOTICIA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $noticias[0]['TITULO_NOTICIA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="vernoticiaclick.php?id=<?php echo $noticias[1]['ID_NOTICIA']; ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $noticias[1]['IMG_NOTICIA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $noticias[1]['TITULO_NOTICIA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="vernoticiaclick.php?id=<?php echo $noticias[2]['ID_NOTICIA']; ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $noticias[2]['IMG_NOTICIA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $noticias[2]['TITULO_NOTICIA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="vernoticiaclick.php?id=<?php echo $noticias[3]['ID_NOTICIA']; ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $noticias[3]['IMG_NOTICIA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $noticias[3]['TITULO_NOTICIA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="vernoticiaclick.php?id=<?php echo $noticias[4]['ID_NOTICIA']; ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $noticias[4]['IMG_NOTICIA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $noticias[4]['TITULO_NOTICIA'] ?></h4>
                    </a>
                </div>
            </div>
            <hr>
            <h2 class='h2-ent'>Últimas Entrevistas</h2>
            <div class="articles-n1">
                <div class="article">
                    <a href="<?php echo $entrevistas[0]['LINK_ENTREVISTA'] ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[0]['IMG_ENTREVISTA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $entrevistas[0]['TITULO_ENTREVISTA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="<?php echo $entrevistas[1]['LINK_ENTREVISTA'] ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[1]['IMG_ENTREVISTA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $entrevistas[1]['TITULO_ENTREVISTA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="<?php echo $entrevistas[2]['LINK_ENTREVISTA'] ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[2]['IMG_ENTREVISTA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $entrevistas[2]['TITULO_ENTREVISTA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="<?php echo $entrevistas[3]['LINK_ENTREVISTA'] ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[3]['IMG_ENTREVISTA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $entrevistas[3]['TITULO_ENTREVISTA'] ?></h4>
                    </a>
                </div>
                <div class="article">
                    <a href="<?php echo $entrevistas[4]['LINK_ENTREVISTA'] ?>">
                    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[4]['IMG_ENTREVISTA'] ?>" alt="eba" class='img-a'>
                    <h4 class='h4-a'><?php echo $entrevistas[4]['TITULO_ENTREVISTA'] ?></h4>
                    </a>
                </div>
            </div>
        <hr>
        </div>

        <div class="container-3">
    <img src="../static/images/Fotos.png" alt="Foto dos criadores" width="220px" height="220px">
    <div class="conteudo-rodape">
      <h3 style="color: #527E54;">Criado por: </h3>
      <p style="font-size: 25px;">
        Emanuel Batista(full stack)<br>
        Letícia Xavier(front-end)<br>
        Lívia Moraes(front-end)<br>
        Paulo Martins(back-end e banco de dados)
      </p>
    </div>
    <img src="../static/images/Logo-2.png" alt="Logo do site" style="margin-top: -30px;" width="220px" height="220px">
  </div>
  <footer style="height: 10vh;height: 10vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #efefef;">
    <h6>&copy; Todos os direitos reservados - AP!TA</h6>
  </footer>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
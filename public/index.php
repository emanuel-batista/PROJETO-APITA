<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   
  <title>AP!TA - O melhor PORTAL</title>   
  <?php include '../includes/config.php'; 
  ?>   
  <link rel="stylesheet" href="../static/style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head> 
<body style="background-color:  #ffffff ; overflow-x: hidden;"> 
  <div class="mae"> 
    <div class="navbar"> 
      <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
      <!-- incluir public_functions --> 
      <?php require_once(ROOT_PATH . '/public_functions.php');
      $entrevistas = getPublishedPostsFirstEntrevista();
      ?> 
    </div> 
    <?php $posts = getPublishedPostsRecent(); 
    //verificar se há msg em $_SESSION['msg']
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    var_dump($_SESSION);
      ?> 
    <div class="container"> 
      <div class="sub-container">
        <img src= "../static/images/imagens-noticia/<?php echo $posts[0]["IMG_NOTICIA"]?>" class="img-fluid" alt="..." class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'>
        <div class="hero-section">
          <h1 class="h1-hero"><strong><?php echo $posts[0]['TITULO_NOTICIA']; ?></strong></h1>
          <p class="p-hero"><?php echo $posts[0]['CHAMADA_NOTICIA']; ?></p>
          <button class='btn btn-warning'><a href="vernoticia.php" class='ver-mais-hero'>Ver Mais</a></button>
        </div>
        </img> 
      </div>
    </div> 
    </div>
  </div>
  <div class="container-2">
    
    <div class="text-2">
      <h2 class='h2-2'><strong><?php
      echo $posts[0]['TITULO_NOTICIA']; ?></strong></h2>
      </strong></h2>
      <button class='btn btn-warning'><a href="entrevista-public.php" class='ver-mais-hero'>Ver Mais</a></button>
    </div>
    <div class="imagem-2">
    <img src="../static/images/imagens-noticia/<?php echo $entrevistas[0]["IMG_ENTREVISTA"]?>" style='min-width: 45vw; max-width: 45vw; max-height: 70vh; object-fit: cover; border-radius: 40px; box-shadow: 0px 0px 65px -19px rgba(0,0,0,0.57);'></img>
    </div>
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

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body> 
</html>
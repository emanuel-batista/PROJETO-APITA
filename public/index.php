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
<body style="background-color:	#ffffff ;"> 
  <div class="mae"> 
    <div class="navbar"> 
      <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
      <!-- incluir public_functions --> 
      <?php require_once(ROOT_PATH . '/public_functions.php') ?> 
          
    </div> 
    <?php $posts = getPublishedPostsRecent(); 
    var_dump($_SESSION);
      ?> 
    <div class="container"> 
      <div class="sub-container">
        <img src= "../static/images/imagens-noticia/<?php echo $posts[0]["IMG_NOTICIA"]?>" class="img-fluid" alt="..." class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 500px; object-fit: cover; border-radius: 40px;'>
        <div class="hero-section">
          <h1 class="h1-hero"><strong><?php echo $posts[0]['TITULO_NOTICIA']; ?></strong></h1>
          <p class="p-hero"><?php echo $posts[0]['CONTEUDO_NOTICIA']; ?></p>
          <button class='btn btn-warning'><a href="#" class='ver-mais-hero'>Ver Mais</a></button>
        </div>
        </img> 
      </div>
    </div> 

    </div>
  </div>
  <div class="container-2" style="height: 100vh;">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body> 
</html>

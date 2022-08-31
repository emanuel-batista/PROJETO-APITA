<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <?php include '../includes/config.php'; 
    ?> 
    <link rel="stylesheet" href="../static/style/style2.css">  
    <link rel="stylesheet" href="../static/style/style.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
</head>
<body>
    <div class="mae2">
    <div class="navbar"> 
      <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
      <!-- incluir public_functions --> 
      <?php require_once(ROOT_PATH . '/public_functions.php') ?> 
    </div> 

     <div class="filtros-entrevista2">
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Filtros
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item active" href="entrevista-public.php" >Mais recentes</a></li>
                  <li><a class="dropdown-item" href="entrevista-atg.php">Mais antigas</a></li>
                  <li><a class="dropdown-item" href="entrevista-tds.php">Todas as Entrevistas</a></li>
                </ul>
              </div>
        </div> 
        <div class="container-4">

</div>

    <div class="container-noticia">
    <div class="sub-container-noticia">
        <img src= "../static/images/belle_bellinha.jpg" class="img-fluid" alt="..." class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'>
        <div class="hero-section">
             <h1 class="h1-hero"><strong></strong></h1>
          <p class="p-hero">Belle belinha avisa que vem aí!</p>  
          <button class='btn btn-warning'><a href="vernoticia.php" class='ver-mais-hero'>Ver Mais</a></button>
        </div>
        </img> 
        </div>  
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
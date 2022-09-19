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
    <style>
      .aaaa {
        display: flex;
        flex-flow: wrap;
      }

      .aaaa hr {
        width: 100%;
      }
    </style>
</head>
<body>
    <div class="mae2">
    <div class="navbar"> 
      <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
      <!-- incluir public_functions --> 
      <?php require_once(ROOT_PATH . '/public_functions.php');
        $noticias = getPublishedPostsCategoria3(); 
      ?> 
  
    </div> 

    
<div class="container-4">
  <div class="sub-container-4">
    <h1 class="h1-vn"><?php echo $noticias[0]['TITULO_NOTICIA'] ?></h1>
    <p class="p-vn"><?php echo $noticias[0]['CONTEUDO_NOTICIA'] ?></p>
  </div>
  <?php echo "<img src='../static/images/imagens-noticia/". $noticias[0]['IMG_NOTICIA'] . "' class='img-fluid' alt='...' class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'>"; ?>
</div>   
<div class="filtros-entrevista2">
    <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="vernoticia.php">Principais</a></li>
          <li><a class="dropdown-item" href="volei.php">Vôlei</a></li>
          <li><a class="dropdown-item" href="futebol.php">Futebol</a></li>
          <li><a class="dropdown-item active" href="basquete.php">Basquete</a></li>
          <li><a class="dropdown-item" href="copa.php">Copa</a></li>
          <li><a class="dropdown-item" href="olimpiadas.php">Olimpíadas</a></li>
        </ul>
      </div>
    </div>
<div class="container-noticia-2">    
    <div class="sub-container-n2">
      <?php 
        //while com echo das últimas 4 notícias
        $sql = "SELECT * FROM noticia WHERE categoria_noticia=3 order by created_at desc;";

        //a cada dois posts, fecha a div e abre outra
        $i = 1;
        $geraRow = true;
        $contaElementos = 0;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
          //se o título for maior que 50 caracteres, ele corta e coloca 3 pontos
          if (strlen($row['TITULO_NOTICIA']) > 50) {
            $titulo = substr($row['TITULO_NOTICIA'], 0, 50) . '...';
          } else {
            $titulo = $row['TITULO_NOTICIA'];
          }
          
          echo '<div class="sub-container-noticia-2">';
          echo "<img src='../static/images/imagens-noticia/". $row['IMG_NOTICIA'] . "' class='img-fluid' alt='...' class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'>";
          echo "<div class='hero-section'>";
          echo '<h1 class="h1-hero"><strong>' . $titulo .'</strong></h1>';
          echo '<p class="p-hero">'. $row['CATEGORIA_NOTICIA'] .'</p>';
          echo '
          <div class="botoes-vn">
          <a href="vernoticiaclick.php?id='. $row['ID_NOTICIA'] .'" class="btn btn-warning">Ler mais</a> 
          <a href="curtida.php?id='. $row['ID_NOTICIA'] .'" class="trem"><img src="../static/images/like.svg" alt="ENTREVISTAS" id="cu">'. $row['CURTIDA'] .'</a><br>

          </div>
          ';
          echo '</div>';
          echo '</img>';
          echo '</div>';

          if($i % 2 == 0 && $i > 0){
              echo "<hr>";
          }
          $i++;
        }
      ?> 
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
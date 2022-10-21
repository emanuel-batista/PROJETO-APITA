<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <?php include '../includes/config.php'; 
    ?> 
    <style>
      .aaaa {
        display: flex;
        flex-flow: wrap;
      }

      .aaaa hr {
        width: 100%;
      }

      .imgentrevista:hover{
        scale: 1;
      }

      .imgg{
        transition: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        background: url(../static/images/play.png);
      }

      .imgg:hover{
        transition: cubic-bezier(0.55, 0.055, 0.675, 0.19);
        filter: brightness(60%);
        background: url(../static/images/play.png);
      }

    </style>
    <link rel="stylesheet" href="../static/style/style2.css">  
    <link rel="stylesheet" href="../static/style/style.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrevistas</title>
</head>
<body>
    <div class="mae2">
    <div class="navbar"> 
      <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
      <!-- incluir public_functions --> 
      <?php require_once(ROOT_PATH . '/public_functions.php');
        $posts = getPublishedPostsAllEntrevista();
        $entrevistas = getPublishedPostsFirstEntrevista();
      ?> 
  
    </div> 

    
<div class="container-4">
  <div class="sub-container-4">
    <h1 class="h1-vn"><?php echo $entrevistas[0]['TITULO_ENTREVISTA'] ?></h1>
    <p class="p-vn"><?php echo $entrevistas[0]['CONTEUDO_ENTREVISTA'] ?></p>
  </div>
  <?php echo "<a class='imgentrevista' href='". $entrevistas[0]['LINK_ENTREVISTA'] ."'><img class='imgg' src='../static/images/imagens-noticia/". $entrevistas[0]['IMG_ENTREVISTA'] . "' class='img-fluid' alt='...' class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'></a>"; ?>

</div>
  <div class="filtros-entrevista2">
      <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item active" href="entrevista-public.php">Principais</a></li>
          <li><a class="dropdown-item" href="entrevista-atg.php">Antigas</a></li>
        </ul>
      </div>
    </div>
    <div class="container-noticia">
    
    <div class="aaaa">
      <?php 
        //while com echo das últimas 4 notícias
        $sql = "SELECT * FROM entrevista ORDER BY id_entrevista DESC LIMIT 4";

        $i = 1;
        $geraRow = true;
        $contaElementos = 0;

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          //se o título for maior que 50 caracteres, ele corta e coloca 3 pontos
          if (strlen($row['TITULO_ENTREVISTA']) > 50) {
            $titulo = substr($row['TITULO_ENTREVISTA'], 0, 50) . '...';
          } else {
            $titulo = $row['TITULO_ENTREVISTA'];
          }

          echo '<div class="sub-container-noticia">';
          echo "<img src='../static/images/imagens-noticia/". $row['IMG_ENTREVISTA'] . "' class='img-fluid' alt='...' class='img-hero' style='min-width: 500px; max-width: 700px; max-height: 300px; object-fit: cover; border-radius: 40px;'>";
          echo "<div class='hero-section'>";
          echo '<h1 class="h1-hero"><strong>'. $titulo .'</strong></h1>';
          echo '
          <div class="botoes-vn">
          <a href="'. $row['LINK_ENTREVISTA'] .'" class="btn btn-warning">Assistir</a> 

          </div>
          ';
          /* echo '<a href="curtida.php?id='. $row['ID_NOTICIA'] .'" class=><img src="../static/images/like.svg" alt="ENTREVISTAS" id="icon"></a>'; */
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
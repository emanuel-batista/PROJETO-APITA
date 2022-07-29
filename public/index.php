<!DOCTYPE html> 
 
<html lang="pt-br"> 
 
<head> 
 
<meta charset="UTF-8"> 
 
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
 <title>AP!TA - O melhor PORTAL</title> 
 
 <?php require_once '../includes/config.php'; ?> 
 
 <link rel="stylesheet" href="../static/style/style.css">  
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
 
</head> 
 
 
 
<body style="background-color:#DAA520 ;"> 
 
 
 
 
<div class="mae"> 
 
 
 
<div class="navbar"> 
 
 
 
 <?php require_once(ROOT_PATH . '/navbar.php'); ?>  
 
 
 
 <!-- incluir public_functions --> 
 
 <?php require_once(ROOT_PATH . '/public_functions.php') ?> 
 
 <?php $posts = getPublishedPosts(); ?>     
 
 
 
</div> 
 
 
 
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="../static/images/neymar.jpg" class="d-block w-100" alt="..."> 
      <div class="carousel-caption d-none d-md-block">
      <h5>Neymar sonegador de impostos</h5> 
      <p>Neymarzinho sonegador de impostos</p> 
      </div>
     </div>

    <div class="carousel-item" data-bs-interval="2000">
    <img src="../static/images/jo1.jpg" class="d-block w-100" alt="..."> 
      <div class="carousel-caption d-none d-md-block">
      <h5>Jô engravidou alguém hoje?</h5> 
        <p>Sim, a Joelma.</p> 
      </div>
    </div>

    <div class="carousel-item">
    <img src="../static/images/gabigol.jpg" class="d-block w-100" alt="..."> 
      <div class="carousel-caption d-none d-md-block">
      <h5>Gabigol virou gente?</h5> 
       <p>Não.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
 
 
 <!-- <div id="carousel" class="carousel" data-bs-ride="carousel"> 
 
  <div class="carousel-indicators"> 
 
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> 
 
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button> 
 
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> 
 
  </div> 
 
 
 
  <div class="carousel-inner"> 
 
    <div class="carousel-item active" data-bs-interval="10000" > 
 
      <img src="../static/images/neymar.jpg" class="d-block w-100" alt="..."> 
 
      <div class="carousel-caption d-none d-md-block"> 
 
        <h5>Neymar sonegador de impostos</h5> 
 
        <p>Neymarzinho sonegador de impostos</p> 
 
      </div> 
 
    </div> 
 
 
 
    <div class="carousel-item" data-bs-interval="2000"> 
 
      <img src="../static/images/gabigol.jpg" class="d-block w-100" alt="..."> 
 
      <div class="carousel-caption d-none d-md-block"> 
 
        <h5>Gabigol virou gente?</h5> 
 
        <p>Não.</p> 
 
      </div>
</div> 
 
 
 
    <div class="carousel-item"> 
 
      <img src="../static/images/jo1.jpg" class="d-block w-100" alt="..."> 
 
      <div class="carousel-caption d-none d-md-block"> 
 
        <h5>Jô engravidou alguém hoje?</h5> 
 
        <p>Sim, a Joelma.</p> 
 
      </div> 
 
    </div> 
 
  </div> 
 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev"> 
 
    <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
 
    <span class="visually-hidden">Previous</span> 
 
  </button> 
 
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next"> 
 
    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
 
    <span class="visually-hidden">Next</span> 
 
  </button> 
 
</div> 
 
 --> 
 
 
 
 
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
 
</body> 
 
</html>

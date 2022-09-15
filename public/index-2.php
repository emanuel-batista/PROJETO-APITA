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
        <?php require_once(ROOT_PATH . '/public_functions.php'); ?>

        <div class="n-1">
            <h2>Últimas Notícias</h2>
            <div class="sub-n1">
                <div class="sub-t">
                    <h3 class="text-capitalize">lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor ipsum ut lectus lacinia, non auctor elit suscipit. Cras vehicula, purus vel suscipit dapibus, libero nibh dictum elit, non fermentum erat mi ut erat. Ut ullamcorper purus eu venenatis porttitor. Sed dolor dolor, suscipit non imperdiet non, volutpat ut orci.</p>
                </div>
                <img src="../static/images/neymar.jpg" alt="AK-47 é o porte do homem">
            </div>
            <div class="articles-n1">
                <div class="article">
                    <img src="../static/images/cardi-quiz4.jpg" alt="eba">
                    <h4>Lorem Ipsum Dolor Sit Amet</h4>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
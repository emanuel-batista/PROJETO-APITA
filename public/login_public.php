<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include '../includes/config.php'; ?>
    <link rel="stylesheet" href="../static/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Logue-se ao site! - AP!TA</title>
</head>
<body>
    <div class="mae mae-login">
        <div class="navbar">
        <?php require_once(ROOT_PATH . '/navbar.php'); ?>
        <?php require_once(ROOT_PATH . '/login.php'); ?>
        </div>
        <div class="container container-login">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class='form-login'>
                <input type="text" name="username" placeholder="Nome de usuário" class='input-login'>
                <input type="password" name="password" placeholder="Senha" class='input-login'>
                <div class='botoes-login'>
                    <input type="submit" name="login_btn" class='btn btn-light' value='Entrar'>
                    <a href="register_public.php" class='btn btn-warning'>Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once '../includes/config.php'; ?>
    <link rel="stylesheet" href="../static/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastre-se ao site! - AP!TA</title>
</head>
<body>
    <div class="mae mae-login">
        <div class="navbar">
        <?php require_once(ROOT_PATH . '/navbar.php'); ?>
        </div>
        <div class="container container-login">
            <form action="../includes/register.php" method="post" class='form-login' enctype='multipart/form-data'>
                <input type="text" name="nome" placeholder="Nome" class='input-login'>
                <input type="text" name="username" placeholder="Nome de usuário" class='input-login'>
                <input type="text" name="redesocial" placeholder="Redes sociais" class='input-login'>
                <input type="password" name="password" placeholder="Senha" class='input-login'>
                <label for="fileToUpload">Foto de perfil:</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <div class='botoes-login'>
                    <input type="submit" name="register_btn" class='btn btn-light' value='Cadastre-se'>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
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
                <input type="text" name="nome" placeholder="Nome" class='input-login' required>
                <input type="text" name="username" placeholder="Nome de usuário" class='input-login' required>
                <input type="text" name="redesocial" placeholder="Redes sociais" class='input-login' required>
                <textarea type="text" name="bio" placeholder="Bio" class='input-login' rows='2' id='bio' required></textarea>
                <label for="esporte">Escolha seu esporte fav</label>
                <select name="esporte" class='input-login' required>
                    <option value="futebol">Futebol</option>
                    <option value="basquete">Basquete</option>
                    <option value="volei">Vôlei</option>
                    <option value="tenis">Tênis</option>
                    <option value="natacao">Natação</option>
                    <option value="ciclismo">Ciclismo</option>
                    <option value="atletismo">Atletismo</option>
                    <option value="skate">Skate</option>
                    <option value="surf">Surf</option>
                    <option value="outro">Outro</option>
                </select>

                <input type="password" name="password" placeholder="Senha" class='input-login' required>
                <label for="fileToUpload" style="color: white;">Foto de perfil:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Imagem" required>
                <div class='botoes-login'>
                    <input type="submit" name="register_btn" class='btn btn-light' value='Cadastre-se'>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        //count how many characters are in the textarea
        var bio = document.getElementById('bio');
        var count = document.getElementById('count');
        var max = 500;
        count.innerHTML = max;
        bio.addEventListener('input', function() {
            var length = bio.value.length;
            var charactersLeft = max - length;
            count.innerHTML = charactersLeft;
        });

    </script>
</body>
</html>
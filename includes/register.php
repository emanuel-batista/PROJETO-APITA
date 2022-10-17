<?php
    //registrar usuário no sistema
    //Deus ajuda
        include_once 'config.php';
        $target_dir = "../static/images/imagens-perfil/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        var_dump($_FILES["fileToUpload"]);
        $imagembb = $_FILES["fileToUpload"]["name"];
        $uploadOk = 0;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $nome = addslashes($_POST['nome']);
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $redes = addslashes($_POST['redesocial']);

    $bio = addslashes($_POST['bio']);
    //a cada enter, trocar por <br>
    $bio = str_replace("\r", "<br>", $bio);

    $esporte = addslashes($_POST['esporte']);

    if (empty($username) || empty($password)) {
        echo '<script>alert("Preencha todos os campos!");</script>';
    }elseif (isset($_POST['register_btn'])) {
        # code...
        // Check if image file is a actual image or fake image
        // Check if image file is a actual image or fake image
        if(isset($_POST["register_btn"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "<script>header('Location: login.php');</script>";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script>header('Location: ../public/login_public.php');</script>";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
        }

        $sql = "INSERT INTO usuario (nome, username, senha, foto, rede_social, bio_usuario, esporte_usuario, created_at) VALUES ('$nome', '$username', '$password', '$imagembb', '$redes', '$bio', '$esporte', now());";
        $result = mysqli_query($conn, $sql);
        if($result){
            //criar váriavel global para mostrar mensagem de sucesso
            $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Bem-vindo(a)(e)(i)!</div>";
            echo "<script>window.location.href = '../public/login_public.php';</script>";
        }else{
            echo '<script>alert("Erro ao cadastrar usuário!");</script>';
        }

    }
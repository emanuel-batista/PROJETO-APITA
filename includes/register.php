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

        $sql = "INSERT INTO usuario (nome, username, senha, foto, created_at) VALUES ('$nome', '$username', '$password', '$imagembb', now());";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("Usuário cadastrado com sucesso!");</script>';
            echo '<script>window.location.href = "../public/login_public.php";</script>';
        }else{
            echo '<script>alert("Erro ao cadastrar usuário!");</script>';
        }

    }
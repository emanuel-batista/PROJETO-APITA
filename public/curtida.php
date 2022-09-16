<?php

    //se o usuário clicar no botão de curtir, adicionar +1 no campo curtidas, mas se for null, adicionar 1
    //se não tiver sessão ativa, não pode curtir
    include '../includes/config.php';

        if(isset($_SESSION['username'])){
            $id = $_GET['id'];
            $sql = "UPDATE noticia SET curtida = curtida + 1 WHERE ID_NOTICIA = $id";
            echo $sql;
            $result = mysqli_query($conn, $sql);
            header("Location: vernoticiaclick.php?id=$id");
        }else{
            header("Location: ../public/login_public.php");
        }
       /*   
         */

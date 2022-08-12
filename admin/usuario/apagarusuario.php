<?php

    //apagar o usuario
    include_once '../../includes/config.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sql = "DELETE FROM usuario WHERE id_usuario = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo"<script>alert('Usuário $nome apagado com sucesso!');</script>";
            echo"<script>window.location.href = 'usuario.php';</script>";
        }else{
            echo"<script>alert('Erro ao apagar o usuário $nome!');</script>";
            echo"<script>window.location.href = 'usuario.php';</script>";
        }
    }
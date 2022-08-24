<?php
    include '../../includes/config.php';
    session_destroy();
    //criar global para destruir sessão
    session_start();
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Deslogado com sucesso!</div>";
    header('Location: ../../public');

    ?>
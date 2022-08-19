<?php
    session_start();
    //destruir sessão
    if(isset($_POST['logout_btn'])){
        session_destroy();
        header('Location: ../public/login_public.php');
    }
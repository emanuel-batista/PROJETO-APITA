<?php
    include '../../includes/config.php';


    if($_SESSION == null){
        header('Location: ../../public');
    }elseif ($_SESSION['ranking'] != '3') {
        header('Location: ../../public');
    }
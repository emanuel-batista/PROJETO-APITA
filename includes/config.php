<?php

    session_start();
    //error_reporting(0);


    $sname = "localhost";
    $unmae = "root";
    $password = "";
    $db_name = "tccdasgostosas";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if (!$conn) {
        echo "Falha na conexão";
    }

    define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/SEGUNDO-SEMESTRE/');
   
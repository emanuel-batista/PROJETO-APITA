<?php

    $sname = "localhost";
    $unmae = "root";
    $password = "";
    $db_name = "tccdasgostosas";

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if (!$conn) {
        echo "Falha na conexão";
    }

    
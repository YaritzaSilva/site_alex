<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "1234";

    $banco = "site_alex";


    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    ?>

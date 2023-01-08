<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $mysqli = mysqli_connect($host, $user, $password, $database);
    
    if($mysqli->error){
        die("Falha ao conectar no banco: ".$mysqli->error );
    }

    
?>
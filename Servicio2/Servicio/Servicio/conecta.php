<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $bd = "servicio";
    $conecta = mysqli_connect($servidor,$usuario, $password, $bd);
    if ($conecta->connect_error){
        die("error, no se pudo conectar la bd".$conecta->connect_error);
    }

    
?>
<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $bd = "servicio";
    $conecta = mysqli_connect($servidor,$usuario, $password, $bd);
    if ($conecta->connect_error){
        die("error, no se pudo conectar la bd".$conecta->connect_error);
    }
    $nom = $_GET["id_usuario"];

    

    $tabla1="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                CO.estadoC, CO.nombreC
                FROM usuario US
                INNER JOIN constancia CO ON US.id_usuario = CO.id_usuario
                                               ";
$tabla2="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                DB.nombreB, DB.estadoB
                FROM usuario US
                INNER JOIN donativo DB ON US.id_usuario = DB.id_usuario
               ";
$tabla3="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                DA.nombreA, DA.estadoA
                FROM usuario US
                INNER JOIN donativoa DA ON US.id_usuario = DA.id_usuario
                               ";
$tablaDetalles="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, US.Correo, 
                DA.nombreA, DA.estadoA, DA.fechaExpide,
                DB.nombreB, DB.estadoB, DB.Fecha,
                CO.estadoC, CO.nombreC, CO.FechaExpide 
                FROM usuario US
                INNER JOIN donativoa DA ON US.id_usuario = DA.id_usuario
                INNER JOIN donativo DB ON US.id_usuario = DB.id_usuario
                INNER JOIN constancia CO ON US.id_usuario = CO.id_usuario
                
               ";                               


$conectarTabla1= $conecta->query($tabla1);

$conectarTabla2= $conecta->query($tabla2);

$conectarTabla3= $conecta->query($tabla3);

$conectarTablaDetalles=$conecta->query($tablaDetalles);




//$cone=$conecta->query($query);





$consulta2 = "SELECT * FROM usuario";
$consulta3 = "SELECT * FROM donativo";
$consulta4 = "SELECT * FROM donativoa";
$consulta5 = "SELECT * FROM constancia";
$guardar = $conecta->query($consulta2);
$guardar2 = $conecta->query($consulta3);
$guardar3 = $conecta->query($consulta4);
$guardar4 = $conecta->query($consulta5);

    
?>
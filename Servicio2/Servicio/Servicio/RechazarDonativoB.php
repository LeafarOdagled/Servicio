<?php
    $iddb= $_POST['iddb'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
    $fecha=null;

	$subir="UPDATE `donativo` SET `FechaAceptado`='".$fecha."',`estadoB`='Rechazado' WHERE ID_DonB='" .$iddb."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
<?php
    $iddb= $_POST['iddb'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
    $fecha=date('y-m-j');

	$subir="UPDATE `donativo` SET `FechaAceptado`='".$fecha."',`estadoB`='Aceptado' WHERE ID_DonB='" .$iddb."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
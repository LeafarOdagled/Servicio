<?php
    $idconstancia= $_POST['idconstancia'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
    $fecha=date('y-m-j');

	$subir="UPDATE `constancia` SET `FechaAcepta`='".$fecha."',`estadoC`='Aceptado' WHERE id_constancia='" .$idconstancia."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
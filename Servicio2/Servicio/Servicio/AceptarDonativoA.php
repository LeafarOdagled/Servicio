<?php
    $idda= $_POST['idda'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
    $fecha=date('y-m-j');

	$subir="UPDATE `donativoa` SET `fechaAceptado`='".$fecha."',`estadoA`='Aceptado' WHERE ID_DonA='" .$idda."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
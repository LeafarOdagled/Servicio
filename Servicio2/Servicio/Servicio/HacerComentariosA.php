<?php
    $idda= $_POST['idda'];
    $Comentario= $_POST['Comentario'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
   

	$subir="UPDATE `donativoa` SET `ComentarioA`='".$Comentario."' WHERE ID_DonA='" .$idda."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
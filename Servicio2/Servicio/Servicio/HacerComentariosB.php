<?php
    $iddb= $_POST['iddb'];
    $Comentario= $_POST['Comentario'];
    $co = mysqli_connect('localhost', 'root') or die('NO');
    $db = mysqli_select_db($co, "servicio") or die('no bd');
   

	$subir="UPDATE `donativo` SET `ComentarioB`='".$Comentario."' WHERE ID_DonB='" .$iddb."'";
    if(mysqli_query($co, $subir)){

        header("Location: principalAdmin.php?UsuarioAdmin=Admin");
    } else {
        echo "ERROR: No se ejecuto";
    }
?>
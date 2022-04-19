<?php
$Comentario = $_POST['Comentario'];
$usuario= $_GET["Usuario"];


$co = mysqli_connect('localhost', 'root') or die('NO');
$db = mysqli_select_db($co, "servicio") or die('no bd');



$locacion="principalAdmin.php"; 

$id_usuario=$_GET["id_usuario"];
$actualiza="UPDATE usuario set  Comentario=' .$Comentario. 'where id_usuario='.$id_usuario.'  ";
       


      
       


    



?>
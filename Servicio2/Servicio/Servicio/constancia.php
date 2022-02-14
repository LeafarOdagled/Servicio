<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];

$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";
$result= mysqli_query($co,$consulta) or die('No consulta');

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        
        $_SESSION['Usuario'] = $usuario;
        echo "correcto";

    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
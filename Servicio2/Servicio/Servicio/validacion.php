<?php
session_start();
$usuario = $_POST['boleta'];
$pass = $_POST['password'];

if(empty($usuario) || empty($pass)){
    header("Location:");
    exit();
}

$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";
$result= mysqli_query($co,$consulta) or die('No consulta');
$consulta2="SELECT * from usuarioAd where Usuario='" . $usuario . "'";
$result2= mysqli_query($co,$consulta2) or die('No consulta');



if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        session_start();
        $_SESSION['Usuario'] = $usuario;
        header("Location: principal.php?numerobol=$usuario");
    }else{
        header("Location: index.html");
        exit();
    }
}elseif($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
    if($row['Pass'] ==  $pass){
        session_start();
        $_SESSION['Usuario'] = $usuario;
        header("Location: principalAdmin.php?UsuarioAdmin=$usuario");
    }else{
        header("Location: index.html");
        exit();
    }

}else{
    header("Location: index.html");
    exit();
}
?>
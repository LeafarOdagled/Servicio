<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];


$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";

$result = mysqli_query($co, $consulta) or die('No consulta');
$mostrar = mysqli_fetch_array($result);

$result= mysqli_query($co,$consulta) or die('No consulta');
$locacion="noadeudo.php"; 

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        
        $_SESSION['usuaro']=$usuario;


        $fechaExpide=date('y-m-j');
        $fechaAcepta=null;
        $estado="Rechazado";
         
    

        $consultar="INSERT INTO constancia(id_constancia, FechaExpide,FechaAcepta,Estado , id_usuario)  VALUES
        ('".$row['id_constancia']."', '".$fechaExpide."', '".$fechaAcepta."', '".$estado."', '" . $mostrar['id_usuario'] ."');";


        $result2= mysqli_query($co,$consultar) or die('No consulta');
       

        header("Location:noadeudo.php?numerobol=".$usuario."");

    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
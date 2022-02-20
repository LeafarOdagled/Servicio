<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];
$titulo =$_POST['titulo'];
$autor =$_POST['autor'];
$ISBN =$_POST['isbn'];
$pie =$_POST['pie'];


$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";

$result= mysqli_query($co,$consulta) or die('No consulta');
$locacion="donativob.php";

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        
        $_SESSION['Usuario'] = $usuario;
        $fecha=date('y-m-j');

        $consultar="INSERT INTO donativo(Titulo, Autor, ISBN, Pie, id_usuario ) VALUES
        ('".$titulo."','".$autor."', '".$ISBN."', '".$pie."', '".$row['id_usuario']."', '".$fecha."');"; 
        $result2= mysqli_query($co,$consultar) or die('No consulta');
        
        header("Location:donativob.php?numerobol=".$usuario."");
    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
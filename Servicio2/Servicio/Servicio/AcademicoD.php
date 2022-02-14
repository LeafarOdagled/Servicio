<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];
$pacademico =$_POST['pacademico'];
$tipo =$_POST['tipo'];
$i1 =$_POST['i1'];
$i2 =$_POST['i2'];
$asesores =$_POST['asesores'];


$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";
$result= mysqli_query($co,$consulta) or die('No consulta');
$locacion="donativoa.php";

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        
        $_SESSION['Usuario'] = $usuario;
        $nombreu=$row['Nombre']. ' '. $row['APaterno'] .' '. $row['AMaterno'];
        if($i2=='')
        {
            $consultar="INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, asesores, id_usuario ) VALUES
            ('".$tipo."','".$nombreu."','".$i1."', 'NULL', '".$asesores."', '".$row['id_usuario']."' );"; 
        
        }
        else
        {
            $consultar="INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, asesores, id_usuario ) VALUES
            ('".$tipo."','".$nombreu."','".$i1."', '".$i2."', '".$asesores."', '".$row['id_usuario']."' );"; 
        }

        
        
        $result2= mysqli_query($co,$consultar) or die('No consulta');
        
        header("Location:donativoa.php?numerobol=".$usuario."");
    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
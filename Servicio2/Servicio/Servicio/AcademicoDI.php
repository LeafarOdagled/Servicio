<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];
$pacademico =$_POST['pacademico'];
$tipo =$_POST['tipo'];
$i1 =$_POST['i1'];
$i2 =$_POST['i2'];
$ass1 =$_POST['ass1'];
$ass2 =$_POST['ass2'];
$ass3 =$_POST['ass3'];
$nulo='NULL';

$fechaExpide=date('y-m-j');
$fechaAcepta=null;

$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";
$result= mysqli_query($co,$consulta) or die('No consulta');
$locacion="donativoa.php";

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        
        $_SESSION['Usuario'] = $usuario;
        $nombreu=$row['Nombre']. ' '. $row['APaterno'] .' '. $row['AMaterno'];

        if($ass3=='')
            {
                if($ass2=='')
                {
                    $consultar="INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                    ('".$tipo."','".$nombreu."','".$nulo."', '".$nulo."', '".$ass1."', '".$nulo."', '".$nulo."', '".$row['id_usuario']."', '".$fechaExpide."', '".$fechaAcepta."' );";
                }
                else
                {
                    $consultar="INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                    ('".$tipo."','".$nombreu."','".$nulo."', '".$nulo."', '".$ass1."', '".$ass2."', '".$nulo."', '".$row['id_usuario']."', '".$fechaExpide."', '".$fechaAcepta."' );";
                }
            }
            else
            {
                $consultar="INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                ('".$tipo."','".$nombreu."','".$nulo."', '".$nulo."', '".$ass1."', '".$ass2."', '".$ass3."', '".$row['id_usuario']."', '".$fechaExpide."', '".$fechaAcepta."' );";
            }
        
        
        $result2= mysqli_query($co,$consultar) or die('No consulta');
        
        header("Location:donativoa.php?numerobol=".$usuario."");
    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
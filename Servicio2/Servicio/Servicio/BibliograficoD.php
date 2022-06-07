<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];
$titulo =$_POST['titulo'];
$autor =$_POST['autor'];
$ISBN =$_POST['isbn'];
$anio =$_POST['anio'];
$editorial =$_POST['editorial'];




$co=mysqli_connect('localhost','root') or die('NO');
$db=mysqli_select_db($co,'servicio') or die('no bd');
$consulta="SELECT * from usuario where Boleta='" . $usuario . "'";

$result= mysqli_query($co,$consulta) or die('No consulta');
$locacion="donativob.php";

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Contra'] ==  $pass){
        $_SESSION['Usuario'] = $usuario;
        $fecha=date('y-m-j');
        $fechaAceptado=null;


        $directorio = "PdfBibliografico/";
        $archivo = $directorio .basename($_FILES["ArchivoB"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));


        $consultar="INSERT INTO donativo(Titulo, Autor, ISBN, anio, editorial, id_usuario, Fecha, FechaAceptado, ArchivoB ) VALUES
        ('".$titulo."','".$autor."', '".$ISBN."','".$anio."','".$editorial."', '".$row['id_usuario']."', '".$fecha."','".$fechaAceptado."','".$archivo."');"; 
        
        $result2= mysqli_query($co,$consultar) or die('No consulta');
        
        header("Location:donativob.php?numerobol=".$usuario."");


$directorio = "PdfBibliografico/";

$archivo = $directorio . basename($_FILES["archivoB"]["name"]);

$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));



//var_dump($size);


        
    }
}

?>
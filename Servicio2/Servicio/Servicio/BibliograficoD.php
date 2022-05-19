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

        $consultar="INSERT INTO donativo(Titulo, Autor, ISBN, anio, editorial, id_usuario, Fecha, FechaAceptado ) VALUES
        ('".$titulo."','".$autor."', '".$ISBN."','".$anio."','".$editorial."', '".$row['id_usuario']."', '".$fecha."','".$fechaAceptado."');"; 
        
        $result2= mysqli_query($co,$consultar) or die('No consulta');
        
        header("Location:donativob.php?numerobol=".$usuario."");


$directorio = "PdfBibliografico/";

$archivo = $directorio . basename($_FILES["archivoB"]["name"]);

$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));



//var_dump($size);

    //validando tamaño del archivo
    $size = $_FILES["archivoB"]["size"];

    if($size > 500000){
        echo "El archivo tiene que ser menor a 500kb";
    }else{

        
        
            // se validó el archivo correctamente
            if(move_uploaded_file($_FILES["archivoB"]["tmp_name"], $archivo)){
                echo "El archivo se subió correctamente";

                
            }else{
                echo "Hubo un error en la subida del archivo";
            }
        
    }
    }else{
        echo "contraseña o boleta invalida";
        
    }
}

?>
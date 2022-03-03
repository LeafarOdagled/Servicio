<?php

    $numero=$_POST["numbol"];
    $nombre=$_POST["nombre"];
    $apellidop=$_POST["apellidop"];
    $apellidom=$_POST["apellidom"];
    $correo=$_POST["email"];
    $pass=$_POST["password"];
    $programa=$_POST["programa"];
    $sexo=$_POST["sexo"];

    $co=mysqli_connect('localhost','root') or die('NO');
    $db=mysqli_select_db($co,"servicio") or die('no bd');
    $locacion="registro.html";
    
            if(strlen($pass)<8)
            {
                header($locacion);
            }
            else
            {
                if(str_contains($correo, "@alumno.ipn.mx")) {
                    $nnumero=strval($numero);
                    if((str_contains($nnumero, "67"))&&((strpos($nnumero,"6"))==4)&&((strpos($nnumero,"7"))==5) )
                    {
                        $consulta="INSERT INTO usuario ( Nombre, APaterno, AMaterno, Boleta, Programa, Contra, Correo, sexo) VALUES
                        ('".$nombre."', '".$apellidop."', '".$apellidom."', '".$numero."','".$programa."', '".$pass."', '".$correo."', '".$sexo."');";
                        $result= mysqli_query($co,$consulta) or die('No consulta');
                    
                        header("Location: index.html");
                    }
                    else
                    {
                        header("Location:registro.html");
                    }
                }
                else
                {
                    header("Location:registro.html");
                }
                
            }
            
?>
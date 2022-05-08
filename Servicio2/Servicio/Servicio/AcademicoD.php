<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];
$pacademico = $_POST['pacademico'];
$tipo = $_POST['tipo'];
$i1 = $_POST['i1'];
$i2 = $_POST['i2'];
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$i7 = $_POST['i7'];


$ass1 = $_POST['ass1'];
$ass2 = $_POST['ass2'];
$ass3 = $_POST['ass3'];







$co = mysqli_connect('localhost', 'root') or die('NO');
$db = mysqli_select_db($co, 'servicio') or die('no bd');
$consulta = "SELECT * from usuario where Boleta='" . $usuario . "'";
$result = mysqli_query($co, $consulta) or die('No consulta');
$locacion = "donativoa.php";
$fechaExpide = date('y-m-j');
$fechaAcepta = null;
$nulo = 'NULL';
if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if ($row['Contra'] ==  $pass) {

        $_SESSION['Usuario'] = $usuario;
        $nombreu = $row['Nombre'] . ' ' . $row['APaterno'] . ' ' . $row['AMaterno'];

        if ($i7 == "") //si entra aqui  no hay nada en alumno8
        {
            if ($i6 == "") //si entra aqui no hay nada en alumno7
            {
                if ($i5 == "") //si entra aqui no hay nada en alumno6
                {
                    if ($i4 == "") //si entra aqui no hay nada en alumno5
                    {
                        if ($i3 == "") //si entra aqui no hay nada en alumno4
                        {
                            if ($i2 == "") //si entra aqui no hay nada en alumno3
                            {
                                if ($i1 == "")//si entra aqui no hay nada en alumno2
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                            ('" . $tipo . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                        }else //si entra aqui es un integante y dos asesores
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                            ('" . $tipo . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                        }
                                    }else//si entra aqui es un integrante y 3 asesores  
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                        ('" . $tipo . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                                    }
                                }else //entro aqui porque hay algo en almuno2 
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //si entra aqui solo hay un assesor y dos integrante
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                            ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                        }else //si entra aqui son dos  integantes y dos asesores
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado  ) VALUES
                                            ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                        }
                                    }else//si entra aqui son dos  integrantes y 3 asesores  
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado  ) VALUES
                                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                                    }
                                }
                            } else 
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //si entra aqui son 3  integrantes y 1 asesores  
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado  ) VALUES
                                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                    }else //si entra aqui son 2  integrantes y 2 asesores  
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado  ) VALUES
                                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                    }
                                }else//si entra aqui son 3  integrantes y 3 asesores  
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                                }
                            }
                        } else 
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //si entra aqui son 4  integrantes y 1 asesores  
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                }else //si entra aqui son 4  integrantes y 2 asesores  
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                                }
                            }else//si entra aqui son 4  integrantes y 3 asesores  
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                            }
                        }
                    } else 
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //si entra aqui son 5  integrantes y 1 asesores  
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                            }else //si entra aqui son 5  integrantes y 2 asesores  
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                                ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                            }
                        }else//si entra aqui son 5  integrantes y 3 asesores  
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                            ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                        }
                    }
                } else 
                {
                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                    {
                        if ($ass2 == '') //si entra aqui son 6  integrantes y 1 asesores  
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                            ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                        }else //si entra aqui son 6  integrantes y 2 asesores  
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                            ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                        }
                    }else//si entra aqui son 6  integrantes y 3 asesores  
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5. "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                    }
                }
            } else 
            {
                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                {
                    if ($ass2 == '') //si entra aqui son 7  integrantes y 1 asesores  
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                    }else //si entra aqui son 7  integrantes y 2 asesores  
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                        ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                    }
                }else//si entra aqui son 7  integrantes y 3 asesores  
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5. "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
                }
            }
        } else 
        {
            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
            {
                if ($ass2 == '') //si entra aqui son 8  integrantes y 1 asesores  
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                }else //si entra aqui son 8  integrantes y 2 asesores  
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                    ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' );";
                }
            }else//si entra aqui son 8  integrantes y 3 asesores  
            {
                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, id_usuario, fechaExpide, fechaAceptado ) VALUES
                ('" . $tipo . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5. "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "');";
            }
        }

        $result2 = mysqli_query($co, $consultar) or die('No consulta');

        header("Location:donativoa.php?numerobol=" . $usuario . "");
    } else {
        echo "contraseña o boleta invalida";
    }
}

?>
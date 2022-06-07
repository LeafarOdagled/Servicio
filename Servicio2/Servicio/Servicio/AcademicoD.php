<?php
$usuario = $_POST['boleta'];
$pass = $_POST['password'];

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
$ass4 = $_POST['ass4'];
$ass5 = $_POST['ass5'];

$PA = $_POST['PrograAcademico'];

$Dmeca = $_POST['Dmeca'];
$Dsiste = $_POST['Dsiste'];
$Dali = $_POST['Dali'];
$Dmetal = $_POST['Dmetal'];
$Dambient = $_POST['Dambient'];




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


        $directorio = "PdfAcademico/";
        $archivo = $directorio . basename($_FILES["archivoA"]["name"]);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));


        $_SESSION['Usuario'] = $usuario;
        $nombreu = $row['Nombre'] . ' ' . $row['APaterno'] . ' ' . $row['AMaterno'];

        
        if($PA==1)
        {
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
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {//solo un integrante
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA) VALUES
                                                        ('" . $Dmeca . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }else //si entra aqui es un integante y dos asesores
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmeca . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }
                                                }else//si entra aqui es un integrante y 3 asesores  
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmeca . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmeca . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }

                                    
                                    }else //dos integrantes
                                    {
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }
                                                }else//
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }
                                    }
                                } else//3 integrantes
                                {
                                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                    {
                                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                                        {
                                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                            {
                                                if ($ass2 == '') //
                                                {//un assesor
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }else //
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }
                                            }else//
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }
                            } else //4 integrantes
                            {
                                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                {
                                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                                    {
                                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                        {
                                            if ($ass2 == '') //
                                            {//un assesor
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }else //
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else//
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }
                        } else//5 integrantes
                        {
                            if ($ass5 == "")//si entra aqui no hay nada en asesor5
                            {
                                if($ass4 == "")//si entra aqui no hay nada en asesor4
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //
                                        {//un assesor
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }else //
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else//
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }
                    } else//6 integrantes
                    {
                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                        {
                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //
                                    {//un assesor
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }else //
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else//
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                        }
                    }
                } else//7 integrantes
                {
                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                    {
                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //
                                {//un assesor
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }else //
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else//
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }
            } else//8 integrantes
            {

                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                {
                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //
                            {//un assesor
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }else //
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else//
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }else
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                    ('" . $Dmeca . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                }
            }
        }
        else if($PA==2)
        {
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
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {//solo un integrante
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dsiste . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }else //si entra aqui es un integante y dos asesores
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dsiste . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//si entra aqui es un integrante y 3 asesores  
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dsiste . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }

                                    
                                    }else //dos integrantes
                                    {
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }
                                                }else//
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }
                                } else//3 integrantes
                                {
                                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                    {
                                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                                        {
                                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                            {
                                                if ($ass2 == '') //
                                                {//un assesor
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }else //
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }
                                            }else//
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }
                            } else //4 integrantes
                            {
                                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                {
                                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                                    {
                                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                        {
                                            if ($ass2 == '') //
                                            {//un assesor
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }else //
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else//
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }
                        } else//5 integrantes
                        {
                            if ($ass5 == "")//si entra aqui no hay nada en asesor5
                            {
                                if($ass4 == "")//si entra aqui no hay nada en asesor4
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //
                                        {//un assesor
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }else //
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }
                                    }else//
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }
                    } else//6 integrantes
                    {
                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                        {
                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //
                                    {//un assesor
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }else //
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else//
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                        }
                    }
                } else//7 integrantes
                {
                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                    {
                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //
                                {//un assesor
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }else //
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else//
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }
            } else//8 integrantes
            {

                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                {
                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //
                            {//un assesor
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }else //
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else//
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                    }
                }else
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                    ('" . $Dsiste . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                }
            }
        }
        else if($PA==3)
        {
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
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {//solo un integrante
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dali . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //si entra aqui es un integante y dos asesores
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dali . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//si entra aqui es un integrante y 3 asesores  
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dali . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dali . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }

                                    
                                    }else //dos integrantes
                                    {
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }
                                    }
                                } else//3 integrantes
                                {
                                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                    {
                                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                                        {
                                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                            {
                                                if ($ass2 == '') //
                                                {//un assesor
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }else //
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }
                                            }else//
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }
                            } else //4 integrantes
                            {
                                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                {
                                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                                    {
                                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                        {
                                            if ($ass2 == '') //
                                            {//un assesor
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }else //
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else//
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }
                        } else//5 integrantes
                        {
                            if ($ass5 == "")//si entra aqui no hay nada en asesor5
                            {
                                if($ass4 == "")//si entra aqui no hay nada en asesor4
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //
                                        {//un assesor
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }else //
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else//
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }
                    } else//6 integrantes
                    {
                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                        {
                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //
                                    {//un assesor
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }else //
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else//
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }
                } else//7 integrantes
                {
                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                    {
                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //
                                {//un assesor
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }else //
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }else//
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }
            } else//8 integrantes
            {

                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                {
                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //
                            {//un assesor
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }else //
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "');";
                            }
                        }else//
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                        ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                    }
                }else
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                    ('" . $Dali . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                }
            }
        }
        else if($PA==4)
        {
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
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {//solo un integrante
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //si entra aqui es un integante y dos asesores
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//si entra aqui es un integrante y 3 asesores  
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }

                                    
                                    }else //dos integrantes
                                    {
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                    }else //
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }
                                } else//3 integrantes
                                {
                                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                    {
                                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                                        {
                                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                            {
                                                if ($ass2 == '') //
                                                {//un assesor
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                                }else //
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else//
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }
                            } else //4 integrantes
                            {
                                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                {
                                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                                    {
                                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                        {
                                            if ($ass2 == '') //
                                            {//un assesor
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }else //
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                            }
                                        }else//
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }
                        } else//5 integrantes
                        {
                            if ($ass5 == "")//si entra aqui no hay nada en asesor5
                            {
                                if($ass4 == "")//si entra aqui no hay nada en asesor4
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //
                                        {//un assesor
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }else //
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else//
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }
                    } else//6 integrantes
                    {
                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                        {
                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //
                                    {//un assesor
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }else //
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else//
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }
                } else//7 integrantes
                {
                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                    {
                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //
                                {//un assesor
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }else //
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else//
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }
            } else//8 integrantes
            {

                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                {
                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //
                            {//un assesor
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }else //
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else//
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                    }
                }else
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                    ('" . $Dmetal . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                }
            }
        }
        else if($PA==5)
        {
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
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {//solo un integrante
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //si entra aqui solo hay un assesor y solo un integrante
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dambient . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //si entra aqui es un integante y dos asesores
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dambient . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//si entra aqui es un integrante y 3 asesores  
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dambient . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dambient . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }

                                    
                                    }else //dos integrantes
                                    {
                                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                        {
                                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                                            {
                                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                                {
                                                    if ($ass2 == '') //
                                                    {//un assesor
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }else //
                                                    {
                                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                    }
                                                }else//
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }
                                } else//3 integrantes
                                {
                                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                    {
                                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                                        {
                                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                            {
                                                if ($ass2 == '') //
                                                {//un assesor
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }else //
                                                {
                                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                                }
                                            }else//
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }
                            } else //4 integrantes
                            {
                                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                                {
                                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                                    {
                                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                        {
                                            if ($ass2 == '') //
                                            {//un assesor
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }else //
                                            {
                                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                            }
                                        }else//
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                        }
                                    }else
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }
                        } else//5 integrantes
                        {
                            if ($ass5 == "")//si entra aqui no hay nada en asesor5
                            {
                                if($ass4 == "")//si entra aqui no hay nada en asesor4
                                {
                                    if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                    {
                                        if ($ass2 == '') //
                                        {//un assesor
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }else //
                                        {
                                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                        }
                                    }else//
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }
                                }else
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }
                    } else//6 integrantes
                    {
                        if ($ass5 == "")//si entra aqui no hay nada en asesor5
                        {
                            if($ass4 == "")//si entra aqui no hay nada en asesor4
                            {
                                if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                                {
                                    if ($ass2 == '') //
                                    {//un assesor
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                    }else //
                                    {
                                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                    }
                                }else//
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                                }
                            }else
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $nulo . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }
                } else//7 integrantes
                {
                    if ($ass5 == "")//si entra aqui no hay nada en asesor5
                    {
                        if($ass4 == "")//si entra aqui no hay nada en asesor4
                        {
                            if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                            {
                                if ($ass2 == '') //
                                {//un assesor
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }else //
                                {
                                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                                }
                            }else//
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $nulo . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }
            } else//8 integrantes
            {

                if ($ass5 == "")//si entra aqui no hay nada en asesor5
                {
                    if($ass4 == "")//si entra aqui no hay nada en asesor4
                    {
                        if ($ass3 == '') //si entra aqui no hay nada en asesor3 
                        {
                            if ($ass2 == '') //
                            {//un assesor
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                            }else //
                            {
                                $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                                ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $nulo . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                            }
                        }else//
                        {
                            $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                            ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $nulo . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                        }
                    }else
                    {
                        $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado, ArchivoA ) VALUES
                        ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $nulo . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "' , '" . $archivo . "');";
                    }
                }else
                {
                    $consultar = "INSERT INTO donativoa (tipo, integrante, integrante2, integrante3, integrante4, integrante5, integrante6, integrante7, integrante8, asesor1, asesor2, asesor3, asesor4, asesor5, id_usuario, fechaExpide, fechaAceptado , ArchivoA) VALUES
                    ('" . $Dambient . "','" . $nombreu . "','" . $i1 . "', '" . $i2 . "', '" . $i3 . "', '" . $i4 . "', '" . $i5 . "', '" . $i6 . "', '" . $i7 . "', '" . $ass1 . "', '" . $ass2 . "', '" . $ass3 . "', '" . $ass4 . "', '" . $ass5 . "', '" . $row['id_usuario'] . "', '" . $fechaExpide . "', '" . $fechaAcepta . "', '" . $archivo . "' );";
                }
            }
        }


        

        $result2 = mysqli_query($co, $consultar) or die('No consulta');

        header("Location:donativoa.php?numerobol=" . $usuario . "");

        $size = $_FILES["archivoA"]["size"];

        if($size > 500000){
            echo "El archivo tiene que ser menor a 500kb";
        }else{
    
    
    
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["archivoA"]["tmp_name"], $archivo)){
                    echo "El archivo se subió correctamente";
    
    
                }else{
                    echo "Hubo un error en la subida del archivo";
                }
    
        }

    } else {
        echo "contraseña o boleta invalida";
    }
}




?>
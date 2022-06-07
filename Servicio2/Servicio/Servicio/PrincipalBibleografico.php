<!doctype html>
<?php
include 'conecta.php';
$UsuarioAdmin = $_GET["UsuarioAdmin"];
$co = mysqli_connect('localhost', 'root') or die('NO');
$db = mysqli_select_db($co, "servicio") or die('no bd');
$consulta = "SELECT * from usuarioad where Usuario='" . $UsuarioAdmin . "'";
$result = mysqli_query($co, $consulta) or die('No consulta');
$mostrar = mysqli_fetch_array($result);


?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Administracion</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            
            <div class="app-header__mobile-menu">

            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    
                    <ul class="header-menu nav">
                    <li class="nav-item">
                        <?php echo '<a href="principalAdmin.php?UsuarioAdmin='.$UsuarioAdmin.'" class="mm-active nav-link">
                                    <i class="nav-link-icon fa pe-7s-home"> </i>
                                    Home</a>' ?>
                        </li>
                        <li class="nav-item">
                        <?php echo '<a href="PrincipalNoAdeudo.php?UsuarioAdmin='.$UsuarioAdmin.'" class="mm-active nav-link">
                                    <i class="pe-7s-news-paper "> </i>
                                    Solicitud de no adeudo</a>' ?>
                        </li>
                        <li class="btn-group nav-item">
                        <?php echo '<a href="PrincipalAcademico.php?UsuarioAdmin='.$UsuarioAdmin.'" class="mm-active nav-link">
                                    <i class="pe-7s-news-paper "> </i>
                                    Donativo Academico</a>' ?>
                        </li>
                        <li class="dropdown nav-item">
                        <?php echo '<a href="PrincipalBibleografico.php?UsuarioAdmin='.$UsuarioAdmin.'" class="mm-active nav-link">
                                    <i class="pe-7s-notebook"> </i>
                                    Donativo bibleografico</a>' ?>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="index.html" type="button" tabindex="0" class="dropdown-item">Salir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php
                                        echo '' . $mostrar['Nombre'] . ' ' . $mostrar['ApellidoP'] . '';
                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php
                                        echo '' . $mostrar['Usuario'] . '';
                                        ?>
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>




            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            
                        </div>
                        <div class="page-title-actions">
                            
                            
                        </div>
                    </div>
                </div>

                

                

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Solicitudes de donativo
                                <div class="btn-actions-pane-right">

                                </div>
                            </div>

                            <div class="table-responsive" >
                                            <table class="mb-0 table" >
                                                <thead>
                                                <tr>
                                                    <th>Donador</th>
                                                    <th>Título</th>
                                                    <th>Autor</th>
                                                    <th>Estado</th>
                                                    <th>Detalles</th>
                                                    <th>Comentarios</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                 $donativob="SELECT * from donativo";
                                                 $resultdb= mysqli_query($co,$donativob) or die('No consulta');
                                                 while($mostrardb=mysqli_fetch_array($resultdb))
                                                {
                                                    $nombredb=$mostrardb['id_usuario'];
                                                    $iddb=$mostrardb['ID_DonB'];
                                                    $consunombredb="SELECT * from usuario where id_usuario='" . $nombredb . "'";
                                                    $resultnomdb= mysqli_query($co,$consunombredb) or die('No consulta');
                                                    $mostrarnombredb=mysqli_fetch_array($resultnomdb);
                                                    echo'<tr>
                                                        <td>'.$mostrarnombredb['Nombre'].' '.$mostrarnombredb['APaterno'].' '.$mostrarnombredb['AMaterno'].'</td>
                                                        <td>'.$mostrardb['Titulo'].'</td>
                                                        <td>'.$mostrardb['Autor'].'</td>
                                                        <td> <div class="badge badge-warning">
                                                            <div class="widget-heading">'.$mostrardb['estadoB'].'</div>
                                                            </div>
                                                        </td>
                                                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg'.$iddb.'">Detalles </button>
                                                            <div class="modal fade bd-example-modal-lg'.$iddb.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="table-responsive">
                                                                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col" class="text-center">Programa académico del donador</th>
                                                                                        <th scope="col" class="text-center">ISBN</th>
                                                                                        <th scope="col" class="text-center">año</th>
                                                                                        <th scope="col" class="text-center">Editorial</th>
                                                                                        <th scope="col" class="text-center">Fecha</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                            <td class="text-center">
                                                                                                <div>
                                                                                                    <div class="widget-heading">'.$mostrarnombredb['Programa'].'</div>

                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <div>
                                                                                                    <div class="widget-heading">'.$mostrardb['ISBN'].'</div>

                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                                <div>
                                                                                                    <div class="widget-heading">'.$mostrardb['anio'].'</div>

                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="text-center">
                                                                                            <div>
                                                                                                <div class="widget-heading">'.$mostrardb['editorial'].'</div>

                                                                                            </div>
                                                                                        </td>
                                                                                            <td class="text-center">
                                                                                                <div>
                                                                                                    <div class="widget-heading">'.$mostrardb['Fecha'].'</div>
                                                                                                </div>
                                                                                            </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-dismiss="modal" class="mt-2 btn btn-primary">Cerrar</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal'.$iddb.'">Comentarios</button>
                                                            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal'.$iddb.'">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Comentarios</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Comentarios </th>
                                                                                        <th> </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <form class="" method="POST" action="HacerComentariosB.php">
                                                                                <tbody>
                                                                                    <tr>

                                                                                        <td>
                                                                                            <p>escribe tu comentario</p>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="position-relative form-group"><label  class=""></label><input name="Comentario" type="texto" class="form-control"></div>
                                                                                            <input type="hidden" name="iddb" value="'.$iddb.'">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                            
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="mb-2 mr-2 btn-transition btn btn-outline-success">Escribir comentario</button>
                                                                                <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-dismiss="modal" class="mt-2 btn btn-primary">Cerrar</a>
                                                                                </form>
                                                                            </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="mb-2 mr-2 btn btn-success" data-toggle="modal" data-target="#modalAceptadoB'.$iddb.'">Aceptar</button>
                                                                <div class="modal fade" id="modalAceptadoB'.$iddb.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <form method="POST" action="AceptarDonativoB.php">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Aceptar solicitud</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p class="mb-0">¿Está seguro de que quiere aceptar la solicitud?</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <input type="hidden" name="iddb" value="'.$iddb.'">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                    <button class="btn btn-success" type="submit">Aceptar solicitud</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td>
                                                            <button class="mb-2 mr-2 btn btn-danger" data-toggle="modal" data-target="#modalRechazadoB'.$iddb.'">Denegar</button>
                                                                <div class="modal fade" id="modalRechazadoB'.$iddb.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <form method="POST" action="RechazarDonativoB.php">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Rechazar solicitud</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p class="mb-0">¿Está seguro de que quiere rechazar la solicitud?</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <input type="hidden" name="iddb" value="'.$iddb.'">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                    <button class="btn btn-danger" type="submit">Rechazar solicitud</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </td>
                                                        <td><a href="'.$mostrardb['ArchivoB'].'"class="mb-2 mr-2 btn btn-success">Descargar</a>
                                                         </td>
                                                    </tr>';
                                                    
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                            </div>
                            <div class="d-block text-center card-footer">
                                
                            </div>
                        </div>
                    </div>
                </div><!-- aqui termina la division de la seccion en donde van las tablas -->
                <!-- aqui termina la division de la seccion en donde van las tablas ##################################################################################-->

                <!--AQUI EMPIEZA LA OTRA TABLA  ########################################################################################################################-->

                


            </div>


            
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

</html>
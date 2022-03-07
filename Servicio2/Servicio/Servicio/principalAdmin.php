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
            <div class="app-header__logo">
                <!--<div class="logo-src"></div> -->
                <div class="header__pane ml-auto">

                </div>
            </div>
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
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
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

        <div class="app-main">




            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-box2 icon-gradient bg-amy-crisp">
                                </i>
                            </div>
                            <div>¡Hola de nuevo!
                                <div class="page-title-subheading"> Bienvenido al sistema de biblioteca
                                </div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                <i class="fa fa-star"></i>
                            </button>
                            <div class="d-inline-block dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    Buttons
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon lnr-inbox"></i>
                                                <span>
                                                    Inbox
                                                </span>
                                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon lnr-book"></i>
                                                <span>
                                                    Book
                                                </span>
                                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <i class="nav-link-icon lnr-picture"></i>
                                                <span>
                                                    Picture
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                <i class="nav-link-icon lnr-file-empty"></i>
                                                <span>
                                                    File Disabled
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <!-- <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Orders</div>
                                            <div class="widget-subheading">Last year expenses</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>1896</span></div>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Clients</div>
                                            <div class="widget-subheading">Total Clients Profit</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$ 568</span></div>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <!-- <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Followers</div>
                                            <div class="widget-subheading">People Interested</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>46%</span></div>
                                        </div>
                                    </div>
                                </div> -->
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Solicitudes pendientes de constancia de no adeudo
                                <div class="btn-actions-pane-right">

                                </div>
                            </div>
                            <div class="table-responsive">
                                <?php $conexion = mysqli_connect('localhost', 'root', '', 'servicio'); ?>

                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center"> </th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col" class="text-center">solicitud</th>

                                            <th scope="col" class="text-center">Estado</th>
                                            <th scope="col" class="text-center">Detalles</th>
                                            <th scope="col" class="text-center">comentarios</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php while ($fila1 = $conectarTabla1->fetch_assoc()) { ?>



                                            <tr>
                                                <td class="text-center text-muted">
                                                    <p id="id-usuario"><?php echo $fila1['id_usuario']; ?></p></td><!--AQUI VA EL NUMERO DE ID DE LA PERSONA  -->
                                                <td>
                                                    <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <!--    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""><!--AQUI VA LA IMAGEN DE LA PERSONA -->
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $fila1['Nombre']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila1['APaterno']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila1['AMaterno']; ?></div>

                                                                <div class="widget-subheading opacity-7"><?php echo $fila1['Programa']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->


                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->
                                                    <div>
                                                        <!--<div class="widget-heading"><?php echo $fila1['nombreC']; ?></div>-->
                                                        <div class="widget-heading"><?php echo $fila1['nombreC']; ?></div>
                                                        <!--<div class="widget-heading"><?php echo $fila1['nombreB']; ?></div>-->
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <div class="badge badge-warning">
                                                            <div class="widget-heading"><?php echo $fila1['estadoC']; ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">detalles
                                                            <button onclick="myFunction()">Click me</button>

                                                            <p id="demo"></p>

                                                            <script>
                                                                function myFunction() {
                                                                    
                                                                    document.getElementById("demo").innerHTML = ""+ document.getElementById("id-usuario").outerHTML;
                                                                    
                                                                }
                                                            </script>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal">comentarios
                                                    </div>
                                                </td>


                                            </tr>

                                        <?php } ?>
                                        <!-- aqui inicia otra fila de la tabla -->


                                    </tbody>
                                </table>
                            </div>



                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div><!-- aqui termina la division de la seccion en donde van las tablas -->

                <!--AQUI EMPIEZA LA OTRA TABLA  ########################################################################################################################-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Solicitudes de donativo
                                <div class="btn-actions-pane-right">

                                </div>
                            </div>
                            <div class="table-responsive">


                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center"> </th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col" class="text-center">solicitud</th>

                                            <th scope="col" class="text-center">Estado</th>
                                            <th scope="col" class="text-center">Detalles</th>
                                            <th scope="col" class="text-center">comentarios</th>

                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php while ($fila2 = $conectarTabla2->fetch_assoc()) { ?>



                                            <tr>
                                                <td class="text-center text-muted"><?php echo $fila2['id_usuario']; ?></td>
                                                <!--AQUI VA EL NUMERO DE ID DE LA PERSONA  -->
                                                <td>
                                                    <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <!--    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""><!--AQUI VA LA IMAGEN DE LA PERSONA -->
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $fila2['Nombre']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila2['APaterno']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila2['AMaterno']; ?></div>

                                                                <div class="widget-subheading opacity-7"><?php echo $fila2['Programa']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->


                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->
                                                    <div>

                                                        <div class="widget-heading"><?php echo $fila2['nombreB']; ?></div>

                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <div class="badge badge-warning">
                                                            <div class="widget-heading"><?php echo $fila2['estadoB']; ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">detalles
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal">comentarios
                                                    </div>
                                                </td>


                                            </tr>

                                        <?php } ?>
                                        <!-- aqui inicia otra fila de la tabla -->


                                    </tbody>
                                </table>
                            </div>



                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div><!-- aqui termina la division de la seccion en donde van las tablas -->
                <!-- aqui termina la division de la seccion en donde van las tablas ##################################################################################-->

                <!--AQUI EMPIEZA LA OTRA TABLA  ########################################################################################################################-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Solicitudes Bilbleograficos
                                <div class="btn-actions-pane-right">

                                </div>
                            </div>
                            <div class="table-responsive">


                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center"> </th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col" class="text-center">solicitud</th>

                                            <th scope="col" class="text-center">Estado</th>
                                            <th scope="col" class="text-center">Detalles</th>
                                            <th scope="col" class="text-center">comentarios</th>

                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php while ($fila3 = $conectarTabla3->fetch_assoc()) { ?>



                                            <tr>
                                                <td class="text-center text-muted"><?php echo $fila3['id_usuario']; ?></td>
                                                <!--AQUI VA EL NUMERO DE ID DE LA PERSONA  -->
                                                <td>
                                                    <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <!--    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""><!--AQUI VA LA IMAGEN DE LA PERSONA -->
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $fila3['Nombre']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila3['APaterno']; ?></div>
                                                                <div class="widget-heading"><?php echo $fila3['AMaterno']; ?></div>

                                                                <div class="widget-subheading opacity-7"><?php echo $fila3['Programa']; ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARA EL NOMBRE JUNTO CON SUS IMAGENES Y CARRERA-->


                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->
                                                    <div>

                                                        <div class="widget-heading"><?php echo $fila3['nombreA']; ?></div>

                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DE LA FILA EN DONDE DEBEN DE IR LAS SOLICITUDES-->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <div class="badge badge-warning">
                                                            <div class="widget-heading"><?php echo $fila3['estadoA']; ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">detalles
                                                    </div>
                                                </td>
                                                <!--TODO ESTO ES PARTE DEL ESTADO DE LAS SOLICITUDES -->

                                                <td class="text-center">
                                                    <div>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal">comentarios
                                                        </button>
                                                    </div>
                                                </td>


                                            </tr>

                                        <?php } ?>
                                        <!-- aqui inicia otra fila de la tabla -->


                                    </tbody>
                                </table>
                            </div>



                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div><!-- aqui termina la division de la seccion en donde van las tablas -->
                <!-- aqui termina la division de la seccion en donde van las tablas ##################################################################################-->


            </div>


            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Programa academico</th>
                            <th scope="col" class="text-center">Solicitud</th>
                            <th scope="col" class="text-center">Fecha de solicitud</th>
                            <th scope="col" class="text-center">Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php while ($row = $conectarTablaDetalles->fetch_assoc()) { ?>
                                <td class="text-center text-muted">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading"><?php echo $row['Nombre']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!--TODO ESTO ES PARA EL NOMBRE -->
                                <td class="text-center">
                                    <div>
                                        <div class="widget-heading"><?php echo $row['Programa']; ?></div>

                                    </div>
                                </td>
                                <td clas="text-center">
                                    <div>
                                        <div class="widget-heading"><?php echo $row['nombreC']; ?></div>
                                        <div class="widget-heading"><?php echo $row['nombreB']; ?></div>
                                        <div class="widget-heading"><?php echo $row['nombreA']; ?></div>

                                    </div>
                                </td>
                                <td clas="text-center">
                                    <div>
                                        <div class="widget-heading"><?php echo $row['FechaExpide']; ?></div>
                                        <div class="widget-heading"><?php echo $row['Fecha']; ?></div>
                                        <div class="widget-heading"><?php echo $row['fechaExpide']; ?></div>

                                    </div>
                                </td>
                                <td clas="text-center">
                                    <div>
                                        <div class="widget-heading"><?php echo $row['Correo']; ?></div>
                                    </div>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Comentario modal -->

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">comentarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Comentarios realizados</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <p>poner aqui los comentarios</p>
                            </td>
                            <td>
                            <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-dismiss="modal" data-target="#modalComent">Hacer comentario</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="modal-footer">
                <!--<button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-dismiss="modal" data-target=".bd-example-modal-lg">Comentarios realizados</button></a>-->

                <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-dismiss="modal" class="mt-2 btn btn-primary">Cerrar</a>
            </div>

        </div>
    </div>

</div>
<!--  Hacer Comentario modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modalComent">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hacer comentarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" method="POST" action="constancia.php">
                    <div>
                        <!--<input class="controls" type="text" name="coment" id="comment" rows="10" cols="40" placeholder="comentario">-->
                        <textarea type="text" name="coment" id="comment" rows="10" cols="40" placeholder="Escribir comentario"></textarea>
                    <div>
                        <button type="submit" class="mb-2 mr-2 btn-transition btn btn-outline-success">Solicitar</button>
                    </div>
                    </div>
                    
                </form>
            </div>

            <div class="modal-footer">
                <!--<button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-dismiss="modal" data-target=".bd-example-modal-lg">Comentarios realizados</button></a>-->

                <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-dismiss="modal" class="mt-2 btn btn-primary">Cerrar</a>
            </div>

        </div>
    </div>

</div>


</html>
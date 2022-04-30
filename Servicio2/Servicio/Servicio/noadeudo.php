<!doctype html>
<?php
$numbol = $_GET["numerobol"];
$co = mysqli_connect('localhost', 'root') or die('NO');
$db = mysqli_select_db($co, "servicio") or die('no bd');
$consulta = "SELECT * from usuario where Boleta='" . $numbol . "'";
$result = mysqli_query($co, $consulta) or die('No consulta');
$mostrar = mysqli_fetch_array($result);
?>
<html lang="en">

<head>
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
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
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
                            <?php echo '<a href="principal.php?numerobol=' . $numbol . '" class="mm-active nav-link">
                                    <i class="nav-link-icon fa pe-7s-home"> </i>
                                    Home</a>' ?>
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
                                            <?php echo '<a href="principalUsuario.php?numerobol=' . $numbol . '" class="mm-active dropdown-item">
                                            Cuenta de usuario</a>' ?>
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
                                        echo '' . $mostrar['Nombre'] . ' ' . $mostrar['APaterno'] . '';
                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php
                                        echo '' . $mostrar['Boleta'] . '';
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
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
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
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Biblioteca</li>
                            <li>
                                <?php echo '<a href="noadeudo.php?numerobol=' . $numbol . '" class="mm-active">
                                        <i class="metismenu-icon pe-7s-delete-user"></i>
                                        Constancia de no adeudo</a>' ?>
                            </li>

                            <li>
                                <?php echo '<a href="donativob.php?numerobol=' . $numbol . '" class="mm-active">
                                    <i class="metismenu-icon pe-7s-notebook"></i>
                                    Donativo Bibliográfico</a>' ?>


                            </li>
                            <li>
                                <?php echo '<a href="donativoa.php?numerobol=' . $numbol . '" class="mm-active">
                                    <i class="metismenu-icon pe-7s-study"></i>
                                    Donativo Académico</a>' ?>
                            </li>
                            <li class="app-sidebar__heading">Red de Género</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            Buttons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                            </i>Dropdowns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                            </i>Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon">
                                            </i>Badges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-cards.html">
                                            <i class="metismenu-icon">
                                            </i>Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-list-group.html">
                                            <i class="metismenu-icon">
                                            </i>List Groups
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-navigation.html">
                                            <i class="metismenu-icon">
                                            </i>Navigation Menus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-utilities.html">
                                            <i class="metismenu-icon">
                                            </i>Utilities
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    Components
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="components-tabs.html">
                                            <i class="metismenu-icon">
                                            </i>Tabs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-notifications.html">
                                            <i class="metismenu-icon">
                                            </i>Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-modals.html">
                                            <i class="metismenu-icon">
                                            </i>Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-progress-bar.html">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-carousel.html">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-calendar.html">
                                            <i class="metismenu-icon">
                                            </i>Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-pagination.html">
                                            <i class="metismenu-icon">
                                            </i>Pagination
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-scrollable-elements.html">
                                            <i class="metismenu-icon">
                                            </i>Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-maps.html">
                                            <i class="metismenu-icon">
                                            </i>Maps
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tables-regular.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tables
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Widgets</li>
                            <li>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Dashboard Boxes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Forms</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Forms Controls
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Forms Layouts
                                </a>
                            </li>
                            <li>
                                <a href="forms-validation.html">
                                    <i class="metismenu-icon pe-7s-pendrive">
                                    </i>Forms Validation
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Charts</li>
                            <li>
                                <a href="charts-chartjs.html">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>ChartJS
                                </a>
                            </li>
                            <li class="app-sidebar__heading">PRO Version</li>
                            <li>
                                <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>
                                    Upgrade to PRO
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
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
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="no-gutters row">
                            <div class="col-md-4">
                                <div class="widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-right ml-0 mr-3">
                                            <i class="pe-7s-note2"> </i>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Solicitud de constancia de no adeudos</div>
                                            <div class="widget-subheading">¿Desea solocitar una constancia?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="widget-content">
                                    <div class="widget-content-wrapper">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-right ml-0 mr-3">

                                        </div>
                                        <div class="widget-content-left">
                                            <button class="mb-2 mr-2 btn-transition btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-sm">Solicitar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Solicitudes pendientes de constancia de no adeudo
                                
                            </div>
                            <div class="table-responsive" >
                                            <table class="mb-0 table" >
                                                <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Constancia</th>
                                                    <th>Estado</th>
                                                    <th>Comentarios</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                
                                                 $constancia="SELECT * from constancia where id_usuario='".$mostrar['id_usuario']."'";
                                                 $resultcon= mysqli_query($co,$constancia) or die('No consulta');
                                                 while($mostrarconstancia=mysqli_fetch_array($resultcon))
                                                {
                                                    $nombre=$mostrarconstancia['id_usuario'];
                                                    $idconstancia=$mostrarconstancia['id_constancia'];
                                                    $consunombre="SELECT * from usuario where id_usuario='" . $nombre . "'";
                                                    $resultnom= mysqli_query($co,$consunombre) or die('No consulta');
                                                    $mostrarnombre=mysqli_fetch_array($resultnom);
                                                    echo'<tr>
                                                        <td>'.$mostrarnombre['Nombre'].' '.$mostrarnombre['APaterno'].' '.$mostrarnombre['AMaterno'].'</td>
                                                        <td> Constancia de no adeudos </td>
                                                        <td> <div class="badge badge-warning">
                                                            <div class="widget-heading">'.$mostrarconstancia['estadoC'].'</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        '.$mostrarconstancia['ComentarioC'].'
                                                        </td>';
                                                        

                                                        if ($mostrarconstancia['estadoC']=="Aceptado")
                                                        {
                                                            echo'<form class="" method="POST" action="ExpideConstancia.php">';
                                                            echo'<td><button class="mb-2 mr-2 btn btn-success">Descargar
                                                            </button></td>';
                                                            echo'
                                                            <input type="hidden" name="idconstancia" value="'.$idconstancia.'">
                                                            <input type="hidden" name="Programa" value="'.$mostrarnombre['Programa'].'">
                                                            <input type="hidden" name="Nombre" value="'.$mostrarnombre['Nombre'].'">
                                                            <input type="hidden" name="APaterno" value="'.$mostrarnombre['APaterno'].'">
                                                            <input type="hidden" name="AMaterno" value="'.$mostrarnombre['AMaterno'].'">
                                                            <input type="hidden" name="sexo" value="'.$mostrarnombre['Sexo'].'">
                                                            <input type="hidden" name="fechae" value="'.$mostrarconstancia['FechaExpide'].'">
                                                            <input type="hidden" name="fechaa" value="'.$mostrarconstancia['FechaAcepta'].'">
                                                            
                                                            
                                                            ';


                                                            echo' </form>';

                                                        }
                                                        else
                                                        {
                                                            echo'<td> </td>';
                                                        }
 
                                                        
                                                    '</tr>';    
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

                <!--AQUI EMPIEZA LA OTRA TABLA  ########################################################################################################################-->


                    <div class="app-wrapper-footer">

                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Constancia de no adeudos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" method="POST" action="constancia.php">
                <div class="modal-body">
                    <p>Reingrese su usuario y contraseña</p>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Boleta</label><input name="boleta" type="texto" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="examplePassword11" class="">Contraseña</label><input name="password" id="examplePassword11" type="password" class="form-control"></div>
                        </div>
                    </div>
                </div>



                <div class="modal-footer">

                    <button type="submit" class="mb-2 mr-2 btn-transition btn btn-outline-success">Solicitar</button>
                    <button type="button" class="mb-2 mr-2 btn-transition btn btn-outline-danger" data-dismiss="modal" class="mt-2 btn btn-primary">Cerrar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
}
else{
  header('Location: ../../');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Regularizaci&oacute;n IPN Administraci&oacute;n</title>
    <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas, curso, cálculo, física, ecuaciones diferenciales, Instituto Politécnico Nacional"/>
    <meta name="description" content="Regularización IPN">
    <meta name="author" content="GeanWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/admin/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-branding">
            <a class="navbar-brand" href="#">
                <b>Regularización IPN</b>
            </a>
            <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown menu-merge">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name>Administrador</name> </span>
                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="../../assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                    <li class="dropdown-footer text-center">
                        <a href="../../c/cerrarSesion.php" class="btn btn-primary btn-sm btn-bordered">
                            <span class="fa fa-power-off pr5"></span> Cerrar sesi&oacute;n </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
  
    <aside id="sidebar_left" class="nano nano-light affix">
        <div class="sidebar-left-content nano-content">
            <header class="sidebar-header"></header>
            <?php include("../menu.php"); ?>
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
        </div>
    </aside>

    <section id="content_wrapper">
        <!-- Begin: Content -->
          <br>
          <h5 class="text-center mt10 mb25 fw400">Listado de asistencia <strong class="orange">$nombre del grupo</strong></h5>
          <!-- End: Content -->
          <div class="scroll table-responsive table-bordered">
            <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-light">
                  <th class="col-bg-3 col-md-3 col-xs-3 col-sm-3 orange">Nombre del alumno</td>
                  <th class="tcenter">Clase 1<br>12/03/2016</th>
                  <th class="tcenter">Clase 2<br>13/03/2016</th>
                  <th class="tcenter">Clase 3<br>14/03/2016</th>
                  <th class="tcenter">Clase 4<br>15/03/2016</th>
                  <th class="tcenter">Clase 5<br>16/03/2016</th>
                  <th class="tcenter">Clase 6<br>17/03/2016</th>
                  <th class="tcenter">Clase 7<br>18/03/2016</th>
                  <th class="tcenter">Clase 8<br>19/03/2016</th>
                  <th class="tcenter">Clase 9<br>20/03/2016</th>
                  <th class="tcenter">Clase 10<br>21/03/2016</th>
                  <th class="tcenter">Clase 11<br>22/03/2016</th>
                  <th class="tcenter">Clase 12<br>23/03/2016</th>
                  <th class="tcenter">Clase 13<br>23/03/2016</th>
                  <th class="tcenter">Clase 14<br>23/03/2016</th>
                  <th class="tcenter">Clase 15<br>23/03/2016</th>
                  <th class="tcenter">Clase 16<br>23/03/2016</th>
                  <th class="tcenter">Clase 17<br>23/03/2016</th>
                  <th class="tcenter">Clase 18<br>23/03/2016</th>
                  <th class="tcenter">Clase 19<br>23/03/2016</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Rodrigo Campos Colin</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
                <tr>
                  <td><a href="#datosUsuario" data-toggle="modal" class="orange">Jose Perez Leon</a></td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                  <td class="tcenter">
                    <input type="checkbox" name="checked" value="checked">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
    </section>
    <!-- End: Content-Wrapper -->

    <div id="datosUsuario"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="datosUsuario">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h5 class="modal-title" id="exampleModalLabel">Datos del usuario</h5>
            </div>
            <div class="modal-body">
              <p><strong class="orange">Datos personales</strong></p>
              <br>
              <p><strong>Nombre: </strong> Jose Perez</p>
              <p><strong>Tel&eacute;fono:</strong> 49045304</p>
              <p><strong>Celular:</strong> 55 49045304</p>
              <p><strong>Email:</strong> email@test.com</p>
              <p><strong>Direcci&oacute;n:</strong> C. Benito Juarez entre avenida siempre viva, Mz. 26, Lt. 5, Col. Lazaro Cardenas, Estado de Mex; M&eacute;xico</p>
              <p><strong>Cantidad registrada:</strong>$ 800</p>
              <p><strong>Adeudo:</strong>$ 0</p>
              <p class="orangep"><strong>Asistencia:</strong> 10</p>
              <br>
              <p><strong class="orange">Servicios registrados</strong></p>
              <ul>
                <li>Grupo C&aacute;lculo Integral y diferencial</li>
              </ul>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>


</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
  <style>

  .scroll{
    width: 100%;
    height: 100%;
    overflow: scroll;
    padding: 15px;
  }
  </style>

  <!-- jQuery -->
  <script src="../../assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="../../assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- jQuery Validate Plugin-->
  <script src="../../assets/admin/forms/js/jquery.validate.min.js"></script>

  <!-- HighCharts Plugin -->
  <script src="../../assets/js/plugins/highcharts/highcharts.js"></script>

  <!-- jQuery Validate Addon -->
  <script src="../../assets/admin/forms/js/additional-methods.min.js"></script>

  <!-- Theme Javascript -->
  <script src="../../assets/js/utility/utility.js"></script>
  <script src="../../assets/js/demo/demo.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/demo/widgets_sidebar.js"></script>
  <script src="../../assets/js/pages/forms-validation.js"></script>

</body>

</html>

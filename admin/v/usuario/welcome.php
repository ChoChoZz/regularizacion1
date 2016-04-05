<?php 
session_start();
if(!isset($_SESSION['usuario'])){
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
          <div id="content" class="animated fadeIn">
              <hr>
              <h3 class="text-center orange mt10 mb25 fw400"><strong>Administraci&oacute;n de Regularizaci&oacute;n IPN</strong></h3>
              <hr>
              <h3 class="text-center mt10 mb25 fw400">Bienvenido <strong class="orangep"><?php echo $_SESSION['usuario']; ?></strong></h3>
              <br>
              <div class="row">
                  <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-system">
                              <div class="panel-heading">
                                  <span class="panel-title">¿Hoy en que trabajaras?</span>
                              </div>
                              <div class="panel-body">
                                  <img src="../../assets/img/working.gif" class="img-responsive">
                                  <p class="justify">Solo da clic en la funcionalidad que desees y comienza a trabajar</p>
                                  <p class="justify">Cualquier duda o aclaraci&oacute;n no dudes en mandarnos un mensaje a <a href="https://www.facebook.com/GeanWeb-888418104506663/" class="btn btn-xs ladda-button btn-dark " data-style="expand-right" target="_blank">GeanWeb</a></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-warning">
                              <div class="panel-heading">
                                  <span class="panel-title">Usuarios</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-warning dark p3 ph5">Panel de usuarios</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <a href="./createUser.php" class="btn btn-xs btn-info btn-block">Registrar usuario</a>
                                <a href="./viewUser.php" class="btn btn-xs btn-system btn-block">Consultar usuario</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-success">
                              <div class="panel-heading">
                                  <span class="panel-title">Grupos</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-success dark p3 ph5">Panel de grupos</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <a href="../grupo/createGroup.php" class="btn btn-xs btn-info btn-block">Registrar grupo</a>
                                <a href="../grupo/employability.php" class="btn btn-xs btn-system btn-block">Consultar grupo</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-danger">
                              <div class="panel-heading">
                                  <span class="panel-title">Pagos</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-danger dark p3 ph5">Panel de pagos</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <a href="../pagos/paymentRecord.php" class="btn btn-xs btn-info btn-block">Registrar pago</a>
                                  <a href="../pagos/paymentCheck.php" class="btn btn-xs btn-system btn-block">Consultar pago</a>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-dark">
                              <div class="panel-heading">
                                  <span class="panel-title">Cursos</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-dark dark p3 ph5">Panel de cursos</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <a href="../curso/createCourse.php" class="btn btn-xs btn-info btn-block">Registrar curso</a>
                                  <a href="../curso/viewCourse.php" class="btn btn-xs btn-system btn-block">Consultar curso</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                      <div>
                          <div class="panel panel-alert">
                              <div class="panel-heading">
                                  <span class="panel-title">Panel de sucursales</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-alert dark p3 ph5">Panel de sucursales</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <a href="../sucursal/createBuilding.php" class="btn btn-xs btn-info btn-block">Registrar sucursal</a>
                                  <a href="../sucursal/viewBuilding.php" class="btn btn-xs btn-system btn-block">Consultar sucursal</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                      <div>
                          <div class="panel">
                              <div class="panel-heading">
                                  <span class="panel-title">Plantillas</span>

                                  <div class="widget-menu">
                                      <code class="mr10 bg-light dark p3 ph5">Panel de plantillas</code>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <button type="button" class="btn disabled btn-warning btn-block">En construcci&oacute;n</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->


</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
  <style>
  /* demo page styles */
  body { min-height: 2300px; }
  
  .content-header b,
  .admin-form .panel.heading-border:before,
  .admin-form .panel .heading-border:before {
    transition: all 0.7s ease;
  }
  /* responsive demo styles */
  @media (max-width: 800px) {
    .admin-form .panel-body { padding: 18px 12px; }
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

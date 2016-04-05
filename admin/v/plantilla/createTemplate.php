<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Meta, title, CSS, favicons, etc. -->
    
    <title>Regularizaci&oacute;n IPN Administracion</title>
    <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas"/>
    <meta name="description" content="Regularización IPN">
    <meta name="author" content="GeanWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Icomoon CSS(font) -->
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/c3charts/c3.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/admin/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">

    <!-- Summernote CSS  -->
    <link rel="stylesheet" type="text/css" href="../../assets/js/plugins/summernote/summernote.css">

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
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">

            <!-- Start: Sidebar Header -->
            <header class="sidebar-header">

                

            </header>
            <!-- End: Sidebar Header -->

            <!-- Start: Sidebar Menu -->
            <?php include("../menu.php"); ?>
            <!-- End: Sidebar Menu -->

            <!-- Start: Sidebar Collapse Button -->
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
            <!-- End: Sidebar Collapse Button -->

        </div>
        <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        
        <!-- Start: Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="#">
                            Grupos
                        </a>
                    </li>
                    <li class="crumb-link">
                        Registrar grupo
                    </li>
                </ol>
            </div>
        </header>

        <section id="content" class="table-layout animated fadeIn">
            <div class="admin-form theme-primary tab-pane mw600 active" id="register" role="tabpanel">
                <div class="panel">
                  <!-- Plantilla -->
                    <h4 class="micro-header">Correo que se enviar&aacute;</h4>

                    <p>Da clic en el elemento que deseas ingresar al correo</p>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-hover btn-dark">Nombre del alumno</button>
                        <button type="button" class="btn btn-hover btn-success">Costo del grupo</button> 
                        <button type="button" class="btn btn-hover btn-info">Fecha de inicio del grupo</button> 
                        <button type="button" class="btn btn-hover btn-primary">Fecha de fin del grupo</button> 
                        <button type="button" class="btn btn-hover btn-danger">Fecha de inscripci&oacute;n</button> 
                        <button type="button" class="btn btn-hover btn-info">Insertar clases</button>
                    </div>
                    <br><br><br><br>
                    <div class="panel">
                        <div class="panel-body pn of-h" id="summer-demo">
                            <div class="summernote" style="height: 400px;">Hola 
                                <b>Regularizaci&oacute;n IPN</b> te da la bienvenida
                            </div>
                        </div>
                        <br><br><br>
                        <div class="section">
                            <div class="pull-left pt5"></div>
                            <button type="submit" class="btn btn-bordered btn-successs pull-right">Aceptar</button>
                        </div>
                        <br><br><br>
                    </div>

                </div>
            </div>

        </section>
        
    </section>
    
</div>
<!-- End: Main -->

<style>
  /* demo styles -summernote */
  .btn-toolbar > .btn-group.note-fontname {
    display: none;
  }
  /* demo styles - hides several ckeditor toolbar buttons */
  #cke_52,
  #cke_53 {
    display: none !important;
  }
  </style>

<!-- BEGIN: PAGE SCRIPTS -->

 <!-- jQuery -->
  <script src="../../assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="../../assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="../../assets/js/utility/utility.js"></script>
  <script src="../../assets/js/demo/demo.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/demo/widgets_sidebar.js"></script>
  <script src="../../assets/js/pages/forms-widgets.js"></script>

  <!-- Ckeditor JS -->
  <script src="../../assets/js/plugins/ckeditor/ckeditor.js"></script>

  <!-- Summernote Plugin -->
  <script src="../../assets/js/plugins/summernote/summernote.min.js"></script>

  <!-- MarkDown JS -->
  <script src="../../assets/js/plugins/markdown/markdown.js"></script>
  <script src="../../assets/js/plugins/markdown/to-markdown.js"></script>
  <script src="../../assets/js/plugins/markdown/bootstrap-markdown.js"></script>

  <!-- HighCharts Plugin -->
  <script src="../../assets/js/plugins/highcharts/highcharts.js"></script>

  <!-- X-Edit JS -->
  <script src="../../assets/js/plugins/moment/moment.min.js"></script>

  <script src="../../assets/js/pages/user-forms-editors.js"></script>

  <!-- AdminForms JS -->
  <script src="../../assets/admin/forms/js/jquery-ui-monthpicker.min.js"></script>
  <script src="../../assets/admin/forms/js/jquery-ui-datepicker.min.js"></script>
  <script src="../../assets/admin/forms/js/jquery.spectrum.min.js"></script>
  <script src="../../assets/admin/forms/js/jquery.stepper.min.js"></script>

  
</body>

</html>
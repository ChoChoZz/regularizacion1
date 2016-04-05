<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
}
else{
  header('Location: ../../');
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
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
                            Cursos
                        </a>
                    </li>
                    <li class="crumb-link">
                         Listado de cursos
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">

            <div class="admin-form theme-primary tab-pane mw600 active" id="register" role="tabpanel">
              <div class="panel">
                  <div class="panel-heading">
                    <span class="panel-title">
                      Cursos
                    </span>
                  </div>
                  <!-- end .form-header section -->
                  <br><br>
                  <div class="table-responsive">
                    <table class="table table-bordered table-responsive mbn">
                      <thead>
                      <tr class="warning">
                          <th class="tcenter">Nombre</th>
                          <th class="tcenter">Descripci&oacute;n</th>
                          <th class="tcenter">URL</th>
                          <th class="tcenter">Ver</th>
                          <th class="tcenter">Editar</th>
                          <th class="tcenter">Eliminar</th>
                      </tr>
                      </thead>
                      <tbody id="tablaCursos">
                      
                      </tbody>
                    </table>
                  </div>

              </div>
              <!-- end .admin-form section -->
          </div>
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->


    <!--Ventana modal para confirmar eliminar-->
    <div id="confirmacion"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">¿Está seguro que quiere eliminar el registro?</h4>
          </div>
          <div class="modal-body">
            <button type="button" class="btn btn-danger" onclick="eliminar();">Si</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <div id="errorEliminar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Error</h4>
            </div>
            <div class="modal-body">
              <label>Revisa que el curso no esté registrado en un grupo.</label>
            </div>
          </div>
        </div>
      </div>

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
<script>
  idEliminar = 0;
  function getCursos(){
    $.ajax({
      method: "POST",
      async: true,
      url: "../../c/getCursos.php",
      success: function(resp){
        var datos = resp.split("@");
        var id = datos[0].split("¬");
        var nombre = datos[1].split("¬");
        var descripcion = datos[2].split("¬");
        var url = datos[3].split("¬");
        var tabla = document.getElementById('tablaCursos');
        var str = "";

        for(i=0; i<id.length; i++){
          str += '<tr><td class="tcenter">'+nombre[i]+'</td><td class="tjustify">'+descripcion[i]+'</td><td class="tcenter"><a target="_blank" href="../../../'+url[i]+'">http://regularizacionipn.com/'+url[i]+'</a></td><td class="tcenter"><a href="../../c/verCurso.php?id='+id[i]+'" type="button" class="btn btn-system"><i class="fa fa-info"></i></a></td><td class="tcenter"><a href="../../c/editarCurso.php?id='+id[i]+'" type="button" class="btn btn-info"><i class="fa fa-pencil"></i></a></td><td class="tcenter"><button type="button" onclick="modalEliminar('+id[i]+');" class="btn btn-danger"><i class="fa fa-trash"></i></button></td></tr>';
        }
        tabla.innerHTML = str;
        if(id[0] == ''){
          tabla.innerHTML = '';
        }
      }
    });
  }

  function modalEliminar(id){
    idEliminar = id;
    $('#confirmacion').modal('show');
  }

  function eliminar(){
    $('#confirmacion').modal('hide');
    datos = {'id': idEliminar}
    $.ajax({
      method: 'POST',
      async: true,
      data: datos,
      url: "../../c/eliminarCurso.php",
      success: function(resp){
        if(resp){
          getCursos();
        }
        else{
          $('#errorEliminar').modal('show');
        }
      }
    });
  }

  getCursos();
</script>
</html>

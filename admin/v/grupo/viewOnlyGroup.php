<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
}
else{
  header('Location: ../../');
}

if($_SESSION['datosGrupo']){
  $idGrupo = $_SESSION['idGrupo'];
  $sucursal = $_SESSION['datosGrupo'][0];
  $curso = $_SESSION['datosGrupo'][1];
  $grupo = $_SESSION['datosGrupo'][2];
  $capacidad = $_SESSION['datosGrupo'][3];
  $costo = $_SESSION['datosGrupo'][4];
  $inscripcion = $_SESSION['datosGrupo'][5];
  $pagados = $_SESSION['datosGrupo'][6];
  $registrados = $_SESSION['datosGrupo'][7];
  $disponibles = $registrados - $pagados;
}
else{
  $sucursal =  null;
  $curso = null;
  $grupo = null;
  $capacidad = null;
  $costo = null;
  $inscripcion = null;
  $pagados = null;
  $registrados = null;
  $disponibles = null;
}

if($_SESSION['datosClase']){
  $clase = $_SESSION['datosClase'][0];
  $fecha = $_SESSION['datosClase'][1];
  $horaInicio = $_SESSION['datosClase'][2];
  $horaFin = $_SESSION['datosClase'][3];
}
else{
  $clase = null;
  $fecha = null;
  $horaInicio = null;
  $horaFin = null;
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
                            Grupos
                        </a>
                    </li>
                    <li class="crumb-link">
                         Informaci&oacute;n del grupo
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
                      Curso
                    </span>
                  </div>
                  <!-- end .form-header section -->
                  <br><br>
                  <div class="section row mb10">
                    <label for="location" class="field-label col-sm-1 ph10 "><strong>Sucursal: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="location" class="field-label col-sm-11 ph10 tleft"><?php echo $sucursal; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="location" class="field-label col-sm-1 ph10"><strong>Curso: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="location" class="field-label col-sm-11 ph10 tleft"><?php echo $curso; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Nombre: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $grupo; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Capacidad: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $capacidad; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Pagados: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $pagados; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Disponibles: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $disponibles; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Registrados: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $registrados; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Costo: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft">$<?php echo $costo; ?></label>
                    </div>
                  </div>

                  <div class="section row mb10">
                    <label for="store-name" class="field-label col-sm-1 ph10"><strong>Inscripci&oacute;n: </strong></label>

                    <div class="col-sm-10 ph10">
                        <label for="store-name" class="field-label col-sm-11 ph10 tleft"><?php echo $inscripcion; ?></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="panel-heading">
                    <span class="panel-title">
                      Horario del grupo
                    </span>
                  </div>

                  <br><br>

                  <div class="table-responsive">
                    <table class="table table-bordered table-responsive mbn">
                      <thead>
                      <tr class="alert">
                          <th class="tcenter">Clase</th>
                          <th class="tcenter">Fecha</th>
                          <th class="tcenter">Hora de inicio</th>
                          <th class="tcenter">Hora de fin</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php for($i=0; $i<count($clase); $i++){ ?>
                        <tr>
                            <td class="tcenter"><?php echo $clase[$i]; ?></td>
                            <td class="tcenter"><?php echo $fecha[$i]; ?></td>
                            <td class="tcenter"><?php echo $horaInicio[$i]; ?></td>
                            <td class="tcenter"><?php echo $horaFin[$i]; ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <div class="section row mb10">
                      <div class="pull-left pt5">
                          <button  class="btn btn-bordered btn-danger pull-right" onclick="modalEliminar(<?php echo $idGrupo; ?>)">Eliminar</button>
                      </div>
                      <a href="../../c/editarGrupo.php?id=<?php echo $idGrupo; ?>" class="btn btn-bordered btn-system pull-right">Editar</a>
                  </div>                  
              </div>
              <!-- end .admin-form section -->
            </div>
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

    <div id="confirmarEliminar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Confirmación</h4>
          </div>
          <div class="modal-body">
            <label>¿Deseas eliminar el registro?</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="eliminar();" data-dismiss="modal">Si</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div> 
        </div>
      </div>
    </div>

    <div id="eliminarCorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel"></h4>
          </div>
          <div class="modal-body">
            <label>El grupo se eliminó correctamente.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

    <div id="eliminarIncorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <label>El grupo no se eliminó correctamente.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
function modalEliminar(id){
  idEliminar = id;
  $('#confirmarEliminar').modal('show');
}

function eliminar(){
  $('#confirmarEliminar').modal('hide');
  var id = {"id": idEliminar};
  $.ajax({
    async: true,
    method: "POST",
    url: "../../c/eliminarGrupo.php",
    data: id,
    success: function(resp){
      if(resp == 1){
        window.location = "employability.php";
      }
      else{
        $('#eliminarIncorrecto').modal('show');
      }
    }
  });
}
</script>
</html>

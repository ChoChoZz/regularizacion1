<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
}
else{
  header('Location: ../../');
}

if(isset($_SESSION['usuario'])){
  $id = $_SESSION['idSucursal'];
  $nombre = $_SESSION['nombreSucursal'];
  $descripcion = $_SESSION['descripcionSucursal'];
  $telefonos = explode(" y ", $_SESSION['telefonosSucursal']);
  $direccion = $_SESSION['direccionSucursal'];
  $capacidad = $_SESSION['capacidadSucursales'];
  $croquis = $_SESSION['croquisSucursales'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Regularizaci&oacute;n IPN Administraci&oacute;n</title>
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
                            Sucusales
                        </a>
                    </li>
                    <li class="crumb-link">
                        Editar sucursal
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
                      Editar sucursal
                    </span>
                  </div>
                  <!-- end .form-header section -->

                  <form method="post" action="/" id="form-register">
                      <div class="panel-body pn">
                          <div class="section row">
                              <div class="col-md-12 ph10 mb5">
                                  <label for="name" class="field prepend-icon">
                                      <input type="text" name="name" id="name" class="gui-input" placeholder="Nombre (Sucursal Lindavista)" value="<?php echo $nombre; ?>">
                                      <label for="name" class="field-icon">
                                          <i class="fa fa-location-arrow"></i>
                                      </label>
                                  </label>
                              </div>
                              <!-- end section -->
                          </div>
                          <!-- end .section row section -->

                          <div class="section">
                            <label class="field prepend-icon">
                              <textarea class="gui-textarea" id="description" name="description"
                                        placeholder="Descripci&oacute;n del lugar"><?php echo $descripcion; ?></textarea>
                              <label for="description" class="field-icon">
                                <i class="fa fa-list"></i>
                              </label>
                            </label>
                          </div>
                          
                          <div class="section">
                              <label for="phone" class="field prepend-icon">
                                  <input type="text" name="phone" id="phone" class="gui-input" placeholder="Tel&eacute;fono" value="<?php echo $telefonos[0]; ?>">
                                  <label for="phone" class="field-icon">
                                      <i class="fa fa-phone"></i>
                                  </label>
                              </label>
                          </div>

                          <div class="section">
                              <label for="phone2" class="field prepend-icon">
                                  <input type="text" name="phone2" id="phone2" class="gui-input" placeholder="Tel&eacute;fono de respaldo" value="<?php echo $telefonos[1]; ?>">
                                  <label for="phone2" class="field-icon">
                                      <i class="fa fa-phone"></i>
                                  </label>
                              </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                            <label class="field prepend-icon">
                              <textarea class="gui-textarea" id="adress" name="adress"
                                        placeholder="Direcci&oacute;n del lugar"><?php echo $direccion; ?></textarea>
                              <label for="adress" class="field-icon">
                                <i class="fa fa-list"></i>
                              </label>
                            </label>
                          </div>

                          <div class="section">
                              <label for="capacity" class="field prepend-icon">
                                  <input type="number" name="capacity" id="capacity" class="gui-input" placeholder="Capacidad m&aacute;xima" value="<?php echo $capacidad; ?>">
                                  <label for="capacity" class="field-icon">
                                      <i class="fa fa-user"></i>
                                  </label>
                              </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                            <label class="field prepend-icon append-button file">
                              <span class="button">Croquis</span>
                              <input type="file" class="gui-file" name="croquis" id="croquis" 
                                     onChange="document.getElementById('uploader1').value = this.value;" accept="image/*">
                              <input type="text" class="gui-input" id="uploader1" placeholder="Este ser&aacute; el croquis que se adjunte en el correo">
                              <label class="field-icon">
                                <i class="fa fa-cloud-upload"></i>
                              </label>
                            </label>
                          </div>

                          <br> <br>

                          <div class="section">
                              <div class="pull-right">
                                  <button type="button" class="btn btn-gradient btn-system" onclick="editar();">Actualizar sucursal</button>
                              </div>
                          </div>
                          <!-- end section -->

                      </div>
                      <!-- end .form-body section -->
                      <div class="panel-footer">

                      </div>
                      <!-- end .form-footer section -->
                  </form>


              </div>
              <!-- end .admin-form section -->
          </div>
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

    <!--Ventana modal para mostrar error en el registro-->
    <div id="errorRegistro"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <label>Ha ocurrido un error al guardar el registro, inténtalo de nuevo.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>


    <!--Ventana modal para mostrar registro correcto-->
    <div id="registroCorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Registro guardado</h4>
          </div>
          <div class="modal-body">
            <label>El registro se actualizó exitosamente, presiona el botón para continuar.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Continuar</button>
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
  function editar(){
    var datos = new FormData();
    var id =  <?php echo $_SESSION['idSucursal']; ?>;
    var nombre = document.getElementById('name').value;
    var descripcion = document.getElementById('description').value;
    var tel = document.getElementById('phone').value;
    var telResp = document.getElementById('phone2').value;
    var direccion = document.getElementById('adress').value;
    var capacidad = document.getElementById('capacity').value;
    var croquis = document.getElementById('croquis').files[0];
    
    datos.append('id', id);
    datos.append('nombre', nombre);
    datos.append('descripcion', descripcion);
    datos.append('tel', tel);
    datos.append('telResp', telResp);
    datos.append('direccion', direccion);
    datos.append('capacidad', capacidad);
    datos.append('croquis', croquis);
    
    $.ajax({
        data: datos,
        type: 'POST',
        async: true,
        processData: false,
        cache: false,
        contentType: false,
        url: "../../c/actualizarSucursal.php",
        success: function(resp){
          if(resp == 1){
            $('#registroCorrecto').modal('show');
          }
          else{
            $('#errorRegistro').modal('show');
          }
        }
      });
  }

  // Redirecciona a viewBuilding cuando se cierra el modal de registro correcto
  $('#registroCorrecto').on('hidden.bs.modal', function (e) {
    window.location = "viewBuilding.php";
  })
</script>
</html>
<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
}
else{
  header('Location: ../../');
}

if($_SESSION['datosGrupo'] != false){
  $idGrupo = $_SESSION['datosGrupo'][0];
  $grupo = $_SESSION['datosGrupo'][1];
  $capacidad = $_SESSION['datosGrupo'][2];
  $costo = $_SESSION['datosGrupo'][3];
  $periodoInscripcion = $_SESSION['datosGrupo'][4];
  $fechaPago = $_SESSION['datosGrupo'][5];
  $idSucursal = $_SESSION['datosGrupo'][6];
  $idCurso = $_SESSION['datosGrupo'][7];
  $estatus = $_SESSION['datosGrupo'][8];
}
else{
  $idGrupo = null;
  $grupo = null;
  $capacidad = null;
  $costo = null;
  $periodoInscripcion = null;
  $fechaPago = null;
  $idSucursal = null;
  $idCurso = null;
  $estatus = null;
}

if(isset($_SESSION['datosClase'][0])){
  $idClase = $_SESSION['datosClase'][0];
  $clase = $_SESSION['datosClase'][1];
  $fecha = $_SESSION['datosClase'][2];
  $horaInicio = $_SESSION['datosClase'][3];
  $horaFin = $_SESSION['datosClase'][4];
}
else{
  $idClase = null;
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
                        Editar grupo
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
                      Editar grupo
                    </span>
                  </div>
                  <!-- end .form-header section -->

                  <form method="post" action="/" id="form-register">
                      <div class="panel-body pn">
                          <div class="section">
                              <label class="field select">
                                  <select id="sucursal" name="sucursal">
                                  </select>
                                  <i class="arrow"></i>
                                </label>
                          </div>
                          <!-- end .section row section -->


                          <div class="section">
                              <label class="field select">
                                  <select id="curso" name="curso">
                                  </select>
                                  <i class="arrow"></i>
                                </label>
                          </div>

                          <div class="section">
                              <label for="name" class="field prepend-icon">
                                  <input type="text" name="grupo" id="grupo" class="gui-input" placeholder="Nombre del grupo" value="<?php echo $grupo; ?>">
                                  <label for="name" class="field-icon">
                                      <i class="fa fa-bookmark"></i>
                                  </label>
                              </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                              <label for="capacity" class="field prepend-icon">
                                  <input type="number" name="capacity" id="capacity" class="gui-input" placeholder="Capacidad" value="<?php echo $capacidad; ?>">
                                  <label for="capacity" class="field-icon">
                                      <i class="fa fa-user"></i>
                                  </label>
                              </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                              <label for="cost" class="field prepend-icon">
                                  <input type="number" name="cost" id="cost" class="gui-input" placeholder="Costo" value="<?php echo $costo; ?>">
                                  <label for="cost" class="field-icon">
                                      <i class="fa fa-money"></i>
                                  </label>
                              </label>
                          </div>

                          <div class="section">
                              <label for="date" class="field prepend-icon">
                                  <input type="text" name="periodoInscripcion" id="periodoInscripcion" class="gui-input" placeholder="Per&iacute;odo de inscripci&oacute;n" value="<?php echo $periodoInscripcion; ?>">
                                  <label for="date" class="field-icon">
                                      <i class="fa fa-calendar"></i>
                                  </label>
                              </label>
                          </div>
                          <br>
                          <div class="section">
                              <label for="datepicker1" class="field prepend-icon">
                                  <input type="date" id="fechaLimite" name="fechaLimite"
                                         class="gui-input"
                                         placeholder="Fecha de l&iacute;mite de pago (10/23/2016)" value="<?php echo $fechaPago; ?>">
                                  <label class="field-icon">
                                      <i class="fa fa-calendar"></i>
                                  </label>
                              </label>
                          </div>

                          <br><br><br>

                          <div class="panel-heading">
                            <span class="panel-title">
                              Horario del grupo
                            </span>
                          </div>

                          <br><br>

                          <div class="section">
                              <p>Nombre de la clase: </p>
                              <label for="name" class="field prepend-icon">
                                  <input type="text" name="name" id="clase" class="gui-input" placeholder="Ej. Clase 1">
                                  <label for="name" class="field-icon">
                                      <i class="fa fa-bookmark"></i>
                                  </label>
                              </label>
                          </div>
                          <br>
                          <div class="section">
                              <p>Fecha:</p>
                              <label for="datepicker1" class="field prepend-icon">
                                  <input type="date" id="fechaClase" name="datepicker1"
                                         class="gui-input"
                                         placeholder="Ej. 10/23/2016">
                                  <label class="field-icon">
                                      <i class="fa fa-calendar"></i>
                                  </label>
                              </label>
                          </div>
                          <br>
                          <div class="section">
                              <p>Hora de inicio: </p>
                              <label for="timepicker1" class="field prepend-icon">
                                  <input type="time" id="horaInicio" name="timepicker1"
                                         class="gui-input"
                                         placeholder="Ej. 12:00">
                                  <label class="field-icon">
                                      <i class="imoon imoon-clock"></i>
                                  </label>
                              </label>
                          </div>
                          <br>
                          <div class="section">
                              <p>Hora de fin:</p>
                              <label for="timepicker1" class="field prepend-icon">
                                  <input type="time" id="horaFin" name="timepicker1"
                                         class="gui-input"
                                         placeholder="El. 16:30">
                                  <label class="field-icon">
                                      <i class="imoon imoon-clock"></i>
                                  </label>
                              </label>
                          </div>

                          <button type="button" class="btn btn-gradient btn-sm btn-dark" onclick="agregarClase();">Registrar clase</button>

                          <br><br><br><br>

                          <div class="panel" id="spy5">
                            <div class="panel-heading">
                                <div class="pull-right hidden-xs">
                                    <code class="mr20">Recuerda que si te equivocas solo necesitas eliminar la clase que agregaste mal, no te preocupes el orden que muestra la tabla yo me encargare de acomodarlos durante el registro</code>
                                </div>
                            </div>
                            <div class="panel-body pn">
                              <div class="table-responsive">
                                <table class="table table-bordered table-responsive mbn">
                                  <thead>
                                  <tr class="alert">
                                      <th class="tcenter">Clase</th>
                                      <th class="tcenter">Fecha</th>
                                      <th class="tcenter">Hora de inicio</th>
                                      <th class="tcenter">Hora de fin</th>
                                      <th class="tcenter">Eliminar</th>
                                  </tr>
                                  </thead>
                                  <tbody id="tablaClases">
                                  
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </div>
                          <br> <br>

                          <div class="section">
                              <div class="pull-right">
                                  <button type="submit" class="btn btn-gradient btn-system">Actualizar grupo
                                  </button>
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
    <div id="confirmarEliminar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">¿Deseas eliminar el registro?</h4>
          </div>
          <div class="modal-body">
            <label>Esta acción eliminara la clase de los registros.<br>¿Quieres continuar?</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="eliminar();" data-dismiss="modal">Si</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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
            <label>Error al eliminar el registro.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

    <div id="registroCorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Registro editado</h4>
          </div>
          <div class="modal-body">
            <label>El registro se actualizó correctamente.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

    <div id="errorRegistro"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <label>El registro no se actualizó.</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

    <div id="agregarClaseIncorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <label>Error al agregar la clase, recuerda que todos los campos son requeridos.</label>
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
idEliminarClase = 0;
function modalEliminar(id){
  idEliminarClase = id;
  $('#confirmarEliminar').modal('show');
}

function getClases(idGrupo){
  $.ajax({
    async: true,
    method: "POST",
    data: {"id": idGrupo},
    url: "../../c/getClases.php",
    success: function(resp){
      var datos = resp.split("@");
      var idClase = datos[0].split("¬");
      var clase = datos[1].split("¬");
      var fecha = datos[2].split("¬");
      var horaInicio = datos[3].split("¬");
      var horaFin = datos[4].split("¬");
      var str ="";
      var tabla = document.getElementById('tablaClases');
      
      for(i=0; i<idClase.length; i++){
        str += '<tr><td class="tcenter"><input name="clases"  data-id="'+idClase[i]+'" type="text" class="gui-input" value="'+clase[i]+'"></td><td class="tcenter"><input type="date" class="gui-input" value="'+fecha[i]+'" name="fechaClase"></td><td class="tcenter"><input type="time" class="gui-input" value="'+horaInicio[i]+'" name="inicioClase"></td><td class="tcenter"><input type="time" class="gui-input" value="'+horaFin[i]+'" name="finClase"></td><td class="tcenter"><button type="button" class="btn btn-danger" onclick="modalEliminar('+idClase[i]+');"><i class="fa fa-trash-o"></i></button></td></tr>';
      }
      if(idClase[0] == ""){
        str = "";
      }
      tabla.innerHTML = str;
    }
  });
}

function eliminar(){
  $.ajax({
    async: true,
    method: "POST",
    data: {"id": idEliminarClase},
    url: "../../c/eliminarClase.php",
    success: function(resp){
       getClases(<?php echo $idGrupo; ?>);
    }
  });
}

function getCatalogos(){
  $.ajax({
    async: true,
    method: "POST",
    url: "../../c/catalogosCrearGrupo.php",
    success: function(resp){
      var datos = resp.split("@");
      var idSucursal = datos[0].split("¬");
      var sucursales = datos[1].split("¬");
      var idCurso = datos[2].split("¬");
      var cursos = datos[3].split("¬");
      var selectSucursal = document.getElementById('sucursal');
      var selectCurso = document.getElementById('curso');
      var strSucursal = "<option value=''>Selecciona una sucursal</option>";
      var strCurso = "<option value=''>Selecciona un curso</option>";

      for(i=0; i<idSucursal.length; i++){
        if(idSucursal[i] == <?php echo $idSucursal; ?>){
          strSucursal += "<option value='"+idSucursal[i]+"' selected>"+sucursales[i]+"</option>";
        }
        else{
                strSucursal += "<option value='"+idSucursal[i]+"'>"+sucursales[i]+"</option>";
            }
      }

      for(i=0; i<idCurso.length; i++){
        if(idCurso[i] == <?php echo $idCurso; ?>){
          strCurso += "<option value='"+idCurso[i]+"' selected>"+cursos[i]+"</option>";
        }
        else{
          strCurso += "<option value='"+idCurso[i]+"'>"+cursos[i]+"</option>";
        }
      }

      selectSucursal.innerHTML = strSucursal;
      selectCurso.innerHTML = strCurso;
    }
  });
}

$("#form-register").validate({
  errorClass: "state-error",
  validClass: "state-success",
  errorElement: "em",
  rules:{
    sucursal:{required: true},
    curso:{required: true},
    grupo:{required: true, maxlength: 60},
    capacity:{required: true, min:1},
    cost:{required: true, min:1},
    periodoInscripcion:{required: true, maxlength:50},
    fechaLimite:{required: true}
  },
  messages:{
    sucursal:{required: "Campo requerido"},
    curso:{required: "Campo requerido"},
    grupo:{required: "Campo requerido", maxlength: "Máximo 60 caracteres"},
    capacity:{required: "Campo requerido", min: "Valor mínimio 1"},
    cost:{required: "Campo requerido", min: "Valor mínimio 1"},
    periodoInscripcion:{required: "Campo requerido", maxlength:"Máximo 50 caracteres"},
    fechaLimite:{required: "Campo requerido"}
  },
  submitHandler: function(form){
    if($('#tablaClases').html() == ''){
      $('#errorClase').modal('show');
      return;
    }


    var sucursal = document.getElementById('sucursal').value;
    var curso = document.getElementById('curso').value;
    var grupo = document.getElementById('grupo').value;
    var capacidad = document.getElementById('capacity').value;
    var costo = document.getElementById('cost').value;
    var periodoInscripcion = document.getElementById('periodoInscripcion').value;
    var fechaLimite = document.getElementById('fechaLimite').value;

    var tabla = document.getElementById('tablaClases');
    var idClases = new Array();
    var clases = new Array();
    var fechaClase = new Array();
    var inicioClase = new Array();
    var finClase = new Array();

    for(i=0; i<tabla.rows.length; i++){
      idClases.push(document.getElementsByName('clases')[i].getAttribute("data-id"));
      clases.push(document.getElementsByName('clases')[i].value);
      fechaClase.push(document.getElementsByName('fechaClase')[i].value);
      inicioClase.push(document.getElementsByName('inicioClase')[i].value);
      finClase.push(document.getElementsByName('finClase')[i].value);
    }

    idClases = JSON.stringify(idClases);
    clases = JSON.stringify(clases);
    fechaClase = JSON.stringify(fechaClase);
    inicioClase = JSON.stringify(inicioClase);
    finClase = JSON.stringify(finClase);

    var datos = {
      'idGrupo': <?php echo $idGrupo; ?>,
      'sucursal': sucursal, 
      'curso': curso, 
      'grupo': grupo, 
      'capacidad': capacidad, 
      'costo': costo, 
      'periodoInscripcion': periodoInscripcion, 
      'fechaLimite': fechaLimite, 
      'idClases': idClases,
      'clases': clases,
      'fechaClase': fechaClase,
      'inicioClase': inicioClase,
      'finClase': finClase
    };
    $.ajax({
      data: datos,
      method: 'POST',
      async: true,
      url: "../../c/actualizarGrupo.php",
      success: function(resp){
        if(resp == 1){
          $('#registroCorrecto').modal('show');
        }
        else{
          $('#errorRegistro').modal('show');
        }
        console.log(resp);
      }
    });
  }
});

$('#registroCorrecto').on('hidden.bs.modal', function (e){
  window.location = "employability.php";
});

function agregarClase(){
  var idGrupo = <?php echo $idGrupo; ?>;
  var clase = document.getElementById('clase').value;
  var fecha = document.getElementById('fechaClase').value;
  var horaInicio = document.getElementById('horaInicio').value;
  var horaFin = document.getElementById('horaFin').value;

  if(clase == '' || fecha == '' || horaInicio == '' || horaFin == ''){
    $('#agregarClaseIncorrecto').modal('show');
  }
  else{
    datos = {'idGrupo': idGrupo, 'clase': clase, 'fecha': fecha, 'horaInicio': horaInicio, 'horaFin': horaFin};
    $.ajax({
      async: true,
      data: datos,
      method: "POST",
      url: "../../c/agregarClase.php",
      success: function(resp){
        if(resp == 1){
          getClases(<?php echo $idGrupo; ?>)
        }
        else{
          $('#agregarClaseIncorrecto').modal('show');
        }
        console.log(resp);
      }
    });
  }
}

getCatalogos(); 
getClases(<?php echo $idGrupo; ?>);
</script>
</html>

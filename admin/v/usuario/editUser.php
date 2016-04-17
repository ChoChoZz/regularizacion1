<?php 
session_start();
if(isset($_SESSION['usuario']) && ($_SESSION['tipoUsuario'] == "Administrador" || $_SESSION['tipoUsuario'] == "Super administrador")){
  $datosUsuario = $_SESSION['datosUsuario'];
  $idGrupos = $_SESSION['idGrupos'];
  $grupos = $_SESSION['nombresGrupos'];
}
else{
  header('Location: ../../');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Regularizaci&oacute;n IPN Administracion</title>
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
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="#">
                            Usuarios
                        </a>
                    </li>
                    <li class="crumb-link">
                        Editar usuario
                    </li>
                </ol>
            </div>
        </header>

        <section id="content" class="table-layout animated fadeIn">
            <div class="admin-form theme-primary">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">Editar alumno
                  </div>
                </div>
                <div class="panel-body">
                  <div id="ok"></div>
                  <form method="post" id="formid">

                    <h6 class="mb20" id="spy1">Información base</h6>
                    <div class="row">

                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="name" id="name" class="gui-input" placeholder="Nombre(s)" value="<?php echo $datosUsuario[0]; ?>">
                            <label for="name" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Primer apellido" value="<?php echo $datosUsuario[1]; ?>">
                            <label for="firstname" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="secondname" id="secondname" class="gui-input" placeholder="Segundo apellido" value="<?php echo $datosUsuario[2]; ?>">
                            <label for="secondname" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                    </div>
                    
                     <div class="col-md-4">
                        <div class="section">
                          <label class="field select">
                            <div class="option-group field">
                                <label class="option block">
                                  <?php if($datosUsuario[3] == "Femenino"){ ?>
                                  <input type="radio" name="sex" value="Femenino" id="sex" checked="true">
                                  <?php } else{ ?>
                                  <input type="radio" name="sex" value="Femenino" id="sex">
                                  <?php } ?>
                                  <span class="radio"></span>Femenino</label>
                                <br>
                              </div>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field select">
                            <div class="option-group field">
                                <label class="option block">
                                  <?php if($datosUsuario[3] == "Masculino"){ ?>
                                  <input type="radio" name="sex" value="Masculino" id="sex" checked="true">
                                  <?php } else{ ?>
                                  <input type="radio" name="sex" value="Masculino" id="sex">
                                  <?php } ?>
                                  <span class="radio"></span>Masculino</label>
                              </div>
                          </label>
                        </div>
                      </div>
                    </div>

                    <h6 class="mt40 mb20" id="spy1">Datos de contacto</h6>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input" placeholder="Correo electrónico" value="<?php echo $datosUsuario[4]; ?>">
                            <label for="email" class="field-icon">
                              <i class="fa fa-envelope"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="email" name="email1" id="email1" class="gui-input" placeholder="Repite tu correo electrónico" value="<?php echo $datosUsuario[4]; ?>">
                            <label for="email1" class="field-icon">
                              <i class="fa fa-envelope"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="phone" id="phone" class="gui-input" placeholder="Teléfono" value="<?php echo $datosUsuario[5]; ?>">
                            <label for="phone" class="field-icon">
                              <i class="fa fa-phone"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="cel" id="cel" class="gui-input" placeholder="Teléfono m&oacute;vil" value="<?php echo $datosUsuario[6]; ?>">
                            <label for="cel" class="field-icon">
                              <i class="fa fa-mobile"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                        <div class="col-md-4">
                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="password" name="password" id="password" class="gui-input" placeholder="Contraseña" value="<?php echo $datosUsuario[13]; ?>">
                              <label for="" class="field-icon">
                                <i class="fa fa-shield"></i>
                              </label>
                            </label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="section">
                            <label class="field prepend-icon">
                              <input type="password" name="password1" id="password1" class="gui-input" placeholder="Repite tu contraseña" value="<?php echo $datosUsuario[13]; ?>">
                              <label for="password1" class="field-icon">
                                <i class="fa fa-shield"></i>
                              </label>
                            </label>
                          </div>
                        </div>
                    </div>

                    <h6 class="mt40 mb20" id="spy6">Direcci&oacute;n del usuario</h6>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="street" id="street" class="gui-input" placeholder="Calle y número" value="<?php echo $datosUsuario[11]; ?>">
                            <label for="street" class="field-icon">
                              <i class="fa fa-location-arrow"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="town" id="town" class="gui-input" placeholder="Colonia" value="<?php echo $datosUsuario[10]; ?>">
                            <label for="town" class="field-icon">
                              <i class="fa fa-location-arrow"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="city" id="city" class="gui-input" placeholder="Ciudad/Municipio/Delegación:" value="<?php echo $datosUsuario[9]; ?>">
                            <label for="city" class="field-icon">
                              <i class="fa fa-location-arrow"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="state" id="state" class="gui-input" placeholder="Estado" value="<?php echo $datosUsuario[8]; ?>">
                            <label for="state" class="field-icon">
                              <i class="fa fa-crosshairs"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="cp" id="cp" class="gui-input" placeholder="Código Postal" value="<?php echo $datosUsuario[7]; ?>">
                            <label for="cp" class="field-icon">
                              <i class="fa fa-crosshairs"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                    </div>

                    <br>

                    <h4 class="mt40 mb20 orange" id="spy2">Servicios</h4>
                    <div class="section row" id="spy5">
                      <div class="col-md-4 pl20 prn">
                        <h6 class="mt40 mb20">Grupos</h6>
                        <?php for($i=0; $i<count($idGrupos); $i++){ ?>
                          <div class="option-group field">
                            <label class="block mt15 option option-primary">
                              <input type="checkbox" name="curso" value="<?php echo $idGrupos[$i]; ?>" checked>
                              <span class="checkbox"></span><?php echo $grupos[$i]; ?>
                            </label>
                          </div>
                          <?php } ?>
                      </div>

                      <div class="col-md-4 pl20 prn">
                        <h6 class="mt40 mb20">Cursos en linea</h6>
                          <!--div class="option-group field">
                            <label class="block mt15 option option-primary">
                              <input type="checkbox" name="inputname" value="CH">
                              <span class="checkbox"></span>C&aacute;lculo</label>
                          </div-->
                      </div>

                      <div class="col-md-4 pl20 prn">
                        <h6 class="mt40 mb20">Manuales</h6>
                          <!--div class="option-group field">
                            <label class="block mt15 option option-primary">
                              <input type="checkbox" name="inputname" value="CH">
                              <span class="checkbox"></span>C&aacute;lculo</label>
                          </div-->
                      </div>
                    </div>

                    <div class="mt40 panel-footer text-center">
                        <button type="submit" class="btn btn-bordered btn-primary mb5"> Aceptar</button>
                        <button type="reset" class="btn btn-bordered mb5" onclick="javascript: window.location = 'viewUser.php';"> Cancelar</button>
                    </div>

                  </form>
                </div>
              </div>

            </div>
        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->
<div id="errorEditar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <label class="control-label">No se editó el registro correctamente.</label>
          </div>
        </div>
      </div>
    </div>

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

   <script type="text/javascript">
      $(document).ready(function() {
          $("#ok").hide();
          
          $("#formid").validate({

              errorClass: "state-error",
              validClass: "state-success",
              errorElement: "em",

              rules: {
                  name: { required: true},
                  firstname: { required: true},
                  password: {required: true, minlength: 6},
                  password1: {required: true, minlength: 6, equalTo: "#password"},
                  email: { required:true, email: true},
                  email1: { required:true, email: true, equalTo: '#email' },
                  phone: { required:true, maxlength: 20},
                  cel: { maxlength: 25},
                  street: { required: true},
                  town: { required: true},
                  city: { required:true},
                  state: { required: true},
                  sex: {required: true},
                  cp: { required: true, minlength: 5, number:true}/*,
                  grupoSeleccionado: {minlength: 1}*/
              },
              messages: {
                  name: "Campo requerido",
                  firstname : "Campo requerido",
                  password: {
                      required: "Campo requerido",
                      minlength: "M&iacute;nimo 6 caracteres"
                  },
                  password1: {
                      required: "Campo requerido",
                      minlength: "M&iacute;nimo 6 caracteres",
                      equalTo: "Introduce la misma contraseña"
                  },
                  sex: "Campo requerido",
                  email:{
                      required: "Campo requerido",
                      email: "Introducir un correo electrónico válido"
                  },
                  email1:{
                      required: "Campo requerido",
                      email: "Introducir un correo electrónico válido",
                      equalTo: "Introduce el mismo correo electrónico"
                  },
                  phone : "Campo requerido",
                  street: "Campo requerido",
                  town: "Campo requerido",
                  city: "Campo requerido",
                  state: "Campo requerido",
                  cp:{
                      required: "Campo requerido",
                      minlength: "M&iacute;nimo 5 caracteres",
                      number: "Introduce solo numeros"
                  }/*,
                  grupoSeleccionado: {
                      minlength: "Selecciona por lo menos un grupo"
                  }*/
              },
              // name, firstname, secondname, password, paswoord1, sex, email, email1, phone, cel, street, town, city, state, cp
              submitHandler: function(form){
                var name = document.getElementById('name').value;
                var firstname = document.getElementById('firstname').value;
                var secondname = document.getElementById('secondname').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                var cel = document.getElementById('cel').value;
                var password = document.getElementById('password').value;
                var street = document.getElementById('street').value;
                var town = document.getElementById('town').value;
                var city = document.getElementById('city').value;
                var state = document.getElementById('state').value;
                var cp = document.getElementById('cp').value;

                var aux = document.getElementsByName('sex');
                var sex;
                for(i=0; i<aux.length; i++){
                  if(aux[i].checked){
                    sex = aux[i].value;
                  }
                }
                
                var aux = document.getElementsByName('curso');
                var cursos = new Array();
                for(i=0; i<aux.length; i++){
                  if(aux[i].checked){
                    cursos[i] = aux[i].value;
                  }
                }
                var datos = {
                  'name': name,
                  'firstname': firstname,
                  'secondname':  secondname,
                  'sex': sex,
                  'email': email,
                  'phone': phone,
                  'cel': cel,
                  'password': password,
                  'street': street,
                  'town': town,
                  'city': city,
                  'state': state,
                  'cp': cp,
                  'cursos': cursos
                }
                $.ajax({
                  async: true,
                  method: 'post',
                  data: datos,
                  url: "../../c/actualizarUsuario.php",
                  success: function(resp){
                      window.location="viewUser.php";
                  }
                });
              }

          });
      });
    </script>

</body>
</html>
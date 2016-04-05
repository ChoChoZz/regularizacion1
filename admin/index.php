<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
    <title>Administraci&oacute;n - Regularizaci&oacute;n IPN </title>
    <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas"/>
    <meta name="description" content="Regularización IPN">
    <meta name="author" content="GeanWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
        type='text/css'>

  <!-- Vendor CSS -->
  <link rel="stylesheet" type="text/css" href="assets/js/plugins/magnific/magnific-popup.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin/forms/css/forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn fondo1">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content">

        <!-- Login -->
        <div class="admin-form theme-primary mw320" id="login">
          <div class="text-center mb20"><img src="assets/img/logoa.png" class="img-responsive" alt="Logo"/></div>
          <div class="panel mw320">

              <h4 class="mb20">Panel de administraci&oacute;n</h4>
              <div class="panel-body pn mv10">
              <p class="mb20">Ingresa los datos que se solicitan</p>
              <form onsubmit="login();">
                <div class="section">
                  <label for="email" class="field prepend-icon">
                    <input required type="email" name="email" id="email" class="gui-input"
                           placeholder="Correo electr&oacute;nico" autofocus>
                    <label for="email" class="field-icon">
                      <i class="fa fa-user"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input"
                           placeholder="Contrase&ntilde;a">
                    <label for="password" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <button type="submit" class="mb20 mv10 btn btn-bordered btn-xs btn-primary pull-right" onclick="login();" id="loginBtn">Iniciar sesi&oacute;n</button>
                  <button type="button" class="btn btn-bordered btn-xs pull-right" data-toggle="modal" data-target="#olvidoContrasena">Olvide mi contrase&ntilde;a</button>


                </div>
                <!-- end section -->
              </form>
              </div>
              <!-- end .form-body section -->
          </div>
          <!-- end .panel-->
        </div>
        <!-- end: .admin-form -->

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

    <!--Ventana modal para recuperar contrasena-->
    <div id="olvidoContrasena"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Recuperar contrase&ntilde;a</h4>
          </div>
          <div class="modal-body">
              <p class="mb10">Ingresa tu correo electr&oacute;nico</p>
              <div class="form-group">
                <label for="email" class="control-label">Correo electr&oacute;nico:</label>
                <input type="email"  class="form-control" id="emailContrasena">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="recuperarContrasena();">Enviar</button>
          </div> 
        </div>
      </div>
    </div>
    <!-- end: .admin-form -->

    <!-- Ventana modal para mostrar error en inicio de sesión -->
    <div id="errorLogin"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Error al iniciar sesión</h4>
          </div>
          <div class="modal-body">
            <label class="control-label">Correo y/o contraseña incorrectos.</label>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="assets/js/plugins/canvasbg/canvasbg.js"></script>

  <!-- Page Plugins -->
  <script src="assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

  <!-- HighCharts Plugin -->
  <script src="assets/js/plugins/highcharts/highcharts.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/demo/widgets_sidebar.js"></script>
  <script src="assets/js/pages/management-tools-modals.js"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core      
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 5,
        y: window.innerHeight / 10
      }
    });

  });

  function login(){
  	var datos = {'email': document.getElementById('email').value, 'password': document.getElementById('password').value};
  	$.ajax({
  		data: datos,
  		method: "POST",
  		url: "c/iniciarSesion.php",
  		async: true,
  		success: function(resp){
  				if(resp == 'false'){
  					$('#errorLogin').modal('show');
  				}
  				else{
  					window.location="v/usuario/welcome.php"
  				}
  		}
  	});
  }

  /* Verifica que esten llenos los dos campos para poder activar el boton de inciar sesion */
  function activarBoton(){
  	var email = document.getElementById('email').value;
  	var password = document.getElementById('password').value;

  	if(email.length>0 && password.length>0){
  		$('#loginBtn').removeAttr('disabled');
  	}
  	else{
  		$('#loginBtn').prop('disabled', true);
  	}
  }

  /* Recuperar contraseña */
  function recuperarContrasena(){
    var email = document.getElementById('emailContrasena');
     if(email.value == ""){
       email.focus();
       $('#emailContrasena').css('border-color', 'red');
     }
     else{
      $.ajax({
        data: {'email': email.value},
        method: "POST",
        async: true,
        url: "c/recuperarContrasena.php",
        success: function(resp){
          $('#olvidoContrasena').modal('hide');
          console.log(resp);
        }
      });
     }
  }
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
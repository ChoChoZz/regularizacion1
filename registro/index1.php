<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="UTF-8">
  <!--meta http-equiv="Content-type" content="text/html; charset=utf-8" -->
  <title>Regularizaci&oacute;n IPN Administraci&oacute;n</title>
  <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas"/>
  <meta name="description" content="Regularización IPN m&oacute;dulo de registro">
  <meta name="author" content="GeanWeb">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
        type='text/css'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="../admin/assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="../admin/assets/admin/forms/css/forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../admin/assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">


  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content" class="">

        <!-- Registration -->
        <div class="admin-form theme-primary mw750" id="register">
          <div class="bg-primary mw750 text-center mb20 br3 pv15">
            <img src="../admin/assets/img/slide2.png" style="width: 700px" alt="" />
            <!--span class="panel-title">
                Regularizaci&oacute;n IPN
              </span-->
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading pn">
              <span class="panel-title">
                Formulario de registro
              </span>
            </div>
            <!-- end .form-header section -->

            <div id="ok"></div>

            <form method="post" action="/" id="formid">
              <div class="panel-body pn">

                <div class="section row">
                  <div class="col-md-4">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="name" id="name" class="gui-input" placeholder="Nombre(s)">
                        <label for="name" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Primer apellido">
                        <label for="firstname" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="secondname" id="secondname" class="gui-input" placeholder="Segundo apellido">
                        <label for="secondname" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                    </div>
                  </div>

                <div class="section mb50">
                  <div class="col-md-6">
                     <div class="option-group field">
                      <label class="block mt25 option option-primary">
                        <input type="radio" name="sex" value="Femenino" checked>
                        <span class="radio"></span>Femenino</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb30">
                     <div class="option-group field">
                      <label class="block mt15 option option-primary">
                        <input type="radio" name="sex" value="Masculino">
                        <span class="radio"></span>Masculino</label>
                    </div>
                  </div>
                </div>

                <hr>
                <hr>

                <div class="section row">
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="email" name="email" id="email" class="gui-input" placeholder="Correo electrónico" onblur="buscarCorreo();">
                        <strong hidden="true" class="admin-form state-error" id="alertaCorreo" for="email1" class="state-error">El correo ya se encuentra registrado</strong>
                        <label for="email" class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="email" name="email1" id="email1" class="gui-input" placeholder="Repite tu correo electrónico">
                        <label for="email1" class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="section row">
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="Contraseña">
                        <label for="" class="field-icon">
                          <i class="fa fa-shield"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="password" name="password1" id="password1" class="gui-input" placeholder="Repite tu contraseña">
                        <label for="password1" class="field-icon">
                          <i class="fa fa-shield"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div>
                
                <div class="section row">
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="phone" id="phone" class="gui-input" placeholder="Teléfono">
                        <label for="phone" class="field-icon">
                          <i class="fa fa-phone"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="cel" id="cel" class="gui-input" placeholder="Teléfono m&oacute;vil">
                        <label for="cel" class="field-icon">
                          <i class="fa fa-mobile"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div>

                <h6 class="mt40 mb20 orangep" id="spy6">Direcci&oacute;n</h6>
                <div class="section row mt20">
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="street" id="street" class="gui-input" placeholder="Calle y número">
                        <label for="street" class="field-icon">
                          <i class="fa fa-location-arrow"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                        <label class="field prepend-icon">
                          <input type="text" name="town" id="town" class="gui-input" placeholder="Colonia" >
                          <label for="town" class="field-icon">
                            <i class="fa fa-location-arrow"></i>
                          </label>
                        </label>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="city" id="city" class="gui-input" placeholder="Ciudad/Municipio/Delegación:" >
                        <label for="city" class="field-icon">
                          <i class="fa fa-location-arrow"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="state" id="state" class="gui-input" placeholder="Estado" >
                        <label for="state" class="field-icon">
                          <i class="fa fa-crosshairs"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="section">
                      <label class="field prepend-icon">
                        <input type="text" name="cp" id="cp" class="gui-input" placeholder="Código Postal">
                        <label for="cp" class="field-icon">
                          <i class="fa fa-crosshairs"></i>
                        </label>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="section">
                 <div class="section row" id="spy5">
                  <div class="col-md-12 pl20 prn">
                    <h5 class="mt40 mb20 orange">Cursos</h5>
                      <p>Selecciona los cursos a los que deseas ingresar *</p>
                      <!--Funcion para mostrar los grupos que se encuentran disponibles-->
                      <div class="option-group field">
                        <?php include("../admin/c/mostrarGrupos.php"); ?>
                      </div>
                  </div>
                 </div>
                </div>
                <br>

                <div class="section">
                  <div class="pull-left mt20">
                    <div class="option-group field">
                      <label class="option block option-primary">
                          <input type="checkbox" name="terminos" >
                          <span class="checkbox"></span> Acepto los 
                          <a data-toggle="modal" href="#terminosdeuso"> t&eacute;rminos y condiciones</a>
                      </label>
                    </div>
                  </div>
                  <div class="pull-right mt20">
                    <button type="submit" id="botonRegistrar" class="btn btn-bordered btn-primary">Registrar
                    </button>
                  </div>
                </div>

              </div>
              <!-- end .form-body section -->
              <div class="panel-footer">

              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end .admin-form section -->
        </div>
        <!-- end: .admin-form -->

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

    <!--Ventana modal para mostrar los terminos y condiciones-->
    <div id="terminosdeuso"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="terminosdeuso">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">T&eacute;rminos y condiciones</h4>
          </div>
          <div class="modal-body">
            <p class="justify">
            PREPARACION POLITECNICO S.A. DE C.V., con domicilio en AV. WILFRIDO MASSIEU # 310, COLONIA: PLANETARIO LINDAVISTA, DELEGACION: GUSTAVO A. MADERO, MEXICO, DISTRITO FEDERAL, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: NOMBRE, DIRECCION, TELEFONO, CURP, RFC, ETC. 
            </p>

            <p class="justify">
            Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en [GERARDO BRITO CHAVEZ , AV. WILFRIDO MASSIEU # 310, COLONIA: PLANETARIO LINDAVISTA, DELEGACION: GUSTAVO A. MADERO, MEXICO, DISTRITO FEDERAL, (0155)26801666, CORREO: PREPARACIONIPN@HOTMAIL.COM o visitar nuestra página de Internet <a href="http://www.preparacionipn.com/" target="_blank">http://www.preparacionipn.com/</a>. Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con [EMPRESAS DE PAQUETERIA Y/O MENSAJERIA], para [HACERLES LLEGAR NUESTROS PRODUCTO Y SERVICIOS]. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. 
            </p>

            <p class="justify">
            No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de [(0155)26801666, AV. WILFRIDO MASSIEU # 310, COLONIA: PLANETARIO LINDAVISTA, DELEGACION: GUSTAVO A. MADERO, MEXICO, DISTRITO FEDERAL, PREPARACIONIPN@HOTMAIL.COM]. Cualquier modificación a este aviso de privacidad podrá consultarla en <a href="http://www.preparacionipn.com/" target="_blank">http://www.preparacionipn.com/</a>. 
            </p>

            <p class="justify">
            Fecha última actualización [27/OCTUBRE/2015]
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

    <!--Ventana modal Error Selecciona un grupo-->
    <div id="errorCurso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="errorGrupos">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title error" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <p>Selecciona un grupo</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>


    <!--Ventana modal error registro-->
    <div id="errorRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="errorGrupos">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title error" id="exampleModalLabel">Error</h4>
          </div>
          <div class="modal-body">
            <p class="justify"><strong>No se pudo realizar el registro :(</strong> <br><br>
            <img src="../admin/assets/img/error500.png" class="img-responsive tcenter center-image wmd">
            <br> Mandarnos un mensaje a <a href="https://www.facebook.com/GeanWeb-888418104506663/" class="btn btn-xs ladda-button btn-dark " data-style="expand-right" target="_blank">GeanWeb</a> y haznos saber lo que paso
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div> 
        </div>
      </div>
    </div>

  </div>

  <script src="../admin/assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="../admin/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="../admin/assets/js/plugins/canvasbg/canvasbg.js"></script>

  <!-- jQuery Validate Plugin-->
  <script src="../admin/assets/admin/forms/js/jquery.validate.min.js"></script>

  <!-- HighCharts Plugin -->
  <script src="../admin/assets/js/plugins/highcharts/highcharts.js"></script>

  <!-- jQuery Validate Addon -->
  <script src="../admin/assets/admin/forms/js/additional-methods.min.js"></script>

  <!-- Theme Javascript -->
  <script src="../admin/assets/js/utility/utility.js"></script>
  <script src="../admin/assets/js/demo/demo.js"></script>
  <script src="../admin/assets/js/main.js"></script>
  <script src="../admin/assets/js/demo/widgets_sidebar.js"></script>
  <script src="../admin/assets/js/pages/forms-validation.js"></script>

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
                  phone: {maxlength: 20, required: true},
                  street: { required: true},
                  town: { required: true},
                  city: { required:true},
                  state: { required: true},
                  sex: {required: true},
                  cp: { required: true, minlength: 5, number:true},
                  grupoSeleccionado: {minlength: 1},
                  terminos: {required: true}
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
                  },
                  grupoSeleccionado: {
                      minlength: "Selecciona por lo menos un grupo"
                  },
                  terminos: {
                    required: "Es necesario aceptar los t&eacute;rminos y condiciones"
                  }
              },

              submitHandler: function(form){

              var grupoSeleccionado = "";
              $('input[name="grupoSeleccionado[]"]:checked').each(function() {
                grupoSeleccionado += $(this).val() + ",";
              });

              grupoSeleccionado = grupoSeleccionado.substring(0, grupoSeleccionado.length-1);
              //console.log("El valor de grupo seleccionado antes de salir es: " + grupoSeleccionado);
                if(grupoSeleccionado.length>0){
                  var dataString = 'name='+$('#name').val()+'&firstname='+$('#firstname').val()+'&secondname='+$('#secondname').val()+'&secondname='+$('#secondname').val()+'&password='+$('#password').val()+'&sex='+$('input:radio[name=sex]:checked').val()+'&email='+$('#email').val()+'&phone='+$('#phone').val()+'&cel='+$('#cel').val()+'&street='+$('#street').val()+'&town='+$('#town').val()+'&city='+$('#city').val()+'&state='+$('#state').val()+'&cp='+$('#cp').val()+'&grupoSeleccionado='+grupoSeleccionado;

                    $.ajax({
                        type: "POST",
                        url:"../admin/c/registrarUsuario.php",
                        data: dataString,
                        success:function(response){ 
                          console.log("RESPONSE ES: " + response + " y el tipo de variable es: "+ typeof(response));
                          if(response == 1 || response == "1"){
                              window.location='./instructions.php';
                          }else if(response == 3 || response == '3'){
                              $('#errorCurso').modal('show');
                          }
                          else if(response == 0 || response == '0'){
                              $('#errorRegistro').modal('show');
                          }
                          else{
                              $('#errorRegistro').modal('show');
                          }
                        }
                    });  
                }else{
                  $('#errorCurso').modal('show');
                }
              }

          });
      });
      function buscarCorreo(){
        var correo = document.getElementById('email').value;
        $.ajax({
          type: "POST",
          url:"../admin/c/buscarCorreo.php",
          data: {'correo':correo},
          success:function(response){ 
            console.log(response);
            if(response == "1" || response == 1){
              $("#alertaCorreo").removeAttr("hidden");
              document.getElementById('botonRegistrar').setAttribute("disabled", true);
            }else{
                document.getElementById('alertaCorreo').setAttribute("hidden", true);
                $("#botonRegistrar").removeAttr("disabled");
            }
          }
        }); 
      }
    </script>

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
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>

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

  <?php 
    include("../../c/mostrarUsuario.php");
  ?>

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
            <header class="sidebar-header"></header>
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
                    Usuarios
                  </a>
                </li>
                <li class="crumb-link">
                  Listado general de alumnos
                </li>
              </ol>
            </div>
          </header>
          <!-- End: Topbar -->

          <!-- Begin: Content -->
          <section id="content" class="table-layout animated fadeIn">

            <div class="tray tray-center pt30" style="height: 690px;">

              <!-- recent orders table -->
              <div class="panel">

                <div class="panel-menu admin-form theme-primary mtn">
                  <div class="row">
                    <div class="col-md-9">
                      <label class="field select">
                        <select id="filter-purchases" name="filter-purchases" class="empty">
                          <option value="0">Grupo</option>
                          <?php mostrarTodosGrupos(); ?>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input type="text" class="form-control" id="buscar" placeholder="B&uacute;squeda" onkeypress="if(event.keyCode==3) mostrarModal(this.value);">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel-body pn">
                  <div class="table-responsive">
                    <table class="table admin-form theme-warning tc-checkbox-1 fs13" id="my-table">
                      <thead>
                        <tr class="bg-light">
                          <th class="">Nombre</th>
                          <th class="">email</th>
                          <th class="">Tel&eacute;fono</th>
                          <th class="">Celular</th>
                          <th class="tcenter">Grupo</th>
                          <th class="tcenter">Ver</th>
                          <th class="tcenter">Pagos</th>
                          <th class="tcenter">Comprobante</th>
                          <th class="tcenter">Editar</th>
                          <th class="tcenter">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php echo mostrarTodosUsuarios(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

          </section>
          <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        <div id="registrarPago"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="registrarPago">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Registrar pago</h4>
              </div>
              <div class="modal-body">
                <p class="justify">
                  Ingresa el monto en algun adeudo que desees y da clic en el bot&oacute;n <strong class="text-info"><i class="fa fa-dollar"></i></strong>
                </p>
                <div class="admin-form theme-primary">

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="tcenter col-sm-3">Servicio</th>
                          <th class="tcenter col-sm-2">Adeudo</th>
                          <th class="tcenter col-sm-2">Registrado</th>
                          <th class="tcenter col-sm-2">Liquidar</th>
                          <th class="tcenter col-sm-3">Registrar</th>
                        </tr>
                      </thead>
                      <tbody id="tablaPago">
                     </tbody>
                   </table>
                 </div>
               </div>  
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="sinPagos"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="sinPagos">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"><strong class="orange">Error: </strong>Sin pagos</h4>
              </div>
              <div class="modal-body">
                <p class="justify">
                  No se encunetra ningun pago asociado a este usuario.
                </p>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="noLiquido"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="noLiquido">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel"><strong class="orange">Error: </strong>Fallo en la conexi&oacute;n a la DB</h4>
              </div>
              <div class="modal-body">
                <p class="justify">
                  No se pudo registrar el pago.
                </p>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="verUsuario"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="verUsuario">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Datos de usuario</h4>
              </div>
              <div class="modal-body">
                <label id="nombreCompleto">Nombre: </label>
                <br>
                <label id="sexo">Sexo: </label>
                <br>
                <label id="correo">Correo electrónico: </label>
                <br>
                <label id="telefono">Teléfono: </label>
                <br>
                <label id="celular">Celular: </label>
                <br>
                <label id="direccion">Dirección: </label>
                <br><br>
                <h5>Grupos</h5>
                <div id="gruposUsuario"></div>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="verUsuarioError"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="verUsuario">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Error</h4>
              </div>
              <div class="modal-body">
              <label>Error al obtener los datos de usuario, inténtalo de nuevo.</label>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="errorEliminar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="errorEliminar">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Error</h4>
              </div>
              <div class="modal-body">
              <label>Error al eliminar los datos de usuario, inténtalo de nuevo.</label>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div> 
          </div>
        </div>
      </div>

      <div id="confirmarEliminar"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="errorEliminar">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Eliminar</h4>
              </div>
              <div class="modal-body">
              <label>¿Desea eliminar el registro?</label>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-danger" onclick="eliminarUsuario();">Si</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div> 
          </div>
        </div>
      </div>

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="../../assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="../../assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- HighCharts Plugin -->
    <script src="../../assets/js/plugins/highcharts/highcharts.js"></script>
    <script src="../../assets/js/plugins/c3charts/d3.min.js"></script>
    <script src="../../assets/js/plugins/c3charts/c3.min.js"></script>

    <!-- Simple Circles Plugin -->
    <script src="../../assets/js/plugins/circles/circles.js"></script>

    <!-- FullCalendar Plugin + moment Dependency -->
    <script src="../../assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="../../assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- AdminForms Date/Month Pickers -->
    <script src="../../assets/admin/forms/js/jquery-ui-monthpicker.min.js"></script>
    <script src="../../assets/admin/forms/js/jquery-ui-datepicker.min.js"></script>

    <!-- Magnific Popup Plugin -->
    <script src="../../assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

    <!-- Theme Javascript -->
    <script src="../../assets/js/utility/utility.js"></script>
    <script src="../../assets/js/demo/demo.js"></script>
    <script src="../../assets/js/main.js"></script>

    <!-- Widget Javascript -->
    <script src="../../assets/js/demo/widgets.js"></script>
    <script src="../../assets/js/demo/widgets_sidebar.js"></script>
    <script src="../../assets/js/pages/dashboard1.js"></script>
    <!-- END: PAGE SCRIPTS -->

    <script type="text/javascript">
      $(document).ready(function(){
        $("#buscar").keyup(function(){
          if( $(this).val() != "")
          {
            $("#my-table tbody>tr").hide();
            $("#my-table td:contains-ci('" + $(this).val() + "')").parent("tr").show();
          }
          else
          {
            $("#my-table tbody>tr").show();
          }
        });

        //getRegistros();
      });
      $.extend($.expr[":"], 
      {
        "contains-ci": function(elem, i, match, array) 
        {
          return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
      });
    </script>

    <script type="text/javascript">
      idEliminar = 0;
      function mostrarPagos(idUsuario){
        $.ajax({
          type: "POST",
          url:"../../c/registrarPago.php",
          data: {'idUsuario':idUsuario},
          success:function(response){ 
            //console.log(response);
            if(response == "0" || response == 0){
              $('#sinPagos').modal('show');
            }else{
              var pagos = response;
              var tabla = document.getElementById('tablaPago');
              tabla.innerHTML = pagos;
              $('#registrarPago').modal('show');
            }
          }
        }); 
      }

      function liquidar(idPago, monto, idUsuario){
        document.getElementById("btnLiquidar").disabled = true;
        $.ajax({
          type: "POST",
          url:"../../c/liquidarCurso.php",
          data: {'idPago':idPago, 'monto':monto, 'idUsuario':idUsuario},
          before: function(){
          },
          success:function(response){ 
            console.log(response);
            if(response == "0" || response == 0){
              $('#noLiquido').modal('show');
            }else{
              $("#registrarPago").modal("hide");
            }
          }
        }); 
      }

      function pagar(idPago){
        document.getElementById("btnRegistrar").disabled = true;
        var nombreInput = "cantidad"+idPago;
        var cantidad = document.getElementById(nombreInput).value;
        $.ajax({
          type: "POST",
          url:"../../c/registrarCantidad.php",
          data: {'idPago':idPago, 'cantidad':cantidad},
          before: function(){
            
          },
          success:function(response){ 
            console.log(response);
            if(response == "0" || response == 0){
              $('#noLiquido').modal('show');
            }else{
              $("#registrarPago").modal("hide");
            }
          }
        }); 
      }

      function verUsuario(idUsuario){
        $.ajax({
          async: true,
          method: 'POST',
          data: {'id': idUsuario},
          url: '../../c/verUsuario.php',
          success: function(resp){
              document.getElementById('nombreCompleto').innerHTML = '';
              document.getElementById('sexo').innerHTML = '';
              document.getElementById('correo').innerHTML = '';
              document.getElementById('telefono').innerHTML = '';
              document.getElementById('celular').innerHTML = '';
              document.getElementById('direccion').innerHTML = '';
              document.getElementById('gruposUsuario').innerHTML = '';
            if(resp){
              console.log(resp);
              var datos = resp.split('|');
              var nombreCompleto = document.getElementById('nombreCompleto');
              var sexo = document.getElementById('sexo');
              var correo = document.getElementById('correo');
              var telefono = document.getElementById('telefono');
              var celular = document.getElementById('celular');
              var direccion = document.getElementById('direccion');
              var grupos = document.getElementById('gruposUsuario');
              var gruposUsuario = datos[7].split("#");
              var strGrupos = "";

              for(i=0; i<gruposUsuario.length;i++){
                strGrupos += '<li>'+gruposUsuario[i]+'</li>';
              }

              nombreCompleto.innerText = nombreCompleto.innerText + datos[0];
              sexo.innerText = sexo.innerText + datos[1];
              correo.innerText = correo.innerText + datos[2];
              telefono.innerText = telefono.innerText + datos[3];
              celular.innerText = celular.innerText + datos[4];
              direccion.innerText = direccion.innerText + datos[5];
              grupos.innerHTML = strGrupos;
              $('#verUsuario').modal('show');
            }
            else{
              $('#verUsuarioError').modal('show');
            }
          }
        });
      }

      function eliminar(id){
        idEliminar = id;

        $('#confirmarEliminar').modal('show');
      }

      function eliminarUsuario(){
        $('#confirmarEliminar').modal('hide');
        $.ajax({
          async: true,
          data: {'id': idEliminar},
          method: 'POST',
          url: '../../c/eliminarUsuario.php',
          success: function(resp){
            if(resp == 1){
              window.location = 'viewUser.php';
            }
            else{
              $('#errorEliminar').modal('show');
            }
          }
        });
      }

      function editarUsuario(id){
        window.location = "../../c/editarUsuario.php?id="+id;
      }

    </script>

  </body>

</html>
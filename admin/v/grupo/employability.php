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
									Grupos
								</a>
							</li>
							<li class="crumb-link">
								Ocupabilidad de grupos
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

                <!--div class="panel-menu admin-form theme-primary mtn">
                  <div class="row">
                      <div class="col-md-6">
                          <label class="field select">
                              <select id="filter-purchases" name="filter-purchases" class="empty">
                                  <option value="0">Ordenar por registrados</option>
                                  <option value="1">Mas registrados </option>
                                  <option value="2">Menos registrados</option>
                              </select>
                              <i class="arrow double"></i>
                          </label>
                      </div>
                      <div class="col-md-6">
                          <label class="field select">
                              <select id="filter-group" name="filter-group" class="empty">
                                  <option value="0">Ordenar por pagados </option>
                                  <option value="1">Mas pagados </option>
                                  <option value="2">Menos pagados</option>
                              </select>
                              <i class="arrow double"></i>
                          </label>
                      </div>
                  </div>
              </div-->

              <div class="panel-body pn">
              	<div class="table-responsive">
              		<table class="table admin-form theme-warning tc-checkbox-1 fs13">
              			<thead>
              				<tr class="bg-light">
              					<th class="">Grupo</th>
              					<th class="tcenter">Registrados</th>
              					<th class="tcenter">Pagados</th>
              					<th class="tcenter">Pendientes de pago</th>
              					<th class="tcenter">Cupo</th>
              					<th class="tcenter">Estado del grupo</th>
              					<th class="tcenter">Ver</th>
              					<th class="tcenter">Editar</th>
              					<th class="tcenter">Eliminar</th>
              				</tr>
              			</thead>
              			<tbody id="tablaGrupo">
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

<!--Ventana modal para mostrar error en el registro-->
<div id="confirmarEstatus"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Confirmación</h4>
			</div>
			<div class="modal-body">
				<label>¿Deseas cambiar el estatus?</label>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" onclick="cambiarEstatus();">Si</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			</div> 
		</div>
	</div>
</div>


<div id="estatusCorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"></h4>
			</div>
			<div class="modal-body">
				<label>El estatus se actualizó correctamente.</label>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div> 
		</div>
	</div>
</div>

<div id="estatusIncorrecto"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Error</h4>
			</div>
			<div class="modal-body">
				<label>El estatus no se actualizó correctamente.</label>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div> 
		</div>
	</div>
</div>

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
	idEstatus = 0;
	idEliminar = 0;
	function getGrupos(){
		$.ajax({
			async: true,
			method: "POST",
			url: "../../c/getGrupos.php",
			success: function(resp){
				var tabla = document.getElementById('tablaGrupo');
				var datos = resp.split("@");
				var id = datos[0].split("¬");
				var grupo = datos[1].split("¬");
				var capacidad = datos[2].split("¬");
				var estatus = datos[3].split("¬");
				var registrados = datos[4].split("¬");
				var pagados = datos[5].split("¬");
				var str = "";
				var tabla = document.getElementById('tablaGrupo');

				for(i=0; i<id.length; i++){
					str += '<tr><td class="tcenter">'+grupo[i]+'</td><td class="tcenter">'+registrados[i]+'</td><td class="tcenter">'+pagados[i]+'</td><td class="tcenter">'+(parseInt(registrados[i]) - parseInt(pagados[i]))+'</td><td class="tcenter">'+capacidad[i]+'</td><td class="tcenter"><a href="#" onclick="modalEstatus('+id[i]+')">'+estatus[i]+'</a></td><td class="tcenter"><a href="../../c/verGrupo.php?id='+id[i]+'" type="button" class="btn btn-system"><i class="fa fa-info"></i></a></td><td class="tcenter"><a href="../../c/editarGrupo.php?id='+id[i]+'" type="button" class="btn btn-info"><i class="fa fa-pencil"></i></a></td><td class="tcenter"><button type="button" class="btn btn-danger" onclick="modalEliminar('+id[i]+')"><i class="fa fa-trash"></i></button></td></tr>';
				}
				
				if(id[0] == ''){
					str = '';
				}
				tabla.innerHTML = str;
			}
		});
	}

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
					getGrupos();
				}
				else{
					$('#eliminarIncorrecto').modal('show');
				}
			}
		});
	}

	function modalEstatus(id){
		idEstatus = id;
		$('#confirmarEstatus').modal('show');
	}

	function cambiarEstatus(){
		$('#confirmarEstatus').modal('hide');
		var id = {"id": idEstatus};
		$.ajax({
			async: true,
			method: "POST",
			url: "../../c/cambiarEstatus.php",
			data: id,
			success: function(resp){
				if(resp == 1){
					getGrupos();
				}
				else{
					$('#estatusIncorrecto').modal('show');
				}
			}
		});
	}
	getGrupos();
</script>
</html>
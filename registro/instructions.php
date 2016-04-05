<?php
  session_start();
  
  include("../admin/c/mostrarInstrucciones.php");
  
  $nombre = $_SESSION['nombreCompleto'];
  $idUsuario = $_SESSION['idUsuario'];

  $grupos = mostrarGruposAlumnoC($idUsuario);
  $cursos = mostrarCursosC($idUsuario);
  $costo = mostrarCosto($idUsuario);

  include("../admin/c/correoInstrucciones.php");
  mostrarInstrucciones($idUsuario, $nombre, $grupos, $cursos, $costo);

  session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
  <title>Regularizaci&oacute;n IPN Administraci&oacute;n</title>
  <meta name="keywords" content="Regularizacion, Regularización IPN, IPN, materias, reprobadas"/>
  <meta name="description" content="Regularización IPN m&oacute;dulo de registro">
  <meta name="author" content="GeanWeb">

  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

  <link rel="stylesheet" type="text/css" href="../admin/assets/skin/default_skin/css/theme.css">
  <link rel="shortcut icon" href="../admin/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="blank-page">

  <section id="content_wrapper" class="bwhite">
    <section id="content" class="animated fadeIn">
      <div class="pl15 pr50 mt100">
        <h1 style="color:#212121">
          Regularización IPN
        </h1>
        <h3 style="color:#FF9800">
          Curso presencial
        </h3>
        <br>
        <h4>
          <b><?php echo ($nombre.": "); ?></b>
        </h4>
        <br>
        <p>
          Has quedado registrad@ para el grupo de <b style="color:#01579B; font-size: 16pt;"><?php echo ($grupos); ?></b> del curso presencial de <b style="color:#01579B; font-size: 16pt;"><?php echo ($cursos); ?></b> de <b>Regularización IPN</b>.  
        </p>
        <p>
          Las inscripciones sólo se realizarán del día <b>29 de Marzo al 8 de Abril</b>, en un horario de <b>9 am a 7 pm</b>. Deberás presentarte inmediatamente en nuestras instalaciones para realizar tu pago de <strong><?php echo ($costo); ?></strong> (en efectivo) y asegurar tu lugar, ya que el cupo es limitado.
        </p>
        <br>
        <p>
          La dirección de nuestras instalaciones es:<br>
          Wilfrido Massieu 310.<br>
          Col. Planetario Lindavista.<br> 
          Del. Gustavo A. Madero.<br> 
          C.P. 07300.<br>
          México, D.F.<br>
        </p>
        <br>
        <h6><b>Hemos adjuntado un croquis para que sepas cómo llegar.</b></h6>
        <br>
        <img src="../admin/assets/img/croquis.png" alt="" class="img-responsive mauto">
        <br>
        <br>
        <h5 style="color: #FF3D7F">¡Te esperamos!</h5>
        <br>
        <br>
        <p>
          <b>Regularización IPN</b><br>
          Cualquier duda, puedes contactarnos por teléfono: <br>
          26-80-16-66<br>
          65-66-23-31<br>
        </p>
      </div>
    </section>
  </section>
  
  <script src="../admin/assets/js/jquery/jquery-1.11.3.min.js"></script>
  <script src="../admin/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="../admin/assets/js/plugins/highcharts/highcharts.js"></script>
  <script src="../admin/assets/js/utility/utility.js"></script>
  <script src="../admin/assets/js/demo/demo.js"></script>
  <script src="../admin/assets/js/main.js"></script>
  <script src="../admin/assets/js/demo/widgets_sidebar.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    Core.init();
  });
  </script>

</body>

</html>

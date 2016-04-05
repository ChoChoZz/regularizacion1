<?php 
	header('Content-Type: text/html; charset=UTF-8');

	function mostrarInstrucciones($idUsuario, $nombre, $grupos, $cursos, $costo){
		
		$email = obtenerCorreo($idUsuario);

	    $cabecera = "Content-type:text/html;charset=UTF-8" . "\r\n";
	    $cabecera .= 'From:Regularizacion IPN <registro@regularizacionipn.com>' . "\r\n";
	    $mensaje = "

        <div>
        <h1 style='color:#212121'>
          Regularización IPN
        </h1>
        <h3 style='color:#FF9800'>
          Curso presencial
        </h3>
        <br>
        <h3 style='color: #3f51b5; font-size: 13pt;'>
          <b>".$nombre."</b>
        </h3>
        <br>
        <p>
          Has quedado registrad@ para el grupo de <b style='color:#01579B; font-size: 16pt;'>".$grupos."</b> del curso presencial de <b style='color:#01579B; font-size: 16pt;'>".$cursos."</b> de <b>Regularización IPN</b>.  
        </p>
        <p>
          Las inscripciones sólo se realizarán del día <b>29 de Marzo al 8 de Abril</b>, en un horario de <b>9 am a 7 pm</b>. Deberás presentarte inmediatamente en nuestras instalaciones para realizar tu pago de <strong> $".$costo."</strong> (en efectivo) y asegurar tu lugar, ya que el cupo es limitado.
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
        <h3><b style='color: #ff9800; font-size: 12pt;'>Da clic <a href='http://regularizacionipn.com/croquis.pdf' target='_blank'>aqu&iacute;</a> y descarga el croquis.</b></h3>
        <br>
        <h5 style='color: #FF3D7F'>¡Te esperamos!</h5>
        <br>
        <p>
          <b>Regularización IPN</b><br>
          Cualquier duda, puedes contactarnos por teléfono: <br>
          26-80-16-66<br>
          65-66-23-31<br>
        </p>
      	</div>";
	    mail($email, "Registro - Regularizacion IPN", $mensaje, $cabecera);
	}

?>
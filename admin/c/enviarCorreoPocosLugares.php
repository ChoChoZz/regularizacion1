<?php 
	header('Content-Type: text/html; charset=UTF-8');

	function pocosLugares($nombreGrupo){
		$cabecera = 'Content-type: text/html; charset=utf-8' . "\r\n";
	    $cabecera .= 'From: Regularizacion IPN <registro@regularizacionipn.com>' . "\r\n";
	    mail("regularizacionipn@hotmail.com, preparacionipn@hotmail.com", "POCOS LUGARES - Regularizacion IPN", "<h1>Regularizaci&oacute;n IPN</h1> <br> <br> <p>El grupo <b>".$nombreGrupo."</b> esta a punto de llenarse. Ingresa al <a target='_blank' href='http://regularizacionipn.com/admin/'>SISTEMA</a> y verifica. </p><br>", $cabecera);
	}

?>
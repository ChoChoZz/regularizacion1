<?php
header('Content-Type: text/html; charset=UTF-8');

function asignarNombreDia($numeroDia){

	if($numeroDia == 0 || $numeroDia == '0'){
		$diaSemana = "Domingo";
	}
	else if($numeroDia == 1 || $numeroDia == '1'){
		$diaSemana = "Lunes";
	}
	else if($numeroDia == 2 || $numeroDia == '2'){
		$diaSemana = "Martes";
	}
	else if($numeroDia == 3 || $numeroDia == '3'){
		$diaSemana = "Mi&eacute;rcoles";
	}
	else if($numeroDia == 4 || $numeroDia == '4'){
		$diaSemana = "Jueves";
	}
	else if($numeroDia == 5 || $numeroDia == '5'){
		$diaSemana = "Viernes";
	}
	else if($numeroDia == 6 || $numeroDia == '6'){
		$diaSemana = "S&aacute;bado";
	}

	return $diaSemana;
}

function asignarNombreMes($numeroMes){
	if($numeroMes == 1 || $numeroMes == '1'){
		$mes = "Enero";
	}
	else if($numeroMes == 2 || $numeroMes == '2'){
		$mes = "Febrero";
	}
	else if($numeroMes == 3 || $numeroMes == '3'){
		$mes = "Marzo";
	}
	else if($numeroMes == 4 || $numeroMes == '4'){
		$mes = "Abril";
	}
	else if($numeroMes == 5 || $numeroMes == '5'){
		$mes = "Mayo";
	}
	else if($numeroMes == 6 || $numeroMes == '6'){
		$mes = "Junio";
	}
	else if($numeroMes == 7 || $numeroMes == '7'){
		$mes = "Julio";
	}
	else if($numeroMes == 8 || $numeroMes == '8'){
		$mes = "Agosto";
	}
	else if($numeroMes == 9 || $numeroMes == '9'){
		$mes = "Septiembre";
	}
	else if($numeroMes == 10 || $numeroMes == '10'){
		$mes = "Octubre";
	}
	else if($numeroMes == 11 || $numeroMes == '11'){
		$mes = "Noviembre";
	}
	else if($numeroMes == 12 || $numeroMes == '12'){
		$mes = "Diciembre";
	}

	return $mes;
}

?>
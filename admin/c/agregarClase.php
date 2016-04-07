<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/clase.php';

$grupo = $_POST['idGrupo'];
$nombreClase = $_POST['clase'];
$fecha = $_POST['fecha'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];

if(agregarClase($nombreClase, $fecha, $horaInicio, $horaFin, $grupo)){
	echo true;
}
else{
	echo false;
	exit();
}
?>
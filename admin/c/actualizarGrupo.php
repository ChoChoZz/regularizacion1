<?php
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';
require '../m/clase.php';

/* Datos de grupo */
$idGrupo = $_POST['idGrupo'];
$idSucursal = $_POST['sucursal'];
$idCurso = $_POST['curso'];
$grupo = $_POST['grupo'];
$capacidad = $_POST['capacidad'];
$costo = $_POST['costo'];
$periodoInscripcion = $_POST['periodoInscripcion'];
$fechaPago = $_POST['fechaLimite'];

/* Datos de clase */
$idClases = json_decode($_POST['idClases']);
$clases = json_decode($_POST['clases']);
$fechaClase = json_decode($_POST['fechaClase']);
$inicioClase = json_decode($_POST['inicioClase']);
$finClase = json_decode($_POST['finClase']);
$checkClase = true;

$editGrupo = editarGrupo($idGrupo, $grupo, $capacidad, $costo, $periodoInscripcion, $fechaPago, $idSucursal, $idCurso);
if($editGrupo){
	for($i=0; $i<count($idClases); $i++){
		$editClase = editarClase($idClases[$i], $clases[$i], $fechaClase[$i], $inicioClase[$i], $finClase[$i]);
		$checkClase = $checkClase && $editClase;
	}
	if($checkClase){
		echo true;
	}
	else{
		echo false;
		exit();
	}
}
else{
	echo false;
	exit();
}
?>
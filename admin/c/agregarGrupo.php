<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';
require '../m/clase.php';

if(isset($_POST['sucursal'])){
	$sucursal = $_POST['sucursal'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['curso'])){
	$curso = $_POST['curso'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['grupo'])){
	$grupo = $_POST['grupo'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['capacidad'])){
	$capacidad = $_POST['capacidad'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['costo'])){
	$costo = $_POST['costo'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['periodoInscripcion'])){
	$periodoInscripcion = $_POST['periodoInscripcion'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['fechaLimite'])){
	$fechaLimite = $_POST['fechaLimite'];
}
else{
	echo false;
	exit();
}

if(isset($_POST['rows'])){
	$tabla = $_POST['rows'];
}
else{
	echo false;
	exit();
}

$idGrupo = getProxIdGrupo();
if(!$idGrupo){
	echo false;
	exit();
}


$nombresClase = array();
$fechasClase = array();
$inicioClase = array();
$finClase = array();

for($i=0; $i<count($tabla); $i++){
	$aux =  explode("\t", $tabla[$i]);
	$nombresClase[$i] = $aux[0];
	$fechasClase[$i] = $aux[1];
	$inicioClase[$i] = $aux[2];
	$finClase[$i] = $aux[3];
}

$agregarGrupo = agregarGrupo($idGrupo, $grupo, $capacidad, $costo, $periodoInscripcion, $fechaLimite, $sucursal, $curso);
if($agregarGrupo){
	$check = true;
	for($i=0; $i<count($nombresClase); $i++){
		$agregarClase = agregarClase($nombresClase[$i], $fechasClase[$i], $inicioClase[$i], $finClase[$i], $idGrupo);
		$check = $check && $agregarClase;
	}
	if($check){
		echo true;
		exit();
	}
	else{
		borrarGrupo($idGrupo);
		echo false;
		exit();
	}
}
else{
	echo false;
	exit();
}
?>
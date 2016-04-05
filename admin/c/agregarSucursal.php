<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/sucursal.php';

if(!isset($_POST['nombre'])){
	echo false;
	exit();
}
else{
	$nombre = $_POST['nombre'];
}

if(!isset($_POST['tel'])){
	echo false;
	exit();
}
else{
	$tel = $_POST['tel'];
}

if(!isset($_POST['direccion'])){
	echo false;
	exit();
}
else{
	$direccion = $_POST['direccion'];
}

if(isset($_POST['descripcion'])){
	$descripcion = $_POST['descripcion'];
}
else{
	$descripcion = null;
}

if(isset($_POST['telResp'])){
	$telResp = $_POST['telResp'];
}
else{
	$telResp=null;
}

if(isset($_POST['capacidad'])){
	$capacidad = $_POST['capacidad'];
}
else{
	$capacidad = 0;
}

if(isset($_FILES['croquis'])){
	$croquis = $_FILES['croquis'];
}
else{
	$croquis = null;
}


$id = getProxIdSucursal();
if($croquis && isset($id)){
	$extensionCroquis = explode(".", $croquis['name']);
	$extensionCroquis = $extensionCroquis[count($extensionCroquis)-1];
	$nombreCroquis = "$id.$extensionCroquis";
	
}
else{
	$nombreCroquis = null;
}


if($nombreCroquis){
	$registroSucursal = agregarSucursal($nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, $nombreCroquis);
	$guardarCroquis = move_uploaded_file($croquis['tmp_name'], "../assets/img/croquis/$nombreCroquis");
	if($registroSucursal && $guardarCroquis){
		echo true;
		exit();
	}
	else{
		if($registroSucursal){
			eliminarSucursal($id);
		}
		if($guardarCroquis){
			unlink("../assets/img/croquis/$nombreCroquis");
		}
		echo false;
		exit();
	}
}
else{
	$registroSucursal = agregarSucursal($nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, null);
	if($registroSucursal){
		echo true;
		exit();
	}
	else{
		eliminarSucursal($id);
		echo false;
		exit();
	}
}
?>
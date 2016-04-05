<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';
require '../m/clase.php';

$id = $_GET['id'];

$datosGrupo = getGrupoEditar($id);
$datosClase = getClaseEditar($id);

if($datosGrupo){
	$_SESSION['datosGrupo'] = $datosGrupo;
}
else{
	$_SESSION['datosGrupo'] = null;
}

if($datosClase){
	$_SESSION['datosClase'] = $datosClase;
}
else{
	$_SESSION['datosClase'] = null;
}

header('Location: ../v/grupo/editGroup.php');
?>
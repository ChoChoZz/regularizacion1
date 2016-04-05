<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';
require '../m/clase.php';

$id = $_GET['id'];

$datosGrupo = verGrupo($id);
$datosClase = verClase($id);

if(isset($datosGrupo)){
	$_SESSION['datosGrupo'] = $datosGrupo;
	$_SESSION['idGrupo'] = $id;
}
else{
	$_SESSION['datosGrupo'] = null;	
}

if(isset($datosClase)){
	$_SESSION['datosClase'] = $datosClase;
}
else{
	$_SESSION['datosClase'] = null;	
}

header('Location: ../v/grupo/viewOnlyGroup.php');
?>
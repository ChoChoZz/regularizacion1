<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/usuario.php';
require '../m/grupo.php';

$id = $_GET['id'];

$datosUsuario = verUsuario($id);
$datosGrupos = gruposDeUsuario($id);
$nombresGrupos = $datosGrupos[1];
$idGrupos = $datosGrupos[0];

if(!$datosUsuario || !$idGrupos || !$nombresGrupos){
	echo false;
	exit();
}

$_SESSION['idUsuarioEditar'] = $id;
$_SESSION['datosUsuario'] = $datosUsuario;
$_SESSION['idGrupos'] = $idGrupos;
$_SESSION['nombresGrupos'] = $nombresGrupos;

header('Location: ../v/usuario/editUser.php');
?>
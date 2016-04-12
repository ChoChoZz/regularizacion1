<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/usuario.php';
require '../m/grupo.php';

$id = $_GET['id'];

$datosUsuario = verUsuario($id);
$nombresGrupos = array_values(gruposDeUsuario($id));
$idGrupos = array_values(mostrarGruposAlumno($id));

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
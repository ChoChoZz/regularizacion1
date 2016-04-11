<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/usuario.php';

$id = $_POST['id'];

$eliminarUsuario = eliminarUsuario($id);

if($eliminarUsuario){
	echo true;
}
else{
	echo false;
	exit();
}

?>
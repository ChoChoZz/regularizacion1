<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';
require '../m/clase.php';

$id = $_POST['id'];

if(borrarClase($id)){
	if(borrarGrupo($id)){
		echo true;
		exit();
	}
}
echo false;
exit();
?>
<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/clase.php';

$id = $_POST['id'];

$borrarClase = borrarClaseEditar($id);
if($borrarClase){
	echo true;
	exit();
}
else{
	echo false;
	exit();
}
?>
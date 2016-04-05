<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/sucursal.php';

$id = $_POST['id'];
$croquis = getCroquis($id);
$check = false;

if(eliminarSucursal($id)){
	if($croquis){
		$check = unlink("../assets/img/croquis/$croquis");
	}
	else{
		$check = true;
	}
}
echo $check;
?>
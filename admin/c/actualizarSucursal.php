<?php 
session_start();
header('Content-Type: text/html; charset=UTF-8');
require '../m/sucursal.php';

$result = false;
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tel = $_POST['tel'];
$telResp = $_POST['telResp'];
$direccion = $_POST['direccion'];
$capacidad = $_POST['capacidad'];

if(isset($_FILES['croquis'])){
	$croquis = $_FILES['croquis'];
}
else{
	$croquis = null;
}

if(isset($croquis)){
	$croquisOld = getCroquis($id);
	$borrarCroquis = unlink("../assets/img/croquis/$croquisOld");
	if($borrarCroquis){
		$extension = explode(".", $croquis['name']);
		$extension = $extension[count($extension)-1];
		$guardaCroquis = move_uploaded_file($croquis['tmp_name'], "../assets/img/croquis/$id.$extension");
		if($guardaCroquis){
			$editarRegistro = editarSucursal($id, $nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, "$id.$extension");
			if($editarRegistro){
				$result = true;
			}
		}
	}
}
else{
	$editarRegistro = editarSucursal($id, $nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, null);
	if($editarRegistro){
		$result = true;
	}
}
echo $result;
?>
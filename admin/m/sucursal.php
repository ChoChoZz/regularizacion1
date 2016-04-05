<?php 
header('Content-Type: text/html; charset=UTF-8');

function agregarSucursal($nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, $croquis){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$mysqli->autocommit(false);
	$result = $mysqli->query("INSERT INTO `preparac_regularizacion`.`SUCURSAL` (`nombre`, `descripcion`, `telefono`, `telefonoRespaldo`, `direccion`, `capacidad`, `croquis`)
		VALUES ('$nombre', '$descripcion', '$tel', '$telResp', '$direccion', $capacidad, '$croquis');");

	if($result){
		$mysqli->commit();
		$mysqli->close();
		return $result;
	}
	else{
		$mysqli->rollback();
		$mysqli->close();
		return $result;
	}

}

function getProxIdSucursal(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("select AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA='preparac_regularizacion' and TABLE_NAME='SUCURSAL';");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return $row[0];
	}
	return false;
}

function getSucursales(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select idSucursal, nombre, direccion, telefono from SUCURSAL order by nombre;");
	$i=0;
	$idSucursal = array();
	$nombre = array();
	$direccion = array();
	$telefono = array();

	while($row = $result->fetch_array()){
		$idSucursal[$i] = $row['idSucursal'];
		$nombre[$i] = $row['nombre'];
		$direccion[$i] = $row['direccion'];
		$telefono[$i] = $row['telefono'];
		$i++;
	}
	$mysqli->close();

	return array($idSucursal, $nombre, $direccion, $telefono);

}

function eliminarSucursal($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("DELETE FROM `preparac_regularizacion`.`SUCURSAL` WHERE `idSucursal`='$id';");
	$mysqli->close();
	return $result;
}

function verSucursal($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select * from SUCURSAL where idSucursal = $id;");

	$idSucursal = null;
	$nombre = null;
	$descripcion = null;
	$direccion = null;
	$telefono = null;
	$telefonoRespaldo = null;
	$croquis = null;
	$capacidad = null;

	if($row = $result->fetch_array()){
		$idSucursal = $row['idSucursal'];
		$nombre = $row['nombre'];
		$direccion = $row['direccion'];
		$telefono = $row['telefono'];
		$descripcion = $row['descripcion'];
		$telefonoRespaldo = $row['telefonoRespaldo'];
		$capacidad = $row['capacidad'];
		$croquis = $row['croquis'];
	}
	$mysqli->close();

	return array($idSucursal, $nombre, $descripcion, $telefono, $telefonoRespaldo, $direccion, $capacidad, $croquis);
}

function editarSucursal($id, $nombre, $descripcion, $tel, $telResp, $direccion, $capacidad, $croquis){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$mysqli->autocommit(false);
	if(!isset($croquis)){
		$croquis = getCroquis($id);
	}

	$result = $mysqli->query("UPDATE `preparac_regularizacion`.`SUCURSAL` SET `nombre`='$nombre', `descripcion`='$descripcion', `telefono`='$tel', `telefonoRespaldo`='$telResp', `direccion`='$direccion', `capacidad`='$capacidad', `croquis`='$croquis' WHERE `idSucursal`='$id';");
	if($result){
		$mysqli->commit();
	}
	else{
		$mysqli->rollback();
	}
	$mysqli->close();
	return $result;
}

function getCroquis($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select croquis from SUCURSAL where idSucursal = '$id';");
	$croquis=false;
	$mysqli->close();
	if($row = $result->fetch_array()){
		$croquis = $row[0];
	}
	return $croquis;
}
?>
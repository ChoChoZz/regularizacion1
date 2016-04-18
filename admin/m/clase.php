<?php 
header('Content-Type: text/html; charset=UTF-8');

function agregarClase($nombreClase, $fecha, $horaInicio, $horaFin, $grupo){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	$result = $mysqli->query("INSERT INTO `CLASE` (`idClase`, `nombre`, `fecha`, `horaInicio`, `horaFin`, `GRUPO_idgrupo`) VALUES (NULL, '$nombreClase', '$fecha', '$horaInicio', '$horaFin', '$grupo');");
	$mysqli->close();
	return $result;	
}

function getProxIdClase(){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("select AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA='preparac_regularizacion' and TABLE_NAME='CLASE';");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return $row[0];
	}
	return false;
}

function verClase($id){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select idClase, CLASE.nombre as clase, CLASE.fecha, CLASE.horaInicio, CLASE.horaFin from CLASE where CLASE.GRUPO_idgrupo = $id");
	$mysqli->close();
	$clase = array();
	$fecha = array();
	$horaInicio = array();
	$horaFin = array();
	$idClase = array();
	$i=0;

	while($row = $result->fetch_array()){
		$idClase[$i] = $row['idClase'];
		$clase[$i] = $row['clase'];
		$fecha[$i] = $row['fecha'];
		$horaInicio[$i] = $row['horaInicio'];
		$horaFin[$i] = $row['horaFin'];
		$i++;
	}
	return array($clase, $fecha, $horaInicio, $horaFin, $idClase);
}

function borrarClase($id){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("DELETE FROM CLASE WHERE GRUPO_idgrupo = $id;");
	$mysqli->close();
	return $result;
}

function getClaseEditar($id){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select * from CLASE where GRUPO_idgrupo = $id");
	$mysqli->close();
	$clase = array();
	$fecha = array();
	$horaInicio = array();
	$horaFin = array();
	$idClase = array();
	$i=0;

	while($row = $result->fetch_array()){
		$idClase[$i] = $row['idClase'];
		$clase[$i] = $row['nombre'];
		$fecha[$i] = $row['fecha'];
		$horaInicio[$i] = $row['horaInicio'];
		$horaFin[$i] = $row['horaFin'];
		$i++;
	}
	return array($idClase, $clase, $fecha, $horaInicio, $horaFin);
}

function borrarClaseEditar($id){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("DELETE FROM CLASE WHERE idClase = $id;");
	$mysqli->close();
	return $result;
}

function editarClase($idClase, $clase, $fecha, $horaInicio, $horaFin){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("UPDATE clase SET nombre = '$clase', fecha = '$fecha', horaInicio = '$horaInicio', horaFin = '$horaFin' WHERE idClase = $idClase;");
	$mysqli->close();
	return $result;
}

function clasesComprobante($idGrupo){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("SELECT fecha, horaInicio, horaFin FROM CLASE WHERE GRUPO_idgrupo = $idGrupo;");
	
	$fecha = array();
	$horaInicio = array();
	$horaFin = array();
	$i=0;
	while($row = $result->fetch_array()){
		$fecha[$i] = $row['fecha'];
		$horaInicio[$i] = $row['horaInicio'];
		$horaFin[$i] = $row['horaFin'];
		$i++;
	}
	$mysqli->close();
	if($fecha[0]){
		return array($fecha, $horaInicio, $horaFin);
	}
	else{
		return false;
	}
}
?>
<?php 
header('Content-Type: text/html; charset=UTF-8');

function getProxIdCurso(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("select AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA='preparac_regularizacion' and TABLE_NAME='CURSO';");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return $row[0];
	}
	return false;
}

function agregarCurso($nombre, $descripcion, $temario, $subdominio, $imagen){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("INSERT INTO `CURSO` (`idCurso`, `nombre`, `descripcion`, `temario`, `subdominio`, `imagen`) VALUES (NULL, '$nombre', '$descripcion', '$temario', '$subdominio', '$imagen');");
	$mysqli->close();
	return $result;
}

function getCursos(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("SELECT idCurso, nombre, descripcion, subdominio, imagen from CURSO order by nombre");
	$i=0;
	$idCurso = array();
	$nombre = array();
	$descripcion = array();
	$subdominio = array();
	$imagen = array();

	while($row = $result->fetch_array()){
		$idCurso[$i] = $row['idCurso'];
		$nombre[$i] = $row['nombre'];
		$descripcion[$i] = $row['descripcion'];
		$subdominio[$i] = $row['subdominio'];
		$imagen[$i] = $row['imagen'];
		$i++;
	}

	$mysqli->close();
	return array($idCurso, $nombre, $descripcion, $subdominio, $imagen);
}

function verCurso($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("SELECT * from CURSO where idCurso = $id;");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return array($row['idCurso'], $row['nombre'], $row['descripcion'], $row['temario'], $row['subdominio'], $row['imagen']);
	}
	return null;
}

function eliminarCurso($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result= $mysqli->query("DELETE FROM `preparac_regularizacion`.`CURSO` WHERE `idCurso`='$id';");
	$mysqli->close();
	return $result;
}

function editar($query){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query($query);
	$mysqli->close();
	return $result;
}

function obtenerInformacionCurso($idCurso){
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		//linea para escapar acentos
		mysql_query("SET NAMES 'utf8'");

		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return NULL;
		}

		$result = $conn->query("SELECT * FROM CURSO WHERE idCurso='$idCurso';");

		if ($result->num_rows > 0) {
			$conn->close();
			return $result;
		} else if($result->num_rows == 0){
			$conn->close();
			return 0;
		}
	}
?>
<?php
header('Content-Type: text/html; charset=UTF-8');

function catalogosCrearGrupo(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	$result = $mysqli->query("Select idSucursal, nombre from SUCURSAL order by nombre;");
	$idSucursal = array();
	$sucursales = array();
	$i=0;

	while($row = $result->fetch_array()){
		$idSucursal[$i] = $row['idSucursal'];
		$sucursales[$i] = $row['nombre'];
		$i++;
	}

	$result = $mysqli->query("Select idCurso, nombre from CURSO order by nombre;");
	$idCurso = array();
	$cursos = array();
	$i=0;

	while($row = $result->fetch_array()){
		$idCurso[$i] = $row['idCurso'];
		$cursos[$i] = $row['nombre'];
		$i++;
	}

	$mysqli->close();
	return array($idSucursal, $sucursales, $idCurso, $cursos);
}

function agregarGrupo($idGrupo, $nombreGrupo, $capacidad, $costo, $periodoInscripcion, $fechaPago, $sucursal, $curso){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	$result = $mysqli->query("INSERT INTO `GRUPO` (`idGrupo`, `nombre`, `capacidad`, `costo`, `periodoInscripcion`, `fechaPago`, `SUCURSAL_idsucursal`, `CURSO_idcurso`, `estatus`) VALUES ('$idGrupo', '$nombreGrupo', '$capacidad', '$costo', '$periodoInscripcion', '$fechaPago', '$sucursal', '$curso', 'Activo');");
	$mysqli->close();
	return $result;	
}

function getProxIdGrupo(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("select AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA='preparac_regularizacion' and TABLE_NAME='GRUPO';");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return $row[0];
	}
	return false;
}

function borrarGrupo($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("DELETE FROM GRUPO WHERE idGrupo = $id;");
	$mysqli->close();
	return $result;
}

function getGrupos(){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$idGrupo = array();
	$nombre = array();
	$capacidad = array();
	$costo = array();
	$periodo = array();
	$fechaPago = array();
	$estatus = array();
        $registrados = array();
        $pagados = array();
	$i=0;

	$result = $mysqli->query("SELECT * FROM GRUPO ORDER BY estatus;");
        
	while($row = $result->fetch_array()){
		$idGrupo[$i] = $row['idGrupo'];
		$nombre[$i] = $row['nombre'];
		$capacidad[$i] = $row['capacidad'];
		$costo[$i] = $row['costo'];
		$periodo[$i] = $row['periodoInscripcion'];
		$fechaPago[$i] = $row['fechaPago'];
		$estatus[$i] = $row['estatus'];

                $result1 = $mysqli->query("SELECT COUNT(*) FROM GRUPO_has_USUARIO WHERE GRUPO_idgrupo=".$row['idGrupo'].";");
                $row1 = $result1->fetch_array();
                $registrados[$i] = $row1[0];

                $result2 = $mysqli->query("SELECT COUNT(*) FROM PAGO WHERE (estatus='Pagado' OR estatus='Medio') AND GRUPO_idgrupo=".$row['idGrupo'].";");
                $row2 = $result2->fetch_array();
                $pagados[$i] = $row2[0];

		$i++;
	}

	$mysqli->close();

	return array($idGrupo, $nombre, $capacidad, $costo, $periodo, $fechaPago, $estatus, $registrados, $pagados);

}

function getEstatus($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	
	$result = $mysqli->query("SELECT estatus FROM GRUPO where idGrupo = $id;");
	$mysqli->close();
	if($row = $result->fetch_array()){
		$estatus = $row['estatus'];
		return $estatus;
	}
	else{
		return null;
	}
}

function cambiarEstatus($id, $estatus){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	if($estatus == "Activo"){
		$result = $mysqli->query("UPDATE  GRUPO SET estatus = 'Inactivo' WHERE idGrupo = $id;");
	}
	else{
		$result = $mysqli->query("UPDATE  GRUPO SET estatus = 'Activo' WHERE idGrupo = $id;");
	}
	$mysqli->close();

	return $result;
}

function verGrupo($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	$result = $mysqli->query("Select GRUPO.idGrupo, SUCURSAL.nombre as sucursal, CURSO.nombre as curso, GRUPO.nombre as grupo, GRUPO.capacidad, GRUPO.costo, GRUPO.periodoInscripcion as inscripcion from GRUPO join SUCURSAL on SUCURSAL.idSucursal = GRUPO.SUCURSAL_idsucursal join CURSO on GRUPO.CURSO_idcurso = CURSO.idCurso where GRUPO.idGrupo = $id;");



	$result1 = $mysqli->query("SELECT COUNT(*) FROM GRUPO_has_USUARIO WHERE GRUPO_idgrupo=$id;");
	if($row1 = $result1->fetch_array()){
		$registrados = $row1[0];
	}
	else{
			return false;
	}

	$result2 = $mysqli->query("SELECT COUNT(*) FROM PAGO WHERE (estatus='Pagado' OR estatus='Medio') AND GRUPO_idgrupo=$id;");
	if($row2 = $result2->fetch_array()){
		$pagados = $row2[0];
	}
	else{
			return false;
	}
	$mysqli->close();

	if($row = $result->fetch_array()){
		$sucursal = $row['sucursal'];
		$curso = $row['curso'];
		$grupo = $row['grupo'];
		$capacidad = $row['capacidad'];
		$costo = $row['costo'];
		$inscripcion = $row['inscripcion'];
		return array($sucursal, $curso, $grupo, $capacidad, $costo, $inscripcion, $pagados, $registrados);
	}
	else{
		return false;
	}
}

function getGrupoEditar($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');

	$result = $mysqli->query("Select * from GRUPO where idGrupo = $id;");
	$mysqli->close();
	if($row = $result->fetch_array()){
		$idGrupo = $row['idGrupo'];
		$grupo = $row['nombre'];
		$capacidad = $row['capacidad'];
		$costo = $row['costo'];
		$periodoInscripcion = $row['periodoInscripcion'];
		$fechaPago = $row['fechaPago'];
		$idSucursal = $row['SUCURSAL_idsucursal'];
		$idCurso = $row['CURSO_idcurso'];
		$estatus = $row['estatus'];
		return array($idGrupo, $grupo, $capacidad, $costo, $periodoInscripcion, $fechaPago, $idSucursal, $idCurso, $estatus);
	}
	return false;
}

function buscarGrupoPorCurso($idCurso){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select * from GRUPO where CURSO_idcurso = $idCurso;");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return true;
	}
	else{
		return false;
	}
}

function buscarGrupoPorSucursal($idSucursal){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select * from GRUPO where SUCURSAL_idsucursal = $idSucursal;");
	$mysqli->close();
	if($row = $result->fetch_array()){
		return true;
	}
	else{
		return false;
	}
}

function mostrarClases($idGrupo){

	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		//linea para escapar acentos
	mysqli_query($conn, "SET NAMES 'utf8'");

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result = $conn->query("SELECT nombre, DATE_FORMAT(fecha, '%w') AS diaSemana, DATE_FORMAT(fecha, '%d ') AS numeroDia, DATE_FORMAT(fecha, '%c') AS mes, DATE_FORMAT(horaInicio,'%h:%i %p') AS inicio, DATE_FORMAT(horaFin,'%h:%i %p') AS fin FROM CLASE WHERE GRUPO_idgrupo ='$idGrupo';");

	if ($result->num_rows > 0) {
		$conn->close();
		return $result;
	} else if($result->num_rows == 0){
		$conn->close();
		return 0;
	}
}

function obtenerInformacionGrupo($idGrupo){
	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		//linea para escapar acentos
	mysqli_query($conn, "SET NAMES 'utf8'");

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result = $conn->query("SELECT * FROM GRUPO WHERE idGrupo='$idGrupo';");

	if ($result->num_rows > 0) {
		$conn->close();
		return $result;
	} else if($result->num_rows == 0){
		$conn->close();
		return 0;
	}
}

function mostrarTodosGrup(){
	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result = $conn->query("SELECT * FROM GRUPO;");

	if ($result->num_rows > 0) {
		$conn->close();
		return $result;
	} else if($result->num_rows == 0){
		$conn->close();
		return 0;
	}
}

function editarGrupo($idGrupo, $grupo, $capacidad, $costo, $periodoInscripcion, $fechaPago, $idSucursal, $idCurso){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("UPDATE GRUPO SET nombre = '$grupo', capacidad = '$capacidad', costo = '$costo', periodoInscripcion = '$periodoInscripcion', fechaPago = '$fechaPago', SUCURSAL_idsucursal = '$idSucursal', CURSO_idcurso = '$idCurso' WHERE idGrupo = $idGrupo;");
	$mysqli->close();
	return $result;
}

function gruposDeUsuario($id){
	//$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("SELECT GRUPO.nombre from GRUPO join GRUPO_has_USUARIO on GRUPO_has_USUARIO.USUARIO_idusuario = $id");
	$mysqli->close();
	$grupos = array();
	$i=0;

	while($row = $result->fetch_array()){
		$grupos[$i] = $row[0];
		$i++;
	}
	$grupos = array_unique($grupos);
	return $grupos;
}

function mostrarGruposClase($idCurso){
		$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		//$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");

		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}
		$result = $conn->query("SELECT idGrupo, nombre, costo FROM GRUPO WHERE estatus='Activo' AND CURSO_idcurso='$idCurso';");
		if ($result->num_rows > 0) {
			$conn->close();
			return $result;
		} else {
			$conn->close();
			return 0;
		}
	}

?>
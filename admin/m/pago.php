<?php

header('Content-Type: text/html; charset=UTF-8'); 

function obtenerPagosUsuario($idUsuario){
	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
	//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result = $conn->query("SELECT PAGO.idPago, PAGO.monto, PAGO.estatus AS pagoEstatus, GRUPO.nombre AS nombreGrupo, GRUPO.costo FROM USUARIO JOIN PAGO ON USUARIO.idUsuario = PAGO.USUARIO_idusuario JOIN GRUPO ON PAGO.GRUPO_idgrupo = GRUPO.idGrupo WHERE USUARIO.idUsuario='$idUsuario';");

	if ($result->num_rows > 0) {
		$conn->close();
		return $result;
	} else if($result->num_rows == 0){
		$conn->close();
		return 0;
	}
}

function liquidarPago($idPago, $monto){
	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
	//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result1 = $conn->query("SELECT monto, USUARIO_idusuario, GRUPO_idgrupo FROM PAGO WHERE idPago='$idPago';");

	$row1 = $result1->fetch_assoc();
	$idUsuario = $row1["USUARIO_idusuario"];
	$idGrupo = $row1["GRUPO_idgrupo"];

	$sql ="UPDATE PAGO SET monto = '$monto', estatus = 'Pagado' WHERE idPago='$idPago';";

	if ($conn->query($sql) === TRUE) {
		$result2 = $conn->query("SELECT CLASE_idclase FROM USUARIO_has_CLASE WHERE USUARIO_idusuario='$idUsuario';");
		if($result2->num_rows > 0){
			$conn->close();
 	   		return 1;
		}else{
			$result3 = $conn->query("SELECT * FROM CLASE WHERE GRUPO_idgrupo='$idGrupo';");
			while($row3 = $result3->fetch_assoc()) {
				$result4 = $conn->query("INSERT INTO `preparac_regularizacion`.`USUARIO_has_CLASE`(`USUARIO_idusuario`,`CLASE_idclase`, `asistencia`) VALUES('$idUsuario', '".$row3["idClase"]."', '0');");
			}
			$conn->close();
 	   		return 1;
		}
	} else {
		$conn->close();
	    return 0;
	}
}

function registrarPago($idPago, $cantidad){
	$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
	//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');

	if (mysqli_connect_errno()) {
		printf("Conexion fallida: %s\n", mysqli_connect_error());
		$conn->close();
		return NULL;
	}

	$result1 = $conn->query("SELECT monto, USUARIO_idusuario, GRUPO_idgrupo FROM PAGO WHERE idPago='$idPago';");

	$row1 = $result1->fetch_assoc();
	$monto = $row1["monto"];
	$idUsuario = $row1["USUARIO_idusuario"];
	$idGrupo = $row1["GRUPO_idgrupo"];

	$total = $monto + $cantidad;
	echo $total;

	$sql ="UPDATE PAGO SET monto = '$total', estatus = 'Medio' WHERE idPago='$idPago';";

	if ($conn->query($sql) === TRUE) {
		$result2 = $conn->query("SELECT CLASE_idclase FROM USUARIO_has_CLASE WHERE USUARIO_idusuario='$idUsuario';");
		if($result2->num_rows > 0){
			$conn->close();
 	   		return 1;
		}else{
			$result3 = $conn->query("SELECT * FROM CLASE WHERE GRUPO_idgrupo='$idGrupo';");
			while($row3 = $result3->fetch_assoc()) {
				$result4 = $conn->query("INSERT INTO `preparac_regularizacion`.`USUARIO_has_CLASE`(`USUARIO_idusuario`,`CLASE_idclase`, `asistencia`) VALUES('$idUsuario', '".$row3["idClase"]."', '0');");
			}
			$conn->close();
 	   		return 1;
		}
	} else {
		$conn->close();
	    return 0;
	}
}

?>
<?php 
header('Content-Type: text/html; charset=UTF-8');

function iniciarSesion($email, $password){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("select TIPOUSUARIO.tipo as tipo, USUARIO.nombre as usuario from USUARIO join TIPOUSUARIO on TIPOUSUARIO.idTipoUsuario = USUARIO.tipousuario_idtipousuario where USUARIO.correo = '$email' and USUARIO.contrasena = '$password';");
	if($row=$result->fetch_array()){
		$mysqli->close();
		return array($row['tipo'], $row['usuario']);
	}
	$mysqli->close();
	return false;
}

function recuperarContrasena($email){
	$mysqli = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
	//$mysqli = new mysqli('localhost', 'root', 'root', 'preparac_regularizacion');
	$result = $mysqli->query("Select contrasena from USUARIO where correo = '$email';");
	if($row = $result->fetch_array()){
		$contrasena = $row[0];
		$mysqli->close();
		return $contrasena;
	}
	else{
		$mysqli->close();
		return null;
	}
}
?>
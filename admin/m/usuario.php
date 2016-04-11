<?php 
  	session_start();

	header('Content-Type: text/html; charset=UTF-8'); 
	include("enviarCorreoPocosLugares.php");

	function crearUsuario($nombre, $primerApellido, $segundoApellido, $contrasena, $sexo, $correo, $telefono, $celular, $calle, $colonia, $municipio, $estado, $cp, $tipoUsuario, $status, $grupos){

		/*conexion*/
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');

		/* comprueba la conexión */
		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    exit();
		}
		/*No realizar el commit*/
		$conn->autocommit(false);
		
		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");
		/*Insert Grupo_Usuario*/
		$result = $conn->query("INSERT INTO `preparac_regularizacion`.`USUARIO` (`idUsuario` ,`tipousuario_idtipousuario`, `nombre`, `primerApellido`, `segundoApellido`, `sexo`, `contrasena`, `correo`, `telefono`, `celular`, `cp`, `estado`, `municipio`, `colonia`, `calle`, `status`) VALUES (NULL, '$tipoUsuario', '$nombre', '$primerApellido', '$segundoApellido', '$sexo', '$contrasena', '$correo', '$telefono', '$celular', '$cp', '$estado', '$municipio', '$colonia', '$calle', '$status');");
		
		/*Realiza la consulta correctamente*/
		if ($result == true){
			/*Obtiene el id del ultimo usuario registrado*/
			$resulta = $conn->query("SELECT MAX(idUsuario) from USUARIO;");
			if($id = $resulta->fetch_array()){
				$idUsuario = $id[0];
			}
			
			/*Verifica cuantos grupos selecciono*/
			if(count($grupos) == 0){
				$conn -> commit(); 
				$conn->close();
				return 3;
			}
			/*Selecciono mas de un grupo*/
			elseif(count($grupos) > 1){
				/*Realiza INSERT en la realcion ALUMNO_GRUPO*/
				for ($i=0; $i < count($grupos); $i++) {
					$idGrupo = $grupos[$i];
					$resultado = $conn->query("INSERT INTO `preparac_regularizacion`.`GRUPO_has_USUARIO`(`GRUPO_idgrupo`,`USUARIO_idusuario`) VALUES('$idGrupo','$idUsuario');");
				}
				/*Realiza INSERT en PAGO*/
				for ($i=0; $i < count($grupos); $i++) {
					$idGrupo = $grupos[$i];
					$resultado1 = $conn->query("INSERT INTO `preparac_regularizacion`.`PAGO`(`USUARIO_idusuario`,`idPago`,`GRUPO_idgrupo`,`monto`,`comentario`,`validacion`,`voucher`,`estatus`) VALUES('$idUsuario', NULL, '$idGrupo', NULL, NULL, NULL, NULL, 'Pendiente');");
				}

				/*Verifica la disponibilidad de los grupos
				para el envio de un correo*/
				for ($k=0; $k < count($grupos); $k++) {
					$idGrupo = $grupos[$k];
					$disponibles = verificarCupo($idGrupo);
					/*Se verifica si quedan 2 o cupos disponibles*/
					if ($disponibles <= 1 ) {
						//Funcion para el envio de correo
						$res = $conn->query("SELECT nombre FROM GRUPO WHERE idGrupo='$idGrupo';");
						$raw = $res->fetch_assoc();
						pocosLugares($raw["nombre"]);
						//Cambiar estado de grupos sin ya no hay cupos disponibles
						if($disponibles <= 0){
							$estatusGrupo = $conn->query("UPDATE GRUPO SET estatus='Inactivo' WHERE idGrupo = '".$grupos[0]."'");
						}
					}
				}

				$conn -> commit(); 
				$conn->close();
				unset($grupos);

				//Redireccionar a vista de intrucciones
				if($resultado == true && $resultado1== true){
					$nombreCompleto = $nombre." ".$primerApellido." ".$segundoApellido;
					$_SESSION["idUsuario"] = $idUsuario;
					$_SESSION["nombreCompleto"] = $nombreCompleto;
					return 1;
				}else{
					return 0;
				}
			}
			/*Selecciono un solo grupo*/
			else{
				/*Insert para relacion grupo_alumno */
				$resultado = $conn->query("INSERT INTO `preparac_regularizacion`.`GRUPO_has_USUARIO`(`GRUPO_idgrupo`,`USUARIO_idusuario`) VALUES('".$grupos[0]."','$idUsuario');");
				
				/*Insert para pago*/
				$resultado1 = $conn->query("INSERT INTO `preparac_regularizacion`.`PAGO`(`USUARIO_idusuario`,`idPago`,`GRUPO_idgrupo`,`monto`,`comentario`,`validacion`,`voucher`,`estatus`) VALUES('$idUsuario', NULL, '".$grupos[0]."', NULL, NULL, NULL, NULL, 'Pendiente');");

				/*Se verifica si quedan 2 o cupos disponibles*/
				$disponibles = verificarCupo($grupos[0]);
				if ($disponibles <= 1 ) {
					//Funcion para el envio de correo
					$res = $conn->query("SELECT nombre FROM GRUPO WHERE idGrupo='".$grupos[0]."';");
					$raw = $res->fetch_assoc();
					pocosLugares($raw["nombre"]);
					//Cambiar estado de grupos sin ya no hay cupos disponibles
					if($disponibles <= 0){
						$estatusGrupo = $conn->query("UPDATE GRUPO SET estatus='Inactivo' WHERE idGrupo = '".$grupos[0]."'");
					}

				}

				$conn -> commit(); 
				$conn->close();
				unset($grupos);

				//Redireccionar a vista de intrucciones
				if($resultado == true && $resultado1== true){
					$nombreCompleto = $nombre." ".$primerApellido." ".$segundoApellido;
					$_SESSION["idUsuario"] = $idUsuario;
					$_SESSION["nombreCompleto"] = $nombreCompleto;
					return 1;
				}else{
					return 0;
				}

			}

			$conn -> commit();
			$conn->close();
			unset($grupos);
			
			return 1;
		}
		/*No realiza el insert del usuario correctamente*/
		else{
			echo "No pude realizar el INSERT DE USUARIO";
			$conn->rollback();
			$conn->close();
			unset($grupos);
			return 0;
		}
	}

	function ultimoUsuario(){
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		/* comprueba la conexión */
		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    exit();
		}
		
		$result = $conn->query("SELECT MAX(idUsuario) from USUARIO;");
		if($id = $result->fetch_array()){
			$conn->close();
			return $id[0];
		}
		//Cuantos grupos se han seleccionado
	}

	function mostrarGrupo(){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");

		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");

		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}
		$result = $conn->query("SELECT idGrupo, nombre, costo FROM GRUPO WHERE estatus='Activo';");
		if ($result->num_rows > 0) {
			$conn->close();
			return $result;
		} else {
			$conn->close();
			return 0;
		}
	}

	function buscarCorreo($correo){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");

		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");

		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}

		$result = $conn->query("SELECT correo FROM USUARIO WHERE correo = '$correo';");
		if ($result->num_rows > 0) {
			$conn->close();
			return 1;
		} else {
			$conn->close();
			return 0;
		}
	}

	function verificarCupo($idGrupo){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");
		
		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}	

		//Se realiza la consulta de los alumnos registrados a un grupo
		$resultado2 =$conn->query("SELECT USUARIO_idusuario FROM GRUPO_has_USUARIO WHERE GRUPO_idgrupo = '$idGrupo';");
		$numeroRegistrados = $resultado2->num_rows;

		//Se realia la consulta de la capacidad que tiene un grupo
		$resultado3 =$conn->query("SELECT capacidad, nombre FROM GRUPO WHERE idGrupo = '$idGrupo';");
		$fila = $resultado3->fetch_assoc();
		$capacidad = $fila["capacidad"]; 

		$nombreGrupo = $fila["nombre"];

		$disponibles = $capacidad - $numeroRegistrados;
		return $disponibles;
	}

	function mostrarGruposAlumno($idUsuario){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");

		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}	

		$result = $conn->query("SELECT GRUPO_idgrupo FROM GRUPO_has_USUARIO WHERE USUARIO_idusuario = '$idUsuario';");
		if ($result->num_rows > 0) {
			$conn->close();

			while($row = $result->fetch_assoc()) {
				$resultado[] = $row["GRUPO_idgrupo"];
			}
			return $resultado;
		} else {
			$conn->close();
			return 0;
		}
	}

	function obtenerCorreo($idUsuario){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		//linea para escapar acentos
		mysqli_query($conn, "SET NAMES 'utf8'");
		
		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}	

		$result = $conn->query("SELECT correo FROM USUARIO WHERE idUsuario = '$idUsuario';");
		$row = $result->fetch_assoc();
		if ($result->num_rows > 0) {
			$conn->close();
			return $row["correo"];
		} else {
			$conn->close();
			return 0;
		}	
	}

        function mostrarTodosUsua(){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");
		
		if (mysqli_connect_errno()) {
		    printf("Conexion fallida: %s\n", mysqli_connect_error());
		    $conn->close();
		    return null;
		}	

		$result = $conn->query("SELECT USUARIO.idUsuario, USUARIO.nombre AS nombreUsuario, USUARIO.primerApellido, USUARIO.segundoApellido, USUARIO.correo, USUARIO.telefono, USUARIO.celular, GRUPO.nombre AS nombreGrupo, GRUPO.idGrupo FROM USUARIO JOIN GRUPO_has_USUARIO ON USUARIO.idUsuario = GRUPO_has_USUARIO.USUARIO_idusuario JOIN GRUPO ON GRUPO_has_USUARIO.GRUPO_idgrupo = GRUPO.idGrupo ORDER BY `USUARIO`.`primerApellido` ASC;");
		
		$row = $result->fetch_assoc();

		if ($result->num_rows > 0) {
			$conn->close();
			return $result;
		} else {
			$conn->close();
			return false;
		}	
	}

	function verUsuario($id){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");

		$result = $conn->query("SELECT * FROM USUARIO WHERE idUsuario=$id;");
		$conn->close();
		if($row = $result->fetch_array()){
			$nombre = $row['nombre'];
			$primerApellido = $row['primerApellido'];
			$segundoApellido = $row['segundoApellido'];
			$sexo = $row['sexo'];
			$correo = $row['correo'];
			$telefono = $row['telefono'];
			$celular = $row['celular'];
			$cp = $row['cp'];
			$estado = $row['estado'];
			$municipio = $row['municipio'];
			$colonia = $row['colonia'];
			$calle = $row['calle'];
			$status = $row['status'];
			return array($nombre, $primerApellido, $segundoApellido, $sexo, $correo, $telefono, $celular, $cp, $estado, $municipio, $colonia, $calle, $status);
		}
		else{
			return false;
		}
	}

	function eliminarUsuario($id){
		//$conn = new mysqli('localhost', 'preparac_reguIPN', ',+.^ZV[PvE.P]+keKM', 'preparac_regularizacion');
		$conn = new mysqli("localhost", "root", "root", "preparac_regularizacion");

		$result = $conn->query("DELETE FROM GRUPO_has_USUARIO WHERE USUARIO_idusuario = $id");
		if(!$result){
			$conn->rollback();
			$conn->close();
			return false;
		}

		$result = $conn->query("DELETE FROM USUARIO_has_CLASE WHERE USUARIO_idusuario = $id");
		if(!$result){
			$conn->rollback();
			$conn->close();
			return false;
		}

		$result = $conn->query("DELETE FROM PAGO WHERE USUARIO_idusuario = $id");
		if(!$result){
			$conn->rollback();
			$conn->close();
			return false;
		}
		
		$result = $conn->query("DELETE FROM USUARIO WHERE idUsuario = $id");
		if(!$result){
			$conn->rollback();
			$conn->close();
			return false;
		}

		$conn->close();
		return true;
	}
 ?>

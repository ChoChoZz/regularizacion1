<?php 
	header('Content-Type: text/html; charset=UTF-8'); 

	include("../m/pago.php");

	$idPago = $_POST['idPago'];
	$cantidad = $_POST['cantidad'];
	
	$result = registrarPago($idPago, $cantidad);
	if($result == 1 || $result == "1"){
	   echo "1";
	 }else{
	 	echo "0";
	}

?>
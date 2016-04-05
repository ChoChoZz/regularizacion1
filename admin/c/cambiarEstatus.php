<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/grupo.php';

if(isset($_POST['id'])){
	$id = $_POST['id'];
}
else{
	echo false;
	exit();
}

$estatusViejo = getEstatus($id);

if(cambiarEstatus($id, $estatusViejo)){
	echo true;
	exit();
}
else{
	echo false;
	exit();
}
?>
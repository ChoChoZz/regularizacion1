<?php
header('Content-Type: text/html; charset=UTF-8');

function main($id, $nombre, $descripcion, $temario, $link, $imagen){
	$crearDirectorio = mkdir("../../$link");
	if(!$crearDirectorio){
		return false;
		exit();
	}
	$plantilla = file_get_contents("../v/curso/template/index.html");
	$plantilla = str_replace("###id###", $id, $plantilla);
	$plantilla = str_replace("###nombre###", $nombre, $plantilla);
	$plantilla = str_replace("###descripcion###", $descripcion, $plantilla);
	if(isset($temario)){
		$plantilla = str_replace("###temario###", "../admin/assets/temarios/$temario", $plantilla);
		$plantilla = str_replace("###descargar###", "download", $plantilla);
	}
	else{
		$plantilla = str_replace("###temario###", "#", $plantilla);
		$plantilla = str_replace("###descargar###", "", $plantilla);
	}
	$pagina = fopen("../../$link/index.html", "w");
	if(!$pagina){
		rmdir("../../$link");
		return false;
		exit();
	}
	$escribirPagina = fwrite($pagina, $plantilla);
	if(!$escribirPagina){
		unlink("../../$link/index.html");
		rmdir("../../$link");
		return false;
		exit();
	}
	fclose($pagina);
	if(copy("../v/curso/template/style.css", "../../$link/style.css")){
		return true;
		exit();
	}
	else{
		unlink("../../$link/index.html");
		unlink("../../$link/style.css");
		rmdir("../../$link");
		return false;
		exit();
	}
}

?>
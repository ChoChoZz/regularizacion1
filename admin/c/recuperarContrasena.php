<?php 
header('Content-Type: text/html; charset=UTF-8');
require '../m/admin.php';

$email = $_POST['email'];
if(recuperarContrasena($email)){
     $cabecera = 'Content-type: text/html; charset=utf-8' . "\r\n";
     $cabecera .= 'From: Regularizacion IPN <noreply@regularizacionipn.com>' . "\r\n";
     $mail = mail($email, "Recuperar contraseña - Regularización IPN", "<h1>Regularización IPN</h1>Tu contraseña es <b>".recuperarContrasena($email)."</b>", $cabecera);
     echo $mail;
     exit();
}
else{
     echo false;
     exit();
}
?>
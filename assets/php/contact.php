<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$destinatario = 'info@parainvernaderos.mx';
$asunto = 'Nuevo mensaje en formulario de contacto Invergrow';

$cuerpoMensaje = "De: $nombre \n";
$cuerpoMensaje .= "Asunto: $subject \n";
$cuerpoMensaje .= "Email: $email \n";
$cuerpoMensaje .= "Teléfono: $phone \n";
$cuerpoMensaje .= "Mensaje: $message";

$header = 'From: hola@parainvernaderos.mx \n';
$header .= 'Reply to: noreply@parainvernaderos.mx';


mail($destinatario, $asunto, $cuerpoMensaje, $header);
header('Location:../../mensaje-enviado');

?>
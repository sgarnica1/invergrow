<?php

$nombre = $_POST['name']:
$email = $_POST['email']:
$phone = $_POST['phone']:
$subject = $_POST['subject']:
$message = $_POST['message']:


$destinatario = 'sgarnica1902@gmail.com';
$asunto = 'Nuevo mensaje en formulario de contacto Invergrow';

$cuerpoMensaje = "De: $nombre \n"
$cuerpoMensaje .= "Asunto: $subject \n"
$cuerpoMensaje .= "Email: $email \n"
$cuerpoMensaje .= "Teléfono: $phone \n"
$cuerpoMensaje .= "Mensaje: $message";


mail($destinatario, $asunto, $cuerpoMensaje);
header('Location: https://platzi.com')

?>
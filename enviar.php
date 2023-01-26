<?php
$name = $_POST["nombre"];
$apellido = $_POST ["apellido"];
$email = $_POST["e-mail"];
$comentarios = $_POST ["comentarios"];

$header = "From: ". $email . "\r\n";
$header .= "x-Mailer:PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $name.  "\r\n";
$mensaje = "Su apellido es: " . $apellido . "\r\n";
$mensaje = "Su email es: " . $email . "\r\n";
$mensaje = "comentario: " . $_POST["comentarios"] . "\r\n";

$para = "gabrielalacort@gmail.com";
$asunto = "asunto del mensaje";

mail($para,$asunto, utf8_decode($mensaje), $header);


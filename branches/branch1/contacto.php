<?php
	$mensaje = $_POST["mensaje"];
	$mensaje.= "\n--------------\n";
	$mensaje.= "\nDe: ". $_POST["nombre"];
	$mensaje.= "\nEmail: ". $_POST["email"];
	
	$destino= "fer1588@hotmail.com";
	$remitente = $_POST["email"];
	$asunto = $_POST["asunto"];
	mail($destino, $asunto, $mensaje, "FROM: $remitente");
	echo "Mensaje enviado. Gracias por contactase.";
?>
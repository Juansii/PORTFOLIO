<?php

$destinatario = $_POST['simonzarauz@gmail.com']
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['contacto'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$header = "Enviado desde el portfolio";

$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;


mail($destinatario, $asunto, $mensajeCompleto, $header); 
echo "<script>aler('correo enviado exitosamente!')</script>"; 
echo "<script>setTimeout(\"locatio.href='index.html'\", 1000)</script>";
?>
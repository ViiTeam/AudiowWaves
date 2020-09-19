<?php 

$destino = "alfcon1133@gmail.com";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["email"];
$mensaje = $_POST["mensaje"];

$header = "Hola desde Audio Wabes";
$cuerpo = $correo. "\n" . $nombre . " ".$apellido . "\n" . $mensaje;

mail($destino, "Audio Wabes", $cuerpo, $header);
echo "<script>alert('Mensaje enviado')</script>";
echo "<script>setTimeout(\"location.href='contacto.php'\",1000)</script>";



?>
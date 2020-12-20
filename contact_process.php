<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $subject . " \r\n";
$mensaje .= "Mensaje: " . $mensaje . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'emirogonzart@gmail.com';
$asunto = 'Mensaje de mi sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header)){
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='http://bluuweb.cl/plantilla-1/index.html';</script>";
}
?>

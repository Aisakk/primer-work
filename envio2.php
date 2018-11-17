<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

require 'phpmailer/PHPMailerAutoload.php';


if(isset($_POST['enviar']))
{
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);

try
{
$mail->SMTPDebug = 2;
$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;
//Cambia esto por tu correo de gmail
$mail->Username = 'perfectosssjh2@gmail.com'; // SMTP username
//Password de tu correo de gmail
$mail->Password = 'DIOSesmipaz';
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; 
$mail->setFrom($correo, $nombre); 
$mail->addAddress($correo, $nombre); 
$mail->Subject = $asunto;
$mail->Body = "Nombre: ". $nombre ."r\nAsunto: ". $asunto ."\r\nCorreo: ". $correo .
    "\r\nMensaje: ". $mensaje;
echo "<hr>";
//echo "<div style=\"display:none;\">"; // descomentar esto para ocultar la comunicacion con el servidor
$mail->send();
//echo "</div>"; // descomentar esto para ocultar la comunicacion con el servidor
header('location:index.html');
} catch (Exception $e) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo . "<br>";
}
}
?>
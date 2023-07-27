<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];
$asunto = $_POST['subject'];


$header = 'from: '.$email."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Este mensaje fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$email."\r\n";
// $message .= "Telefono: ".$telefono."\r\n";
$message .= "Mensaje: ".$mensaje."\r\n";
$message .= "Enviado el: ".date('d/m/Y',time());

//ceo@codeskills.com.co
$para = 'ceo@codeskills.com.co';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
}
 ?>
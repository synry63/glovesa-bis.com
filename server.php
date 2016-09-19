<?php
require "lib/PHPMailer-5.2.16/PHPMailerAutoload.php";

//var_dump($_POST);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->CharSet = "UTF-8";
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'gator4168.hostgator.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contacto@displasac.com';                 // SMTP username
$mail->Password = 'adeline63';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom($correo, $nombre);
$mail->addAddress('contacto@displasac.com','Contacto Displasac');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('contacto@displasac.com', 'Contacto Displasac');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $asunto;
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Body    = $comentario;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients!';

if(!$mail->send()) { // si no pudo enviar que hago?
    //echo 'El mensaje no se pudo entregar.';
    //echo 'Error al enviar mensaje: ' . $mail->ErrorInfo;
    header("Location: contactenos.php?state=0");
} else {
     //echo 'Message has been sent :D';
    header("Location: contactenos.php?state=1");
}

?>
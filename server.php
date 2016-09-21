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

$mail2 = new PHPMailer;

$mail2->CharSet = "UTF-8";
$mail2->isSMTP();                                      // Set mailer to use SMTP
$mail2->Host = 'gator4168.hostgator.com';  // Specify main and backup SMTP servers
$mail2->SMTPAuth = true;                               // Enable SMTP authentication
$mail2->Username = 'contacto@displasac.com';                 // SMTP username
$mail2->Password = 'adeline63';                           // SMTP password
$mail2->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail2->Port = 465;                                    // TCP port to connect to

$mail2->setFrom('contacto@displasac.com','Contacto Displasac');
$mail2->addAddress($correo, $nombre);     // Add a recipient


$mail2->isHTML(true);                                  // Set email format to HTML

$mail2->Subject = $asunto;
$mail2->Body    = '<p>Hola, <b>'. $nombre .'</b></p></br><p>Gracias por contactarnos. Dentro de poco un asesor de Displasac se pondrá en contacto contigo.</p></br><p>Atentamente, Displasac.</p>';
//$mail2->Body    = $comentario;
$mail2->AltBody = 'This is the body in plain text for non-HTML mail clients!';

if(!$mail2->send()) { // si no pudo enviar que hago?
    //echo 'El mensaje no se pudo entregar.';
    //echo 'Error al enviar mensaje: ' . $mail2->ErrorInfo;
    header("Location: contactenos.php?state=0");
} else {
    //echo 'Message has been sent :D';
    header("Location: contactenos.php?state=1");
}
?>
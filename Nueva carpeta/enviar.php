<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'tomasmarsili.contacto@gmail.com';                     // SMTP username
	    $mail->Password   = 'guerrero88';                               // SMTP password
	    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom($email, $nombre);
	    $mail->addAddress('tomasmarsili.contacto@gmail.com');     

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Contacto Portafolio';
	    $mail->Body    = 'El correo '. $email . ' te envio el siguiente mensaje:<br>' . $mensaje;

	    $mail->send();
	    header("Location: gracias.php");
	} catch (Exception $e) {
	    echo "Hubo un error al enviar un mensaje: {$mail->ErrorInfo}";
	}

}

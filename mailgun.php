<?php
	// require 'vendor/autoload.php';
	// use Mailgun\Mailgun;

	// # Instantiate the client.
	// $mgClient = new Mailgun('key-');
	// $domain = "asesorvncucuta.com";

	// # Make the call to the client.
	// $result = $mgClient->sendMessage($domain, array(
	//     'from'    => 'Excited User <blog@johnserrano.co>',
	//     'to'      => 'Baz <alvaroserrano@asesorvncucuta.com>',
	//     'subject' => 'Hola',
	//     'text'    => 'Testing some Mailgun awesomness!'
	// ));
	
	$nombres = $_POST['nombres'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = '';   // SMTP username
	$mail->Password = '';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

	$mail->From = $correo;
	$mail->FromName = $nombres;
	$mail->addAddress('alvaroserrano@asesorvncucuta.com');                 // Add a recipient

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

	$mail->Subject = $nombres;
	$mail->Body    = $mensaje;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Tu mensaje fue enviado, Gracias por contactarnos.';
	}
?>

<?php
/*
Template Name: contacto
*/
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
?>

   <?php get_header(); ?>

   <section class="container" style="margin-top: 50px">
		<article class="articulos_principales">
			<article class="row">
				<div class="col-md-8">
					<?php if(have_posts()): the_post(); ?>
						<div id="contacto">
							<h1><?php the_title();?></h1>						        
							<form class="form-horizontal" action="<?php echo get_permalink();?>#contacto" method="post" id="formulario">
							  <div class="form-group">
							    <div class="col-sm-10">
							       <label for="nombres" class="col-sm-2 control-label">Nombres</label>
							      <input type="text" class="form-control" id="nombres" name="nombres" required>
							    </div>
							  </div>
							   <div class="form-group">
							    <div class="col-sm-10">      
							    <label for="correo" class="col-sm-2 control-label">Teléfono</label>
							      <input type="email" class="form-control" id="tel" name="tel" required>
							     
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-10">      
							    <label for="correo" class="col-sm-2 control-label">Correo</label>
							      <input type="email" class="form-control" id="correo" name="correo" required>
							     
							    </div>
							  </div>
							<div class="form-group">
							    <div class="col-sm-10">
							 <label for="mensaje" class="col-sm-2 control-label">Comentarios</label>
							       <textarea class="form-control" rows="3" name="mensaje"></textarea>
							    </div>
							  </div>
							<div class="g-recaptcha" data-sitekey="6LeQ1CUTAAAAAFqxzjbR3p55yBvwbFdyXsDmwKvp"></div>
							  <div class="form-group">
							    <div class="col-sm-10">
							      <button type="submit" class="btn btn-default" id="enviar">Enviar</button>
							    </div>
							  </div>
							</form>
							<?php
								$nombres = $_POST['nombres'];
								$correo = $_POST['correo'];
								$mensaje = $_POST['mensaje'];
								$telefono = $_POST['tel'];
								if(isset($nombres)){
									require_once "recaptchalib.php";
							      	// tu clave secreta
									$secret = "";
									 
									// respuesta vacía
									$response = null;
									 
									// comprueba la clave secreta
									$reCaptcha = new ReCaptcha($secret);
									if ($_POST["g-recaptcha-response"]) {
										$response = $reCaptcha->verifyResponse(
									        $_SERVER["REMOTE_ADDR"],
									        $_POST["g-recaptcha-response"]
									    );
									}
									if ($response != null && $response->success) {
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
										$mail->Body    = $mensaje.$telefono;

										if(!$mail->send()) {
										    // echo 'Message could not be sent.';
										    // echo 'Mailer Error: ' . $mail->ErrorInfo;
										    print $respuesta = 'Tu mensaje no pudo ser enviado.'.$mail->ErrorInfo;
										} else {
										    #echo 'Tu mensaje fue enviado, Gracias por contactarnos.';
										    $respuesta = 'Tu mensaje fue enviado, Gracias por contactarnos.';
										}
									}else{
										print "No se pudo enviar el mensaje marca el reCAPTCHA por favor.";
									}
								}

							?>
						</div>
					<?php else:?>
						<h1>No hay articulos.</h1>
					<?php endif?>					
				</div>
			</article>
		</article>
	</section>
<?php get_footer(); ?>

/*
											require("PHPMailer-master/src/PHPMailer.php");
															require("PHPMailer-master/src/SMTP.php");
															require("PHPMailer-master/src/Exception.php");


															
															$mail3 = new PHPMailer\PHPMailer\PHPMailer();
															$mail3->IsSMTP();

															$mail3->CharSet="UTF-8";
															$mail3->Host = $host;
															//$mail3->SMTPDebug = 2;
															$mail3->Port = $puerto; //465 or 587

															$mail3->SMTPSecure = 'tls';
															$mail3->SMTPAuth = true;
															$mail3->IsHTML(true);
															//Authentication
															$mail3->Username = $username;
															$mail3->Password = $passmail;
															//Set Params
															$mail3->SetFrom($username);
															$mail3->AddAddress($correo);



															$mail3->Subject = "Alta en el Sistema de CCIUDADANO";
															$mail3->isHTML(true);
															$mail3->Body = '
															<html>
															<head>
															<title>Bienvenido </title>				  
															</head>
															<body>
															<br>
															<div class="row">
															<div class="col-4">				
															</div>
															<div class="col-4">
															<center><img src="http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/img/site_logo.png"></center>
															</div>
															<div class="col-4">				
															</div>
															</div>
															<br>
															<div class="row">
															<div class="col-4">				
															</div>
															<div class="col-4">
															<center>
															<br><br>
															<h1 style="font-family: Roboto;font-weight: bolder;text-align: center; vertical-align: middle;color:#000;font-size: 14px;">¡Bienvenido!<br>
															</h1>
															</div>
															</center>
															<div class="col-4">
															<center><p style="font-family: Roboto;font-size:14px;color: #000;letter-spacing: 0;line-height: 17px;">
															Hola, has sido invitado a unirte a la Unidad de Formación:
Unidad de Formación: '.$TituloEUF.'
Docente: '.$NombresDocente.' '.$ApellidosDocente.' 

Mensaje del docente:
 Ej. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis lacus dignissim, dictum sem sed,piscing elit. Maecenas dapibus justo sit amet erat dignissim consequat. Duis eu pharetra turpis. Donec vestibulum leo sit amet eros tincidunt interdum. Nam ut nibh dolor.
Nam semper venenatis pulvinar. Vestibulum auctor dui feugiat, venenatis don quam a iaculis. Quisque aliquet viverra orci, at pharetra arcu suscipit sit amet. Curabitur et congue velit. 
Fussellus ultricies, quam id varius faucibus, lorem lectus dapibus esed ultrices luctus, urna eros vulputate sem, eu posuere lorem velit eu lorem. Nullam et condimentum nulla. Sed vestibulum ultrices nibh sit amet accumsan.
In semper,libero ultricies ornare malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel quam massa. Morbi mattis neque consectetur lectus hendrerit, nec ultricies nibh efficitur. Quisque dolor massa, laoreet id cursus at, ornare vel purus. Quisque sed faucibus nulla, vitae sagittis arcu

Compartimos tus accesos a la plataforma:
Usuario: '.$correo.'
Contraseña: '.$password.'

Da clic en el botón Ingresar e inicia con tus actividades.

Styles

Code
															</p></center>
															</div>
															</div>

															<div class="row">
															<div class="col-4">				
															</div>
															<div class="col-4">
															<center>
															<br><br><br>
															<a  href="http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"  style="text-decoration: none; padding: 10px;font-weight: 200;  font-size: 14px; color: #ffffff; background-color: #a31d24;border-radius: 6px; border: 2px solid #a31d24;">Ingresar</a>
															</center>
															</div>
															<div class="col-4">

															</div>
															</div>
															<br><br><br>
															<div class="row" style="background-color: #000;color:#FFF;">
															<div class="col-4">				
															</div>
															<div class="col-4">
															<p style="text-align: center;vertical-align: middle;font-size:14px;color:#fff;">
															Contactanos
															<br><br>
															<strong style="text-align: center;vertical-align: middle;font-size:14px;font-weight:bolder;color:#fff;text-decoration:none">www.cciudadano.org.mx</strong>
															<br><br><br><br>
															</p>
															</div>
															<div class="col-4">

															</div>
															</div>
															</body>
															</html>
															';

																if(!$mail3->Send()) {
															//echo "Mailer Error: " . $mail3->ErrorInfo;
															//header("Location: index.php?error=9");
	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($CodUF); ?>&codns=<?php echo $codSD ;?>&reenvio=4&errenvio=1';
	</script>

	<?php																
															} else {

															//header("Location: index.php");  
															//echo "se mando mail"; 
														?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($CodUF); ?>&codns=<?php echo $codSD ;?>&reenvio=4';
	</script>
	<?php
*/
<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

require("class/cnmysql.php");

$correo = $_POST["correo"]; 

$traerid = "SELECT CodUsuario,correo,Clave FROM `usuarios` WHERE  correo = '".$correo."' AND  estatus = '1' ";

if($resid = $mysqli->query($traerid)) {
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];
							$Usuariocorreo =  $data["correo"];
							$UsuarioClave =  $data["Clave"];


							require("PHPMailer-master/src/PHPMailer.php");
															require("PHPMailer-master/src/SMTP.php");
															require("PHPMailer-master/src/Exception.php");


															$mail3 = new PHPMailer\PHPMailer\PHPMailer();
															$mail3->IsSMTP();

															$mail3->CharSet="UTF-8";
															$mail3->Host = "smtp.office365.com";
															//$mail3->SMTPDebug = 2;
															$mail3->Port = 587; //465 or 587

															$mail3->SMTPSecure = 'tls';
															$mail3->SMTPAuth = true;
															$mail3->IsHTML(true);
															//Authentication
															$mail3->Username = "registrociudadano@urbanistica.mx";
															$mail3->Password = "Rueville10!";
															//Set Params
															$mail3->SetFrom("registrociudadano@urbanistica.mx");
															//$mail3->AddAddress($CorreoEmpleado2);
															$mail3->AddAddress($Usuariocorreo);



															$mail3->Subject = "Reenvio de Datos para el Sistema de CCIUDADANO";
															$mail3->isHTML(true);
															$mail3->Body = '
															<html>
															<head>
															<title>Bienvenido Usuario   </title>				  
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
															<h1 style="font-family: Roboto;font-weight: bolder;text-align: center; vertical-align: middle;color:#000;font-size: 14px;">¡Aqui esta tu informacion solicitada !<br>
															</h1>
															</div>
															</center>
															<div class="col-4">
															<center><p style="font-family: Roboto;font-size:14px;color: #000;letter-spacing: 0;line-height: 17px;">A continuacion se te proporcionara tu contraseña para el portal de CCIUDADANO </p>

															<p>
															Clave : '.$UsuarioClave.'
															</p>	
															</center>
															</div>
															</div>

															<div class="row">
															<div class="col-4">				
															</div>
															<div class="col-4">
															<center>
															<br><br><br>
															
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
															header("Location: index.php?olvide=1");

															} else {

															//header("Location: index.php");  
															//echo "se mando mail"; 
															?>
															<script type="text/javascript">
															window.location.href='index.php';
															</script>
															<?php

															}





						}else{
								?>
								<script type="text/javascript">
								window.location.href='index.php?olvide=1';
								</script>
								<?php
						}

?>
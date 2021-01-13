<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

require("class/cnmysql.php");
  
			$nombre = $_POST["nombre"]; 
			$apellidos = $_POST["apellidos"]; 
			$tipo_escuela = $_POST["tipo_escuela"]; 
			$nombre_secundaria = $_POST["nombre_secundaria"];
			$clave_secundaria = $_POST["clave_secundaria"]; 
			$correo = $_POST["correo"]; 
			$password = $_POST["pass"]; 
			$tipo_usuario=$_POST["tipo_usuario"];
		

			$traerDMail = "SELECT port,host,username,password FROM `mailing`WHERE codMail = 1 ";

						if($ResDmail = $mysqli->query($traerDMail)) {
						   $DatosMail = $ResDmail->fetch_array();
							$puerto =  $DatosMail["port"];
							$host =  $DatosMail["host"];
							$username =  $DatosMail["username"];
							$passmail =  $DatosMail["password"];

						


$cons01 = "INSERT INTO `usuarios` (`CodUsuario`, `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES (NULL,'".$nombre."', '".$password."', '".$tipo_usuario."',  '0' , '0','".$correo."')";

	if($res1 = $mysqli->query($cons01)) {

			$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

						if($resid = $mysqli->query($traerid)) {
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];


							$cons2 = "INSERT INTO `detalle_usuario` (`CodDetalle`,`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."' )";

										if($res2 = $mysqli->query($cons2)) {

$cons3 = "INSERT INTO `secundarias` (`CodSec`,`CodUsu`,`Tipo`,`Nombre`,`Clave`) VALUES (NULL,'".$UsuarioCod."','".$tipo_escuela."','".$nombre_secundaria."','".$clave_secundaria."' )";

										if($res3 = $mysqli->query($cons3)) {


											ini_set('display_errors',1);
											error_reporting(E_ALL);
											$from ="rh@cciudadano.mx";
											$to =$correo;
											$subject="Alta en el Sistema de Solicitud de CCIUDADANO";
											$message='¡Bienvenido! Favor de corroborar tu cuenta ingresando en el siguiente enlace:  http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"   ';
											$headers ="From" . $from;
											mail($to,$subject,$message,$headers);
											?>
											<script type="text/javascript">
											window.location.href='index.php';
											</script>
											<?php

										
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
															//$mail3->AddAddress($CorreoEmpleado2);
															$mail3->AddAddress($correo);



															$mail3->Subject = "Alta en el Sistema de Solicitud de CCIUDADANO";
															$mail3->isHTML(true);
															$mail3->Body = '
															<html>
															<head>
															<title>Bienvenido Usuario '.$nombre.'  </title>				  
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
															<center><p style="font-family: Roboto;font-size:14px;color: #000;letter-spacing: 0;line-height: 17px;">Favor de corroborar tu cuenta dando clic en el botón Ingresar</p></center>
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
															header("Location: index.php?error=9");

															} else {

															//header("Location: index.php");  
															//echo "se mando mail"; 
															?>
															<script type="text/javascript">
															window.location.href='index.php';
															</script>
															<?php

															}
															*/

												}else{echo "error al insertar secundarias";}
											
										}else{echo "error al insertar detalles de usuario";}
						}else{echo "error al traer id";}

					}else{echo "error al insertar usuario";}

	
}			
?>
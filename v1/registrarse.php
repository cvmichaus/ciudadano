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
			


$cons01 = "INSERT INTO `usuarios` (`CodUsuario`, `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES (NULL,'".$nombre."', '".$password."', '1',  '0' , '0','".$correo."')";

	if($res1 = $mysqli->query($cons01)) {

			$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

						if($resid = $mysqli->query($traerid)) {
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];


							$cons2 = "INSERT INTO `detalle_usuario` (`CodDetalle`,`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."' )";

										if($res2 = $mysqli->query($cons2)) {

$cons3 = "INSERT INTO `secundarias` (`CodSec`,`CodUsu`,`Tipo`,`Nombre`,`Clave`) VALUES (NULL,'".$UsuarioCod."','".$tipo_escuela."','".$nombre_secundaria."','".$clave_secundaria."' )";

										if($res3 = $mysqli->query($cons3)) {
										
										
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
                                                  $mail3->AddAddress($correo);



												$mail3->Subject = "Alta en el Sistema de Solicitud de CCIUDADANO";
											$mail3->Body = '
											<html>
											<head>
											<title>Bienvenido Usuario '.$nombre.'  </title>
										  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
											<h1 style="font-weight: bolder;text-align: center; vertical-align: middle;color:#000;">Bienvenidos<br>
											 Favor de corroborar tu cuenta dando clic en el botón  Ingresar</h1>
											</div>
											</center>
											<div class="col-4">

											</div>
											</div>

											<div class="row">
											<div class="col-4">				
											</div>
											<div class="col-4">
											<center>
											 <a  href="http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'" class="btn btn-lg btn-primary btn-block" style="font-family: Roboto;background-color:#a31d24;color:#FFF;font-size: 19px;cursor: pointer;font-weight: bolder;text-align: center; vertical-align: middle; ">Ingresar</a>
											 </center>
											</div>
											<div class="col-4">

											</div>
											</div>
											<br><br><br>
											<div class="row" style="background-color: #BBC;color:#FFF;">
											<div class="col-4">				
											</div>
											<div class="col-4">
											<p style="text-align: center;vertical-align: middle;">
											Contactanos
											<br>
											<strong>www.cciudadano.org.mx</strong>
											</p>
											</div>
											<div class="col-4">

											</div>
											</div>
											</body>
											</html>
											';


												if(!$mail3->Send()) {
												 echo "Mailer Error: " . $mail3->ErrorInfo;
												//header("Location: index.php?error=9");
												
												} else {

												//header("Location: index.php");  
												//echo "se mando mail"; 
												?>
												<script type="text/javascript">
												window.location.href='index.php';
												</script>
												<?php

											}

												}
											
										}
						}
					}
?>
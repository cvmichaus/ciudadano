<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

  
  			$usuario= $_POST["usuario"];
  			$correo = $_POST["correo"];
  			$password = $_POST["password"];  

			$nombre = $_POST["Nombre"]; 
			$apellidos = $_POST["Apellidos"]; 
			$Grado = $_POST["Grado"]; 
			$Grupo = $_POST["Grupo"]; 			
			
			$tipo_escuela="sin datos";
			$clave_secundaria="0";
			$nombre_secundaria="sin datos";

			 $CodUF = $_POST["codUF"];
             $codns =$_POST["codigoNS"];
             $CodDocente =$_POST["CodDocente"];
			
			


$cons01 = "INSERT INTO `usuarios` ( `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES ('".$nombre."', '".$password."', '2',  '0' , '0','".$correo."')";

	if($res1 = $mysqli->query($cons01)) {

			$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

						if($resid = $mysqli->query($traerid)) {
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];


							$cons2 = "INSERT INTO `detalle_usuario` (`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`) VALUES ('".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."' )";

										if($res2 = $mysqli->query($cons2)) {

											$cons3 = "INSERT INTO `estudiantes` (`CodEstudiante`,`CodUsuario`,`Nombre`,`Grado`,`Correo`,`Grupo`, `CodUF`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$Grado."','".$correo."','".$Grupo."', '".$CodUF."' )";

										if($res3 = $mysqli->query($cons3)) {

											$traerdocente = "SELECT Nombres,Apellidos FROM `detalle_usuario` WHERE   CodUsuario = '".$CodDocente."' ";

						if($redoc = $mysqli->query($traerdocente)) {
							$dataDocente = $redoc->fetch_array();
							$NombresDocente =  $dataDocente["Nombres"];
							$ApellidosDocente =  $dataDocente["Apellidos"];


							$traerEUF = "SELECT Titulo FROM `euf` WHERE   CodUF = '".$CodUF."' ";

						if($rEUF = $mysqli->query($traerEUF)) {
							$EUF = $rEUF->fetch_array();
							$TituloEUF =  $EUF["Titulo"];						



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
}

}else{ echo $traerEUF;}
					
}else{ echo $traerdocente;}

}else{ echo "error 3";}

}else{ echo "error 2";}
						}
					}else{ echo $cons01;}

  } else {
    header("Location: ../index.php");
  }
 
 ?>
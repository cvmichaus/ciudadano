<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

echo '<script language="javascript">alert("se esta legeado en el sistema ");</script>';  	

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

echo '<script language="javascript">alert(" se toman los datos del form ");</script>'; 			
		
$cons01 = "INSERT INTO `usuarios` ( `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES ('".$nombre."', '".$password."', '2',  '0' , '0','".$correo."')";

	if($res1 = $mysqli->query($cons01)) {

		echo '<script language="javascript">alert(" se insertio en la tabla usuarios ");</script>'; 		

			$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

						if($resid = $mysqli->query($traerid)) {
								echo '<script language="javascript">alert(" obtiene el ID USUARIO ");</script>'; 	
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];


							$cons2 = "INSERT INTO `detalle_usuario` (`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`) VALUES ('".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."' )";

										if($res2 = $mysqli->query($cons2)) {
											echo '<script language="javascript">alert(" se insertio en la tabla detalle usuarios ");</script>'; 	

											$cons3 = "INSERT INTO `estudiantes` (`CodEstudiante`,`CodUsuario`,`Nombre`,`Grado`,`Correo`,`Grupo`, `CodUF`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$Grado."','".$correo."','".$Grupo."', '".$CodUF."' )";

										if($res3 = $mysqli->query($cons3)) {

												echo '<script language="javascript">alert(" se insertio en la tabla estudiantes ");</script>'; 	

									$traerdocente = "SELECT Nombres,Apellidos FROM `detalle_usuario` WHERE   CodUsuario = '".$CodDocente."' ";

						if($redoc = $mysqli->query($traerdocente)) {
							echo '<script language="javascript">alert(" obtenemos datos del dopcente ");</script>'; 
							$dataDocente = $redoc->fetch_array();
							$NombresDocente =  $dataDocente["Nombres"];
							$ApellidosDocente =  $dataDocente["Apellidos"];

							$traerEUF = "SELECT Titulo FROM `euf` WHERE   CodUF = '".$CodUF."' ";

						if($rEUF = $mysqli->query($traerEUF)) {
							echo '<script language="javascript">alert(" obtenemos datos del Unidad Formacion ");</script>'; 
							$EUF = $rEUF->fetch_array();
							$TituloEUF =  $EUF["Titulo"];	


								ini_set('display_errors',1);
								error_reporting(E_ALL);
								$from ="recursos.humanos@wri.org";
								$to =$correo;
								$subject="Alta en el Sistema de Solicitud de CCIUDADANO como Alumno";
								$message='Hola, has sido invitado a unirte a la Unidad de Formación  Unidad de Formación: '.$TituloEUF.'  Docente: '.$NombresDocente.' '.$ApellidosDocente.' , tambien te compartimos tus accesos a la plataforma:  Usuario: '.$correo.'  Contraseña: '.$password.' ,  Ingresar a http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'  e inicia con tus actividades ';
								$headers ="From" . $from;
								mail($to,$subject,$message,$headers);
							?>
							<script type="text/javascript">
							window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($CodUF); ?>&codns=<?php echo $codSD ;?>&reenvio=4';
							</script>
							<?php					

	
				}else echo $traerEUF;}

		    }else{ echo $traerdocente;}
				
     	}else{ echo $cons3;}

      }else{ echo $cons2;}

    }else{ echo $cons01;}
			
} else {
header("Location: ../index.php");
}

 ?>
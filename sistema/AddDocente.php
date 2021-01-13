<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 
		
		$archivo = $_FILES['foto']['name']; 
		$correo = $_POST["correo"];
		$cedula = $_POST["cedula"];  
		$password = $_POST["password"];  

		$nombre = $_POST["Nombre"]; 
		$apellidos = $_POST["Apellidos"]; 

		$tipo_escuela = $_POST["tipo_escuela"]; 
		$nombre_secundaria = $_POST["nombre_secundaria"];
		$clave_secundaria = $_POST["clave_secundaria"]; 


				 $target_dir = "fotos/";
                $target_file = $target_dir . basename($_FILES["foto"]["name"]);

              // echo '<script language="javascript">alert(" Se obtienen los datos del formulario ");</script>'; 

                if(empty($archivo)){
                	 // echo '<script language="javascript">alert(" LA FOTO ESTA VACIA ");</script>'; 
                		 $archivo = "avatar.png";
                	 // echo '<script language="javascript">alert(" Se ASIGNA EL ICONO AVATAR ");</script>'; 


                	  			 //echo '<script language="javascript">alert(" LA FOTO ESTA LLENA ");</script>'; 
					        	

					                    $cons99 = "INSERT INTO `usuarios` (`CodUsuario`, `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES (NULL,'".$nombre."', '".$password."', '1',  '0' , '0','".$correo."')";

					                        if($res99 = $mysqli->query($cons99)) {

					                        	$traerid99 = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

													if($resid99 = $mysqli->query($traerid99)) {
													$data99 = $resid99->fetch_array();
													$UsuarioCod99 =  $data99["CodUsuario"];
													

					                            $cons98 = "INSERT INTO `detalle_usuario` (`CodDetalle`,`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`, `cedula`, `avatar`) VALUES (NULL,'".$UsuarioCod99."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."', '".$cedula."', '".$archivo."') ";

					                            if($res98 = $mysqli->query($cons98)) {

													$cons97 = "INSERT INTO `secundarias` (`CodSec`,`CodUsu`,`Tipo`,`Nombre`,`Clave`) VALUES (NULL,'".$UsuarioCod99."','".$tipo_escuela."','".$nombre_secundaria."','".$clave_secundaria."' )";

													if($res97 = $mysqli->query($cons97)) {

															ini_set('display_errors',1);
														error_reporting(E_ALL);
														$from ="recursos.humanos@wri.org";
														$to =$correo;
														$subject="Alta en el Sistema de Solicitud de CCIUDADANO como Docente";
														$message='¡Bienvenido! '.$nombre.'  Favor de corroborar tu cuenta ingresando en el siguiente enlace:  http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"   ';
														$headers ="From" . $from;
														mail($to,$subject,$message,$headers);
														?>
														<script type="text/javascript">
														window.location.href='administracion.php';
														</script>
														<?php
													}

					                            }

					                        }

					                   }					 


                }else{
					        	 // echo '<script language="javascript">alert(" LA FOTO ESTA LLENA ");</script>'; 
					        	$info = new SplFileInfo($archivo);
					            $extension= $info->getExtension();

					            if($extension  == 'png' OR $extension  == 'jpg' OR $extension  == 'JPG' ){

					                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

					                    $cons = "INSERT INTO `usuarios` (`CodUsuario`, `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES (NULL,'".$nombre."', '".$password."', '1',  '0' , '0','".$correo."')";

					                        if($res = $mysqli->query($cons)) {

					                        	$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

													if($resid = $mysqli->query($traerid)) {
													$data = $resid->fetch_array();
													$UsuarioCod =  $data["CodUsuario"];
													

					                            $cons2 = "INSERT INTO `detalle_usuario` (`CodDetalle`,`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`, `cedula`, `avatar`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."', '".$cedula."', '".$archivo."') ";

					                            if($res2 = $mysqli->query($cons2)) {

													$cons3 = "INSERT INTO `secundarias` (`CodSec`,`CodUsu`,`Tipo`,`Nombre`,`Clave`) VALUES (NULL,'".$UsuarioCod."','".$tipo_escuela."','".$nombre_secundaria."','".$clave_secundaria."' )";

													if($res3 = $mysqli->query($cons3)) {

															ini_set('display_errors',1);
														error_reporting(E_ALL);
														$from ="recursos.humanos@wri.org";
														$to =$correo;
														$subject="Alta en el Sistema de Solicitud de CCIUDADANO como Docente";
														$message='¡Bienvenido! '.$nombre.'  Favor de corroborar tu cuenta ingresando en el siguiente enlace:  http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"   ';
														$headers ="From" . $from;
														mail($to,$subject,$message,$headers);
														?>
														<script type="text/javascript">
														window.location.href='administracion.php';
														</script>
														<?php
													}

					                            }

					                        }

					                   }

					            }
					    }
         }
             
   } else {
    header("Location: ../index.php");
  }

?>
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
			
			


$cons01 = "INSERT INTO `usuarios` ( `Usuario`, `Clave`, `Perfil`, `estatus`, `enlinea`, `correo`) VALUES ('".$nombre."', '".$password."', '2',  '1' , '0','".$correo."')";

	if($res1 = $mysqli->query($cons01)) {

			$traerid = "SELECT CodUsuario FROM `usuarios` WHERE Usuario= '".$nombre."' AND correo = '".$correo."' AND  Clave = '".$password."' ";

						if($resid = $mysqli->query($traerid)) {
							$data = $resid->fetch_array();
							$UsuarioCod =  $data["CodUsuario"];


							$cons2 = "INSERT INTO `detalle_usuario` (`CodUsuario`,`Nombres`,`Apellidos`,`TipoSecundaria`,`ClaveSecundaria`, `NombreEscuela`, `FechaAlta`, `HoraAlta`) VALUES ('".$UsuarioCod."','".$nombre."','".$apellidos."','".$tipo_escuela."','".$clave_secundaria."', '".$nombre_secundaria."', '".$fecha_actual."', '".$hora_actual."' )";

										if($res2 = $mysqli->query($cons2)) {

											$cons3 = "INSERT INTO `estudiantes` (`CodEstudiante`,`CodUsuario`,`Nombre`,`Grado`,`Correo`,`Grupo`, `CodUF`) VALUES (NULL,'".$UsuarioCod."','".$nombre."','".$Grado."','".$correo."','".$Grupo."', '".$CodUF."' )";

										if($res3 = $mysqli->query($cons3)) {


?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($CodUF); ?>&codns=<?php echo $codSD ;?>&reenvio=4';
	</script>

	<?php
}else{ echo "error 3";}

}else{ echo "error 2";}
						}
					}else{ echo $cons01;}

  } else {
    header("Location: ../index.php");
  }
 
 ?>
<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

 $tipo_usuario = $_SESSION['Perfil'];

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$titulo = $_POST["titulo"];
$proyeccion = $_POST["proyeccion"];
$evaluacion = $_POST["evaluacion"];
$finalidad = $_POST["finalidad"];
$competencias = $_POST["competencias"];
$didactica = $_POST["didactica"];
$nsecuencias = $_POST["nsecuencias"];

//echo '<script language="javascript">alert(" Se obtienen los datos del formulario ");</script>'; 

$cons01 = "INSERT INTO `euf` (`CodUF`, `Titulo`, `Proyeccion`, `EvaluacionD`, `Finalidad`, `Competencias`, `DisenioSD`, `NSDidacticas` , `CodMaestro`, `FechaAlta`,`HoraAlta`) VALUES (NULL, '".$titulo."' ,'".$proyeccion."', '".$evaluacion."', '".$finalidad."', '".$competencias."' , '".$didactica."','".$nsecuencias."', '".$idusr."','".$fecha_actual."','".$hora_actual."')";

if($res1 = $mysqli->query($cons01)) {

	//echo '<script language="javascript">alert("Se agrego a la tabla EUF ");</script>'; 


$traerUF = "SELECT CodUF FROM euf WHERE Titulo= '".$titulo."' AND NSDidacticas = '".$nsecuencias."' AND  CodMaestro = '".$idusr."' AND FechaAlta = '".$fecha_actual."' AND HoraAlta = '".$hora_actual."'  ";

						if($resUF = $mysqli->query($traerUF)) {
							$dataUF = $resUF->fetch_array();
							$CodUF =  $dataUF["CodUF"];

	//echo '<script language="javascript">alert(" revisar en BD '.$traerUF.' ");</script>';						

		//echo '<script language="javascript">alert(" Se obtuvo el CODUF '.$CodUF.' ");</script>'; 
	//CREAMOS LA secuancias didacticas


	 $numero_secuencias = $_POST['nsecuencias'];
 				$i = 0;
 				$x=1;
					while ($i != $numero_secuencias) {

	//echo '<script language="javascript">alert(" entro al while de numero de secuencias ");</script>'; 

					$nombreSD="Secuencia Didactica ".$x; 					

 					$cons02 = "INSERT INTO `secuencias_didacticas` (`CodSD`, `CodUF`, `CodMaestro`, `Nombre`, `NumSD`) VALUES (NULL, '".$CodUF."' ,'".$idusr."', '".$nombreSD."', '".$x."')";

							if($res2 = $mysqli->query($cons02)) {
								$i++; 
								$x++;
							}



 				}

	//echo '<script language="javascript">alert(" Deberia mandar al home  ");</script>'; 

					if($tipo_usuario == 0){

					?>
					<script type="text/javascript">
					window.location.href='home.php';
					</script>
					<?php

					}else{

					?>
					<script type="text/javascript">
					window.location.href='home.php';
					</script>
					<?php

					}
		
	
 }else{ echo $traerUF;} 
}

} else {
    header("Location: ../index.php");
  }
?>
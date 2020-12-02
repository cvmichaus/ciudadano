<?php

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

$cons01 = "INSERT INTO `euf` (`CodUF`, `Titulo`, `Proyeccion`, `EvaluacionD`, `Finalidad`, `Competencias`, `DisenioSD`, `NSDidacticas` , `CodMaestro`, `FechaAlta`,`HoraAlta`) VALUES (NULL, '".$titulo."' ,'".$proyeccion."', '".$evaluacion."', '".$finalidad."', '".$competencias."' , '".$didactica."','".$nsecuencias."', '".$idusr."','".$fecha_actual."','".$hora_actual."')";

if($res1 = $mysqli->query($cons01)) {

	?>
	<script type="text/javascript">
	window.location.href='maestro.php';
	</script>
	<?php

}



?>
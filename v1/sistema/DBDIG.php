<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];

$grado = $_POST["grado"];
$asignaturas = $_POST["asignaturas"];
$grupo = $_POST["grupo"];
$numero_alumnos = $_POST["numero_alumnos"];
$numero_horas = $_POST["numero_horas"];


$consDGI = "INSERT INTO `datosidentgrupo` (`CodDIG`, `CodUF`, `CodMaestro`, `Grado`, `Grupo`, `Asignaturas`, `NumeroAlumnos`, `NumeroHoras` , `FaltaDIG`,`HAltaDIG`) VALUES (NULL, '".$coduf."' ,'".$idusr."', '".$grado."', '".$asignaturas."', '".$grupo."' , '".$numero_alumnos."','".$numero_horas."', '".$fecha_actual."','".$hora_actual."')";

if($resDGI = $mysqli->query($consDGI)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>';
	</script>
	<?php

}else{

	echo $consDGI;
}




?>
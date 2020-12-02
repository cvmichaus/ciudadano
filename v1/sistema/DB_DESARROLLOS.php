<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$act_docente = $_POST["act_docente"];
$act_estudiante = $_POST["act_estudiante"];
$criterios_evidencias = $_POST["criterios_evidencias"];


$consdesarrollo = "INSERT INTO `desarrollo_sesiones` (`CodDS`, `CodUF`, `NumDS`, `CodUsu`,`Actividad_docentes`,`Actividad_estudiantes`,`Criterios_evidencias`, `Falta`, `Halta` ) 
VALUES (NULL, '".$coduf."' ,'".$codSD."', '".$idusr."', '".$act_docente."', '".$act_estudiante."', '".$criterios_evidencias."',  '".$fecha_actual."','".$hora_actual."')";

if($resdesarrollos = $mysqli->query($consdesarrollo)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>';
	</script>
	<?php

}else{

	echo $consdesarrollo;
}




?>
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

$codP = $_POST["CodDS"];


								

$cons = "UPDATE  `desarrollo_sesiones` SET  `Actividad_docentes`= '".$act_docente."' , `Actividad_estudiantes`= '".$act_estudiante."' , `Criterios_evidencias`= '".$criterios_evidencias."' ,`Halta` = '".$hora_actual."', `Falta`= '".$fecha_actual."'  WHERE `CodDS` = '".$codP."' AND `NumDS` = '".$codSD."'  AND `CodUF` = '".$coduf."' ";

if($res = $mysqli->query($cons)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2';
	</script>

	<?php

}else{

	echo "Error"; echo "<br>";
	//echo $consTema;
}




?>
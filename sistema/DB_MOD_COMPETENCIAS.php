<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$componente = $_POST["componente"];
$componente_meta = $_POST["componente_meta"];
$componente_no_cognitivo = $_POST["componente_no_cognitivo"];

$codP = $_POST["codCompetencias"];


								

$cons = "UPDATE  `competencias` SET  `Cognitivo`= '".$componente."',`Metacognitivo`= '".$componente_meta."',`Nocognitivo`= '".$componente_no_cognitivo."',`HAlta` = '".$hora_actual."', `FAlta`= '".$fecha_actual."'  WHERE `CodComp` = '".$codP."' AND `NumSD` = '".$codSD."'  AND `CodUF` = '".$coduf."' ";

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
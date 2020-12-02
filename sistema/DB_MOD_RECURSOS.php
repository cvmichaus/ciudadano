<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$recursos = $_POST["recursos"];

$codP = $_POST["codRec"];


								

$cons = "UPDATE  `recursos` SET  `Recurso`= '".$recursos."' ,`HAlta` = '".$hora_actual."', `FAlta`= '".$fecha_actual."'  WHERE `CodRec` = '".$codP."' AND `NumSD` = '".$codSD."'  AND `CodUF` = '".$coduf."' ";

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
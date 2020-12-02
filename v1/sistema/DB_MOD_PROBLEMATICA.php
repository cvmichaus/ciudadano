<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$problematica = $_POST["problematica"];

$codP = $_POST["codProblematica"];


								

$cons = "UPDATE  `problema_sig_contexto` SET  `Problematica`= '".$problematica."',`HAlta` = '".$hora_actual."', `FAlta`= '".$fecha_actual."'  WHERE `CodPSC` = '".$codP."' AND `NumSD` = '".$codSD."'  AND `CodUF` = '".$coduf."' ";

if($res = $mysqli->query($cons)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>';
	</script>
	<?php

}else{

	echo "Error"; echo "<br>";
	//echo $consTema;
}




?>
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


								

$consProblematica = "INSERT INTO `problema_sig_contexto` (`CodPSC`, `CodUF`, `NumSD`, `Problematica`, `CodUsu`, `HAlta`, `FAlta` ) 
VALUES (NULL, '".$coduf."' ,'".$codSD."', '".$problematica."',  '".$idusr."' , '".$hora_actual."','".$fecha_actual."')";

if($resProblematica = $mysqli->query($consProblematica)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2';
	</script>

	<?php

}else{

	echo $consProblematica;
}




?>
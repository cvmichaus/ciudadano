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

				

$conscompetencias = "INSERT INTO `competencias` (`CodComp`, `CodUF`, `NumSD`, `Cognitivo`,`Metacognitivo`,`Nocognitivo`, `CodUsu`, `Halta`, `Falta` ) 
VALUES (NULL, '".$coduf."' ,'".$codSD."', '".$componente."', '".$componente_meta."', '".$componente_no_cognitivo."',  '".$idusr."' , '".$hora_actual."','".$fecha_actual."')";

if($rescompetencias = $mysqli->query($conscompetencias)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>';
	</script>
	<?php

}else{

	echo $conscompetencias;
}




?>
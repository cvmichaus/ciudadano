<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$cognitivo_inicial = $_POST["cognitivo_inicial"]; 
$cognitivo_basica = $_POST["cognitivo_basica"]; 
$cognitivo_autonoma = $_POST["cognitivo_autonoma"];
$cognitivo_estrategica = $_POST["cognitivo_estrategica"]; 
$nocognitivo_inicial = $_POST["nocognitivo_inicial"]; 
$nocognitivo_basica = $_POST["nocognitivo_basica"]; 
$nocognitivo_autonoma = $_POST["nocognitivo_autonoma"]; 
$nocognitivo_estrategica = $_POST["nocognitivo_estrategica"]; 
$metacognitivo_inicial = $_POST["metacognitivo_inicial"]; 
$metacognitivo_basica = $_POST["metacognitivo_basica"]; 
$metacognitivo_autonoma = $_POST["metacognitivo_autonoma"]; 
$metacognitivo_estrategica = $_POST["metacognitivo_estrategica"]; 



$consmatriz = "INSERT INTO `matriz` (`CodMatriz`, `CodUF`, `NumSD`, `CodUsu`,`IRCognitivo`,`BCognitivo`,`ACognitivo`,`ECognitivo`,`IRnoCognitivo`,`BnoCognitivo`,`AnoCognitivo`,`EnoCognitivo`,`IRmeCognitivo`,`BmeCognitivo`,`AmeCognitivo`,`EmeCognitivo` ) 
VALUES (NULL, '".$coduf."' ,'".$codSD."', '".$idusr."', '".$cognitivo_inicial."', '".$cognitivo_basica."', '".$cognitivo_autonoma."',  '".$cognitivo_estrategica."','".$nocognitivo_inicial."','".$nocognitivo_basica."','".$nocognitivo_autonoma."','".$nocognitivo_estrategica."','".$metacognitivo_inicial."','".$metacognitivo_basica."','".$metacognitivo_autonoma."','".$metacognitivo_estrategica."')";

if($resmatriz = $mysqli->query($consmatriz)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>';
	</script>
	<?php

}else{

	echo $consmatriz;
}




?>
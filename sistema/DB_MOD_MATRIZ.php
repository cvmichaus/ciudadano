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

$codP = $_POST["codMatriz"];


								

$cons = "UPDATE  `matriz` 
SET  `IRCognitivo`= '".$cognitivo_inicial."' , `BCognitivo`= '".$cognitivo_basica."' ,  `ACognitivo`= '".$cognitivo_autonoma."' , `ECognitivo` = '".$cognitivo_estrategica."', `IRnoCognitivo`= '".$nocognitivo_inicial."',  `BnoCognitivo`= '".$nocognitivo_basica."',  `AnoCognitivo`= '".$nocognitivo_autonoma."', `EnoCognitivo`= '".$nocognitivo_estrategica."', `IRmeCognitivo`= '".$metacognitivo_inicial."', `BmeCognitivo`= '".$metacognitivo_basica."', `AmeCognitivo`= '".$metacognitivo_autonoma."', `EmeCognitivo`= '".$metacognitivo_estrategica."' WHERE `CodMatriz` = '".$codP."' AND `NumSD` = '".$codSD."' AND `CodUF` = '".$coduf."' ";

if($res = $mysqli->query($cons)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2&iduser=<?php echo $idusr ;?>';
	</script>

	<?php

}else{

	echo "Error"; echo "<br>";
	//echo $consTema;
}




?>
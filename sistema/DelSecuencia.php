<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");


$coduf = $_GET["codUF"];
$CodM = $_GET["CodM"];



$ObtenCod = "SELECT  NSDidacticas FROM `euf` WHERE  `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";
/*RE#VISAR AQUI*/
	if($resCons = $mysqli->query($ObtenCod)) {
			$datos = $resCons->fetch_array();
			$resN = $NSDidacticas =  $datos["NSDidacticas"] - 1;

			$cons2 = "UPDATE  `euf` SET  `NSDidacticas`= '".$resN."'  WHERE `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";

					if($res2 = $mysqli->query($cons2)) {

						?>
	
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $resN ;?>&reenvio=2';
	</script>

	<?php

					}



}


?>
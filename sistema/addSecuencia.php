<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 
require("../class/cnmysql.php");
$coduf = $_GET["codUF"];
$CodM = $_GET["CodM"];
//echo '<script language="javascript">alert(" Obtenemos datos del enlace ");</script>'; 
$ObtenCod = "SELECT  NSDidacticas FROM `euf` WHERE  `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";
/*RE#VISAR AQUI*/
	if($resCons = $mysqli->query($ObtenCod)) {
//echo '<script language="javascript">alert(" Obtenemos datos del EUF ");</script>'; 
			$datos = $resCons->fetch_array();
			$resN = $NSDidacticas =  $datos["NSDidacticas"] + 1;
			$cons2 = "UPDATE  `euf` SET  `NSDidacticas`= '".$resN."'  WHERE `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";
					if($res2 = $mysqli->query($cons2)) {
//echo '<script language="javascript">alert(" Actualizamos datos del EUF ");</script>'; 					
						$traerSD = "SELECT MAX(NumSD) as NumSD FROM secuencias_didacticas WHERE CodUF = '".$coduf."' AND CodMaestro  = '".$CodM."' ";
						if($resSD = $mysqli->query($traerSD)) { 
							$dataSD = $resSD->fetch_array();
							$PHPNumSD =  $dataSD["NumSD"]+1;
							$nombreSD="Secuencia Didactica ".$PHPNumSD; 					
//echo '<script language="javascript">alert(" Obtenemos el numero max de SD '.$PHPNumSD.' ");</script>';
  $cons04 = "INSERT INTO `secuencias_didacticas` (`CodSD`, `CodUF`, `CodMaestro`, `Nombre`, `NumSD`) VALUES (NULL, '".$coduf."' ,'".$CodM."', '".$nombreSD."', '".$PHPNumSD."')";
							if($res4 = $mysqli->query($cons04)) {
//echo '<script language="javascript">alert(" Se guardo lasecuencia didactica ");</script>';
						?>	
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $resN ;?>&reenvio=2';
	</script>
	<?php
							}
						}
					}
  			}
?>
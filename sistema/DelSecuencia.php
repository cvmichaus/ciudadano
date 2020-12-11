<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");


$coduf = $_GET["codUF"];
$CodM = $_GET["CodM"];
$codSD = $_GET["codSD"];

//echo '<script language="javascript">alert(" obtenemos los datos del form ");</script>'; 

$ObtenCod = "SELECT  NSDidacticas FROM `euf` WHERE  `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";
/*RE#VISAR AQUI*/
	if($resCons = $mysqli->query($ObtenCod)) {

		//echo '<script language="javascript">alert(" obtenemos los datos EUF ");</script>'; 

			$datos = $resCons->fetch_array();
			$resN = $NSDidacticas =  $datos["NSDidacticas"] - 1;

			$cons2 = "UPDATE  `euf` SET  `NSDidacticas`= '".$resN."'  WHERE `CodUF` = '".$coduf."' and CodMaestro = '".$CodM."' ";

					if($res2 = $mysqli->query($cons2)) {

			//echo '<script language="javascript">alert(" actualizamos EUF ");</script>'; 

$cons3 = "DELETE FROM secuencias_didacticas WHERE codSD= '".$codSD."' AND  codUF = '".$coduf."' and CodMaestro = '".$CodM."' ";

					if($res3 = $mysqli->query($cons3)) {

			//echo '<script language="javascript">alert(" eliminamos la secuencia didactica ");</script>'; 
						?>	
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $resN ;?>&reenvio=2';
	</script>
	<?php
       }else{ echo $res3;}
	}else{ echo $res2; }
}else{ echo $resCons; }
?>
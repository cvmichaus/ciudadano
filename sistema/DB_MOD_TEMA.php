<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$codTema = $_POST["codTema"];
$tema = $_POST["tema"];
$subtema = $_POST["subtema"];

								

$consTema = "UPDATE  `tema` SET  `Tema`= '".$tema."', `Subtema` = '".$subtema."' ,`HoraA` = '".$hora_actual."', `FechaA`= '".$fecha_actual."'  WHERE `codTema` = '".$codTema."' AND `NumSD` = '".$codSD."'  AND `codTema` = '".$codTema."' ";

if($resTema = $mysqli->query($consTema)) {

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2&iduser=<?php echo $idusr ;?>&temamod=1';
	</script>

	<?php

}else{

	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2&iduser=<?php echo $idusr ;?>&temamod=0';
	</script>

	<?php
}




?>
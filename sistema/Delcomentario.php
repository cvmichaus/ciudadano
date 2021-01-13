<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");


$IdComentario = $_GET["IdComentario"];
$codUsu = $_GET["codUsu"];
$CodArticulo=$_GET["CodArticulo"];

$cons3 = "DELETE FROM comentarios WHERE CodComentario= '".$IdComentario."' AND  CodUsu = '".$codUsu."' and CodArticulo = '".$CodArticulo."' ";

					if($res3 = $mysqli->query($cons3)) {
						?>	
	<script type="text/javascript">
	window.location.href='DetalleArticulo.php?codart=<?php echo $CodArticulo ;?>&iduser=<?php echo $codUsu ;?>&elimino=1';
	</script>
	<?php
					}else{
						?>	
	<script type="text/javascript">
	window.location.href='DetalleArticulo.php?codart=<?php echo $CodArticulo ;?>&iduser=<?php echo $codUsu ;?>&elimino=0';
	</script>
	<?php
					}

?>
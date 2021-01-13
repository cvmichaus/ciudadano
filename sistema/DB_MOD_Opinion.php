<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S");

require("../class/cnmysql.php");
$idusr = $_POST["iduser2"];
$codarticulo = $_POST["codarticulo2"];
$comentario = $_POST["comentario2"];
$idcomentario=$_POST["idcomentario"];				

//echo '<script language="javascript">alert(" Se obtienen los datos del formulario ");</script>'; 				

$consComentario = "UPDATE  `comentarios` SET  `Comentario`= '".$comentario."'  WHERE `CodComentario` = '".$idcomentario."' AND `CodArticulo` = '".$codarticulo."'  AND `CodUsu` = '".$idusr."' ";

if($resOpinion = $mysqli->query($consComentario)) {
	//echo '<script language="javascript">alert(" Se realizo la consulta ");</script>'; 
?>
	<script type="text/javascript">
	window.location.href='DetalleArticulo.php?codart=<?php echo $codarticulo; ?>&iduser=<?php echo $idusr; ?>&mod=1';
	</script>
	<?php
}else{

	//echo '<script language="javascript">alert(" No se realizo la consulta ");</script>'; 
?>
	<script type="text/javascript">
	window.location.href='DetalleArticulo.php?codart=<?php echo $codarticulo; ?>&iduser=<?php echo $idusr; ?>&mod=0';
	</script>
	<?php
}
?>
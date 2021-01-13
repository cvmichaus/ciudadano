<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["iduser"];
$comentario = $_POST["comentario"];
$idarticulo = $_POST["codarticulo"];								

$consArt = "INSERT INTO `comentarios` (`CodComentario`, `Codusu`, `CodArticulo`, `Comentario`, `FAlta`, `HAlta` ) 
VALUES (NULL, '".$idusr."' ,'".$idarticulo."', '".$comentario."' , '".$fecha_actual."', '".$hora_actual."' )";

if($resTema = $mysqli->query($consArt)) {

	?>
	
	<script type="text/javascript">
	window.location.href='DetalleArticulo.php?codart=<?php echo $idarticulo ?>&iduser=<?php echo $idusr; ?>';
	</script>

	<?php
}else{

	echo $consArt;
}

} else {
    header("Location: ../index.php");
  }

?>
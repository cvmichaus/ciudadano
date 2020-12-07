<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$titulo = $_POST["titulo"];
$articulo = $_POST["articulo"];


								

$consArt = "INSERT INTO `articulos` (`CodArticulo`, `Titulo`, `DetalleArt`, `CodUsu`, `FechaAlta`, `HoraAlta` ) 
VALUES (NULL, '".$titulo."' ,'".$articulo."', '".$idusr."' , '".$fecha_actual."', '".$hora_actual."' )";

if($resTema = $mysqli->query($consArt)) {

	?>
	
	<script type="text/javascript">
	window.location.href='Foro.php';
	</script>

	<?php
}else{

	echo $consArt;
}

} else {
    header("Location: ../index.php");
  }

?>
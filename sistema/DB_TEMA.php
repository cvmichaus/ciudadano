<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$coduf = $_POST["coduf"];
$codSD = $_POST["codSD"];

$tema = $_POST["tema"];
$subtema = $_POST["subtema"];

								

$consTema = "INSERT INTO `tema` (`CodTema`, `CodUF`, `NumSD`, `Tema`, `Subtema`, `CodUsu`, `HoraA`, `FechaA` ) 
VALUES (NULL, '".$coduf."' ,'".$codSD."', '".$tema."', '".$subtema."', '".$idusr."' , '".$hora_actual."','".$fecha_actual."')";

if($resTema = $mysqli->query($consTema)) {

	?>
	
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=2';
	</script>

	<?php

}else{

	echo $consTema;
}


} else {
    header("Location: ../index.php");
  }

?>
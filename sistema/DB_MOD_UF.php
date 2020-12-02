<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

 $tipo_usuario = $_SESSION['Perfil'];

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");


$COD_UF = $_POST["codUF"];
$idusr = $_POST["idusr"];
$titulo = $_POST["titulo"];
$proyeccion = $_POST["proyeccion"];
$evaluacion = $_POST["evaluacion"];
$finalidad = $_POST["finalidad"];
$competencias = $_POST["competencias"];
$didactica = $_POST["didactica"];
$nsecuencias = $_POST["nsecuencias"];

$cons01 = "UPDATE `euf` SET  `Titulo` = '".$titulo."', `Proyeccion` = '".$proyeccion."', `EvaluacionD` = '".$evaluacion."', `Finalidad` = '".$finalidad."', `Competencias` = '".$competencias."', `DisenioSD` = '".$didactica."', `NSDidacticas` = '".$nsecuencias."'  WHERE  `CodUF` = '".$COD_UF."' ";

if($res1 = $mysqli->query($cons01)) {

		?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($COD_UF); ?>&codns=<?php echo $nsecuencias ;?>&reenvio=1';
	</script>
	<?php
	
}else{
	echo "error";
	
}

} else {
    header("Location: ../index.php");
  }
?>
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

$grado = $_POST["grado"];
$asignaturas = $_POST["asignaturas"];
$grupo = $_POST["grupo"];
$numero_alumnos = $_POST["numero_alumnos"];
$numero_horas = $_POST["numero_horas"];

$CodNS = $_POST['codigons'];
      $tipo_usuario = $_SESSION['Perfil'];


$consDGI = "INSERT INTO `datosidentgrupo` (`CodDIG`, `CodUF`, `CodMaestro`, `Grado`, `Grupo`, `Asignaturas`, `NumeroAlumnos`, `NumeroHoras` , `FaltaDIG`,`HAltaDIG`) VALUES (NULL, '".$coduf."' ,'".$idusr."', '".$grado."', '".$asignaturas."', '".$grupo."' , '".$numero_alumnos."','".$numero_horas."', '".$fecha_actual."','".$hora_actual."')";

if($resDGI = $mysqli->query($consDGI)) {


	?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $CodNS ;?>&reenvio=2';
	</script>
	<?php

}else{

	echo $consDGI;
}



} else {
    header("Location: ../index.php");
  }
?>
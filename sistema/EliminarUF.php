<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$codigoUF = $_POST["codigoUF"];
$codigoNS = $_POST["codigoNS"];
 $tipo_usuario = $_SESSION['Perfil'];

$ConsDel = "DELETE FROM  `euf` WHERE codUF = '".$codigoUF."' ";

if($ResDel = $mysqli->query($ConsDel)) {

			
			if($tipo_usuario == 0){

		?>
		<script type="text/javascript">
		window.location.href='admin.php';
		</script>
		<?php

		}else{

		?>
		<script type="text/javascript">
		window.location.href='maestro.php';
		</script>
		<?php

		}
			

}else{

	echo $ConsDel;
}



} else {
    header("Location: ../index.php");
  }
?>
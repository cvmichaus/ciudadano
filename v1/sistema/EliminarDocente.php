<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$codUsu = $_POST["codUsu"];


$ConsDel = "DELETE FROM  `usuarios` WHERE CodUsuario = '".$codUsu."' ";

if($ResDel = $mysqli->query($ConsDel)) {

			$ConsDel2 = "DELETE FROM  `detalle_usuario` WHERE codUsuario = '".$codUsu."' ";

			if($ResDel2 = $mysqli->query($ConsDel2)) {
			?>
			<script type="text/javascript">
			window.location.href='admin.php';
			</script>
			<?php
			}else{

			echo $ConsDel2;
			}

}else{

	echo $ConsDel;
}




?>
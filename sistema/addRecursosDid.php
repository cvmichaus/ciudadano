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

$nom_recursos = $_POST["nom_recursos"];

$archivodoc = $_FILES['archivo']['name'];

  $target_dir = "RecursosDidacticos/";
   $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
    $info = new SplFileInfo($archivodoc);
      $extension= $info->getExtension();

      if($extension  == 'pdf' ){

			if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {

			$consTema = "INSERT INTO `recursos_didacticos` (`cod_recdid`, `CodUF`, `CodUsu`, `Nombre`, `Archivo`, `Enviado` ) VALUES (NULL, '".$coduf."' ,'".$idusr."', '".$nom_recursos."', '".$archivodoc."', '0' )";

						if($resTema = $mysqli->query($consTema)) {

						?>

						<script type="text/javascript">
						window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($coduf); ?>&codns=<?php echo $codSD ;?>&reenvio=3';
						</script>

						<?php

						}else{

						echo $consTema;
						}

			}	
}


} else {
    header("Location: ../index.php");
  }

?>
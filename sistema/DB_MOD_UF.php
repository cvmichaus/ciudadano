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

//echo '<script language="javascript">alert(" obtenemos datos del form , secuencias '.$nsecuencias.' ");</script>'; 

$cons01 = "UPDATE `euf` SET  `Titulo` = '".$titulo."', `Proyeccion` = '".$proyeccion."', `EvaluacionD` = '".$evaluacion."', `Finalidad` = '".$finalidad."', `Competencias` = '".$competencias."', `DisenioSD` = '".$didactica."', `NSDidacticas` = '".$nsecuencias."'  WHERE  `CodUF` = '".$COD_UF."' ";

if($res1 = $mysqli->query($cons01)) {

	//echo '<script language="javascript">alert("se actualizo EUF");</script>'; 

	$D1 = $mysqli->query("SELECT * FROM  secuencias_didacticas  WHERE CodUF = '".$COD_UF."' AND CodMaestro  = '".$idusr."' ");
                      $totalsecuancias = $D1->num_rows;
                        $totalsecuancias; //TOTAL DE SECUENCIAS
                       $rest = $nsecuencias - $totalsecuancias;

//echo '<script language="javascript">alert(" total seceuncias '.$totalsecuancias.' ");</script>';                        
//echo '<script language="javascript">alert(" total de secuencias '.$rest.' ");</script>'; 

                       if($rest==0){
                       		echo "regresar ya que no se realizaron cambios";
                       }else{

	//echo '<script language="javascript">alert(" total de secuencias a insertar '.$rest.' ");</script>'; 

$traerSD = "SELECT MAX(NumSD) as NumSD FROM secuencias_didacticas WHERE CodUF = '".$COD_UF."' AND CodMaestro  = '".$idusr."' ";
						if($resSD = $mysqli->query($traerSD)) { 
							$dataSD = $resSD->fetch_array();
							

			                $i=0;
			                $x=1;
			                $PHPNumSD =  $dataSD["NumSD"]+1;

									while($i != $rest){
									//echo '<script language="javascript">alert(" total de secuencia real '.$i.' ");</script>'; 
									//echo '<script language="javascript">alert(" total de numero secuencia '.$x.' ");</script>'; 

									$nombreSD="Secuencia Didactica ".$PHPNumSD;

									//echo '<script language="javascript">alert(" Secuencia didactica #'.$PHPNumSD.' ");</script>'; 

									$cons02 = "INSERT INTO `secuencias_didacticas` (`CodSD`, `CodUF`, `CodMaestro`, `Nombre`, `NumSD`) VALUES (NULL, '".$COD_UF."' ,'".$idusr."', '".$nombreSD."', '".$PHPNumSD."')";


									if($res2 = $mysqli->query($cons02)) {
								
									$i++;
									$x++;
									$PHPNumSD ++;
								       }
									}

								?>
	<script type="text/javascript">
	window.location.href='detalles_UF.php?coduf=<?php echo base64_encode($COD_UF); ?>&codns=<?php echo $nsecuencias ;?>&reenvio=1';
	</script>
	<?php

			                 }						
                       } 
   }
 } else {
    header("Location: ../index.php");
  }
?>
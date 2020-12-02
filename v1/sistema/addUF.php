<?php

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 


require("../class/cnmysql.php");

$idusr = $_POST["idusr"];
$nombreUF = $_POST["nombreUF"];
$semestre = $_POST["semestre"];  
$asignatura = $_POST["asignatura"]; 
$MACD = $_POST["MACD"]; 
$numero_alumnos = $_POST["numero_alumnos"]; 
$numero_horas = $_POST["numero_horas"]; 

$temas = $_POST["temas"]; 
$subtemas = $_POST["subtemas"]; 

$componente = $_POST["componente"]; 
$componente_meta = $_POST["componente_meta"]; 
$componente_no_cognitivo = $_POST["componente_no_cognitivo"]; 

$recursos_tema = $_POST["recursos_tema"]; 

$actividades_docentes = $_POST["actividades_docentes"];
$actividades_docentesS2 = $_POST["actividades_docentesS2"];

$actividades_estudiantes = $_POST["actividades_estudiantes"];
$actividades_estudiantesS2 = $_POST["actividades_estudiantesS2"]; 

$criterios_evidencias = $_POST["criterios_evidencias"]; 
$criterios_evidenciasS2 = $_POST["criterios_evidenciasS2"]; 

$nocognitivo_inicial = $_POST["nocognitivo_inicial"]; 
$nocognitivo_basica = $_POST["nocognitivo_basica"]; 
$nocognitivo_autonoma = $_POST["nocognitivo_autonoma"]; 
$nocognitivo_estrategica = $_POST["nocognitivo_estrategica"]; 
$metacognitivo_inicial = $_POST["metacognitivo_inicial"]; 
$metacognitivo_basica = $_POST["metacognitivo_basica"]; 
$metacognitivo_autonoma = $_POST["metacognitivo_autonoma"]; 
$metacognitivo_estrategica = $_POST["metacognitivo_estrategica"]; 
$cognitivo_inicial = $_POST["cognitivo_inicial"]; 
$cognitivo_basica = $_POST["cognitivo_basica"]; 
$cognitivo_autonoma = $_POST["cognitivo_autonoma"];
$cognitivo_estrategica = $_POST["cognitivo_estrategica"]; 

$cons01 = "INSERT INTO `uf` (`codUF`, `NombreUF`, `Semestre`, `MACD`, `Asignatura`, `NumAlumnos`, `NumHoras`, `FechaAlta` , `HoraAlta`, `IDMaestro`) VALUES (NULL, '".$nombreUF."' ,'".$semestre."', '".$MACD."', '".$asignatura."', '".$numero_alumnos."' , '".$numero_horas."','".$fecha_actual."', '".$hora_actual."','".$idusr."')";

if($res1 = $mysqli->query($cons01)) {

	$ObtenCod = "SELECT `codUF` FROM `uf` WHERE  Asignatura = '".$asignatura."' AND Semestre = '".$semestre."' AND  FechaAlta   = '".$fecha_actual."' AND `MACD`  = '".$MACD."' AND `NumAlumnos` =  '".$numero_alumnos."' AND  `NumHoras` = '".$numero_horas."' AND  `HoraAlta` = '".$hora_actual."' ";
/*RE#VISAR AQUI*/
	if($resCons = $mysqli->query($ObtenCod)) {
			$datos = $resCons->fetch_array();
			$CodUF =  $datos["codUF"];

	$cons2 = "INSERT INTO `dsi` (`CodDSI`,`CodUF`,`Tema`,`Subtema`) VALUES (NULL,'".$CodUF."','".$temas."','".$subtemas."')";

					if($res2 = $mysqli->query($cons2)) {

							$cons3 = "INSERT INTO `competencias` (`codComp`,`codUF`,`comCognitivo`,`comMetacognitivo`,`comNocognitivo`) VALUES (NULL,'".$CodUF."','".$componente."','".$componente_meta."','".$componente_no_cognitivo."')";

							if($res3 = $mysqli->query($cons3)) {

										$cons4 = "INSERT INTO `recursos` (`codRec`,`codUF`,`Tema`) VALUES (NULL,'".$CodUF."','".$recursos_tema."')";

										if($res4 = $mysqli->query($cons4)) {

												$cons5 = "INSERT INTO `actividaddocente` (`codActdoc`,`codUF`,`adPSession`,`adSSession`) VALUES (NULL,'".$CodUF."','".$actividades_docentes."','".$actividades_docentesS2."')";

												if($res5 = $mysqli->query($cons5)) {

														$cons6 = "INSERT INTO `actividadestudiante` (`codAE`,`codUF`,`AEPSession`,`AESSession`) VALUES (NULL,'".$CodUF."','".$actividades_estudiantes."','".$actividades_estudiantesS2."')";

														if($res6 = $mysqli->query($cons6)) {

																$cons7 = "INSERT INTO `criteriosyevidencias` (`CodCE`,`codUF`,`cePsession`,`ceSsession`) VALUES (NULL,'".$CodUF."','".$criterios_evidencias."','".$criterios_evidenciasS2."')";

																		if($res7 = $mysqli->query($cons7)) {

																			$cons8 = "INSERT INTO `matriz` (`CodMatriz`,`CodUF`,`IR_NC`,`B_NC`,`A_NC`,`E_NC`,`IR_M`,`B_M`,`A_M`,`E_M`,`IR_C`,`B_C`,`A_C`,`E_C`) VALUES (NULL,'".$CodUF."','".$nocognitivo_inicial."','".$nocognitivo_basica."','".$nocognitivo_autonoma."','".$nocognitivo_estrategica."','".$metacognitivo_inicial."','".$metacognitivo_basica."','".$metacognitivo_autonoma."','".$metacognitivo_estrategica."','".$cognitivo_inicial."','".$cognitivo_basica."','".$cognitivo_autonoma."','".$cognitivo_estrategica."')";

																			if($res8 = $mysqli->query($cons8)) {

																					?>
																					<script type="text/javascript">
																					window.location.href='maestro.php';
																					</script>
																					<?php


																			}else{
																				  echo "ERROR";
																			}

																}

													}

											}

									}else{ echo "error recursos";}
						} else{ echo "error competencias";}

				}else{ echo "error DSI";}



		

	   }

  }


?>
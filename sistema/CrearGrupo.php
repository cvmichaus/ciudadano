<?php
session_start();
if($_SESSION["logueado"] == TRUE) {

set_time_limit(0);
require("../class/cnmysql.php");

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

$user = $_SESSION['UsuarioNombre'];
$iduser = $_SESSION['CodUsuario'];


	 $CodUF = $_POST["codUF"];    
	 $codns =$_POST["codigoNS"];  
	 $numero_estudiantes=$_POST["numero_estudiantes_php"];   
	 $numero_grupos=$_POST["numero_grupos_php"];  

	 echo '<script language="javascript">alert(" Se obtienen los datos del Formulario ");</script>'; 

	 $y=0;
     $x=1;
       while($y != $numero_grupos){
       	echo '<script language="javascript">alert(" entro al while para crear los grupos ");</script>'; 

       	  $consulta1 = "INSERT INTO `grupos` (`CodGrupo`, `CodUF`, `CodUsu`, `FechaAlta`, `HoraAlta`) VALUES (NULL, '".$CodUF."' ,'".$iduser."', '".$fecha_actual."', '".$hora_actual."')";
            if($resultado1 = $mysqli->query($consulta1)) {

            		echo '<script language="javascript">alert(" se inserto el  grupo '.$x.' ");</script>'; 

            		echo '<script language="javascript">alert(" Se obtienen los datos del Grupo Insertado ");</script>'; 

            		$traerCodG = "SELECT CodGrupo FROM grupos WHERE CodUF= '".$CodUF."' AND CodUsu = '".$iduser."'  AND FechaAlta = '".$fecha_actual."' AND HoraAlta = '".$hora_actual."' and marca=0 ";	

            				if($resCodGrupo = $mysqli->query($traerCodG)) {	
													while($dataCG = mysqli_fetch_assoc($resCodGrupo)){

													$CodGrupoPHP =  $dataCG["CodGrupo"];
											echo '<script language="javascript">alert(" se selecciono el  grupo '.$CodGrupoPHP.' ");</script>'; 

															echo '<script language="javascript">alert(" Numero de estudiantes '.$numero_estudiantes.' a insertar al grupo '.$CodGrupoPHP.' ");</script>'; 
																
													$Consulta2 = "SELECT * FROM estudiantes WHERE `CodUF` = ".$CodUF." AND CodGrupo = 0";
																	if($ResCons2 = $mysqli->query($Consulta2)) {
																			while($datos2 = mysqli_fetch_assoc($ResCons2)){ 
																			$CodAlumno = $datos2["CodEstudiante"];

																					$i=0;
																					$j=1;
																					while($i != $numero_estudiantes){

																						echo '<script language="javascript">alert(" Alumno Insertadi  '.$CodAlumno.' ");</script>'; 

																								$consulta01 = "UPDATE `estudiantes`  SET `CodGrupo` = '".$CodGrupoPHP."'  WHERE  `CodUF` = '".$CodUF."' AND CodEstudiante= '".$CodAlumno."' ";
																								if($resultado01 = $mysqli->query($consulta01)) {

																									echo '<script language="javascript">alert(" Alumno actualizado  '.$CodAlumno.' ");</script>'; 

																									$i++;
																					                $j++;
																					
																				          }
																				          
																					}																			   
																	}
																}															

													$consulta01 = "UPDATE `grupos`  SET `marca` = 1  WHERE  `CodGrupo` = '".$CodGrupoPHP."' AND CodUF= '".$CodUF."' ";
													if($resultado01 = $mysqli->query($consulta01)) {

											echo '<script language="javascript">alert(" se actualizo el  grupo '.$CodGrupoPHP.' ");</script>'; 

													}	
       	                        $y++;
								$x++;
						         	}
						           }
							}
		
            }/*END DEL WHILE DE LOS GRUPOS*/
}else{
echo "jajaja";
}
?>
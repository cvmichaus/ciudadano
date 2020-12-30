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

			if(isset($_POST["elegir"])){
			$creaciongrupo = "usuario";
			}else{
			$creaciongrupo ="sistema";
			}		
		
			$CodUF = $_POST["codUF"];
			$codns =$_POST["codigoNS"];
			$numero_estudiantes=$_POST["numero_estudiantes"];
			$numero_grupos=$_POST["numero_grupos"];
			

if(isset($_POST["elegir"])){

echo '<script language="javascript">alert(" se eligio crear los grupos por el usuario");</script>'; 
 			$y=0;
 			$x=1;
             while($y != $numero_grupos){
             	echo '<script language="javascript">alert(" entro al while para crear los grupos ");</script>'; 

            $consulta1 = "INSERT INTO `grupos` (`CodGrupo`, `CodUF`, `CodUsu`, `FechaAlta`, `HoraAlta`) VALUES (NULL, '".$CodUF."' ,'".$iduser."', '".$fecha_actual."', '".$hora_actual."')";
            if($resultado1 = $mysqli->query($consulta1)) {
             	echo '<script language="javascript">alert(" se inserto el  grupo '.$x.' ");</script>'; 

             	echo '<script language="javascript">alert(" entro al while para crear los estudiantes ");</script>'; 
	$traerCodG = "SELECT CodGrupo FROM grupos WHERE CodUF= '".$CodUF."' AND CodUsu = '".$iduser."'  AND FechaAlta = '".$fecha_actual."' AND HoraAlta = '".$hora_actual."'  ";				
					          	
								$y++;
								$x++;

	echo '<script language="javascript">alert(" Nuemro de estudiantes a insertar x grupo '.$numero_estudiantes.' ");</script>'; 

								$i=0;
								$j=1;
								
										while($i !=$numero_estudiantes){

											if($resCodGrupo = $mysqli->query($traerCodG)) {	
													while($dataCG = mysqli_fetch_assoc($resCodGrupo)){
													$CodGrupoPHP =  $dataCG["CodGrupo"];

													$Consulta2 = "SELECT * FROM estudiantes WHERE `CodUF` = ".$CodUF." AND CodGrupo=0";
																	if($ResCons2 = $mysqli->query($Consulta2)) {
																			while($datos2 = mysqli_fetch_assoc($ResCons2)){ 
																			$CodAlumno = $datos2["CodEstudiante"];
																			$consulta0 = "INSERT INTO `alumnos_grupos` (`CodAlumnos`, `CodGrupo`, `CodUF`, `CodMaestro`, `CodUsu`, `Estatus`, `FaltaG`, `HoraG`)
																			                                        VALUES (NULL, '".$CodGrupoPHP."' ,'".$CodUF."','".$iduser."','".$CodAlumno."','1', '".$fecha_actual."', '".$hora_actual."')";
																							if($resultado0 = $mysqli->query($consulta0)) {		

																										$consulta01 = "UPDATE `estudiantes`  SET `CodGrupo` = '".$CodGrupoPHP."'  WHERE  `CodUF` = '".$CodUF."' AND CodUsuario= '".$CodAlumno."' ";
																										if($resultado01 = $mysqli->query($consulta01)) {		

																										echo '<script language="javascript">alert(" se inserto el estudiante  '.$j.' en el grupo '.$CodGrupoPHP.' ");</script>'; 

																										$i++;
																										$j++;

																										}else{ echo $consulta01; }//IF INSERTAR UPDATE
																							}else{ echo $consulta0; }//IF INSERTAR ALUMNOS GRUPOS
																					}//WHILE DATOS 2
																     }else{ echo $Consulta2; }//IF RESCONS2
												                }//WHILE DATA TRAER GRUPO
												    }else{ echo $traerCodG; }//IF TRAER GRUPO	
										}//WHILE ESTUDIANTES											
             	  }else{ echo $consulta1; }//SI SE INSERTO EL GRUPO
  }//WHILE GRUPOS
    ECHO "FINALIZA TODO JEJEJEJ";
 /*-----------------------------------------------------------------------------------------*/
 /*-----------------------------------------------------------------------------------------*/
			}else{
			
						$D2 = $mysqli->query("SELECT * FROM  estudiantes WHERE CodUF = ".$CodUF." ");
						$total_alumnosDB = $D2->num_rows;
						echo "Alumnos an BD: "; echo $total_alumnosDB ; echo "<br>";    

						$divisor = $total_alumnosDB;

						for($i = 1; $i < $divisor; $i ++) {
						if ($divisor % $i == 0) {
						echo $i;
						}
						}

			}


  } else {
    header("Location: ../index.php");
  }
 
?>
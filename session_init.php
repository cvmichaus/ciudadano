<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual

if(isset($_POST["enviar"])) {
 
	require("class/cnmysql.php");
  
	  $loginPassword = $_POST["password"]; 
	  $loginUser = $_POST["username"]; 


		$consulta = "SELECT * FROM `usuarios` WHERE correo= '".$loginUser."'  AND Clave= '".$loginPassword."' and estatus = '1' ";
		if($resultado = $mysqli->query($consulta)) {
				

				$row = $resultado->fetch_array();
 	
					 $userok = $row["Usuario"];        
					 $passok = $row["Clave"];             
					 $perfil = $row["Perfil"];           
					 $codusuariook =  $row["CodUsuario"]; 
					

					if(isset($userok)){

						$consulta2 = "UPDATE `usuarios`  SET `enlinea`= 1 WHERE `CodUsuario` = '".$codusuariook."' ";

						if($resultado2 = $mysqli->query($consulta2)){
							
							if( isset($loginPassword)) {
								
									if( $loginPassword == $passok) {
										
											if($perfil == 0){/*ADMIN*/

											session_start();
											$_SESSION["logueado"] = TRUE;
											$_SESSION['CodUsuario'] = $row["CodUsuario"];
											$_SESSION['UsuarioNombre'] = $row["Usuario"];
											$_SESSION['Perfil'] = $row["Perfil"];
											//$_SESSION['ImagenAvatar'] = $row["imagen"];
											//echo '<script language="javascript">alert("Perfil Admin");</script>';
											header("Location: sistema/home.php");

											}
											else if($perfil == 1){/*MAESTRO*/

											session_start();
											$_SESSION["logueado"] = TRUE;
											$_SESSION['CodUsuario'] = $row["CodUsuario"];
											$_SESSION['UsuarioNombre'] = $row["Usuario"];
											$_SESSION['Perfil'] = $row["Perfil"];
											//$_SESSION['ImagenAvatar'] = $row["imagen"];
											//echo '<script language="javascript">alert("Perfil Admin");</script>';
											header("Location: sistema/home.php");

											}
											else if($perfil == 2){/*ALUMNO*/

											session_start();
											$_SESSION["logueado"] = TRUE;
											$_SESSION['CodUsuario'] = $row["CodUsuario"];
											$_SESSION['UsuarioNombre'] = $row["Usuario"];
											$_SESSION['Perfil'] = $row["Perfil"];
											//$_SESSION['ImagenAvatar'] = $row["imagen"];
											//echo '<script language="javascript">alert("Perfil Admin");</script>';
											header("Location: sistema/home.php");

											}
											else if($perfil == 3){/*PUBLICO EN GENERAL*/

											session_start();
											$_SESSION["logueado"] = TRUE;
											$_SESSION['CodUsuario'] = $row["CodUsuario"];
											$_SESSION['UsuarioNombre'] = $row["Usuario"];
											$_SESSION['Perfil'] = $row["Perfil"];
											//$_SESSION['ImagenAvatar'] = $row["imagen"];
											//echo '<script language="javascript">alert("Perfil Admin");</script>';
											header("Location: sistema/home.php");

											}
											else{
											//echo '<script language="javascript">alert("Sin Perfil");</script>';
											header("Location: index.php?error=perfil");
											}

									}
									else{
									header("Location: index.php?error=login");	
									}	
							}
							else{
								header("Location: index.php?error=login");	
							}
						}
						else{
							header("Location: index.php?error=userok");
						}				
		}

	else{
		header("Location: index.php?error=login");
	}
}



	}else if(empty($_POST["enviar"])) {
		header("Location: index.php?error=login");
		}
		else {
			header("Location: index.php?error=login");
		}

?> 
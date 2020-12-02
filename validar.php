<?php
require("class/cnmysql.php");
  
	  $loginPassword = $_GET["pass"]; 
	  $loginUser = $_GET["correo"]; 


	  $consulta = "SELECT * FROM `usuarios` WHERE correo= '".$loginUser."'  AND Clave= '".$loginPassword."' and estatus = '0' ";

	  if($resultado = $mysqli->query($consulta)) {

	  	$row = $resultado->fetch_array();
 	
					 $userok = $row["Usuario"];        
					 $passok = $row["Clave"];             
					 $perfil = $row["Perfil"];           
					 $codusuariook =  $row["CodUsuario"]; 
					

					if(isset($userok)){

								$consulta2 = "UPDATE `usuarios`  SET `estatus`= 1 WHERE `CodUsuario` = '".$codusuariook."' ";

								if($resultado2 = $mysqli->query($consulta2)){

									echo '

												<html>
	<head>
	<title>Bienvenido Usuario  </title>
	   <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<br>
		<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<img src="img/site_logo.png">
			</div>
			<div class="col-4">				
			</div>
		</div>
			<br>
	<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<h1>Validado Efectivamente </h1>
				<p> Favor de regresar al sitio para iniciar sesión  correctamente </p>
			</div>
			<div class="col-4">
				
			</div>
		</div>

		<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				
			
			 <a  href="index.php" class="btn btn-lg btn-primary btn-block" style="font-family: Roboto;background-color:#a31d24;color:#FFF;font-size: 15px; "> Inicar Session </a>

		
			</div>
			<div class="col-4">
				
			</div>
		</div>
<br><br><br>
		<div class="row" style="background-color: #BBC;color:#FFF;">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<p style="text-align: center;vertical-align: middle;">
			Contactanos
			<br>
			<strong>www.cciudadano.org.mx</strong>
		</p>
			</div>
			<div class="col-4">
				
			</div>
		</div>
	</body>
	</html>

									    ';

								}else{
									echo ' 
										<html>
	<head>
	<title>Bienvenido Usuario  </title>
	   <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<br>
		<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<img src="img/site_logo.png">
			</div>
			<div class="col-4">				
			</div>
		</div>
			<br>
	<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<h3> No se encontró tu registro </h3>
				<p> No encontramos su registro en la base de datos, Favor de regresar al sitio para registrarse correctamente o póngase en contacto con el administrador del sitio  </p>
			</div>
			<div class="col-4">
				
			</div>
		</div>

		<div class="row">
			<div class="col-4">				
			</div>
			<div class="col-4">
				
			
			 <a  href="index.php" class="btn btn-lg btn-primary btn-block" style="font-family: Roboto;background-color:#a31d24;color:#FFF;font-size: 15px; "> Regresar  </a>

		
			</div>
			<div class="col-4">
				
			</div>
		</div>
<br><br><br>
		<div class="row" style="background-color: #BBC;color:#FFF;">
			<div class="col-4">				
			</div>
			<div class="col-4">
				<p style="text-align: center;vertical-align: middle;">
			Contactanos
			<br>
			<strong>www.cciudadano.org.mx</strong>
		</p>
			</div>
			<div class="col-4">
				
			</div>
		</div>
	</body>
	</html>
									';
								}

					}


	  }

?>
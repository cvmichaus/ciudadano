<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="estilo_index.css">
	<!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row align-items-center">
		  <div class="col-1-sm ">
          </div>
          <div class="col-1-sm ">
          </div>
          <div class="col-1-sm ">
          </div>
          <div class="col-1-sm ">
          </div>
          <div class="col-5-sm ">
				<div class="row align-items-center">
				
				<div class="col-12" style="text-align: center;">
				<img class="logo" src="img/CCIUDADANO_footerlogo.png" alt="" width="330px" height="51px" >
				</div>

				</div>

		<div class="row align-items-center" style="box-sizing: border-box; height: 281px; width: 324px; border: 1px solid #D4D4D4;  border-radius: 10px;">
		<div class="col-12">
		<center><label style="height: 16px; width: 84px; color: #A31D24; font-family: Roboto;
		font-size: 14px;  letter-spacing: 0;  line-height: 16px;">Iniciar Sesión  </label></center>           
		</div>
					<div class="col-12">
					<form class="form-signin" method="POST"  action="session_init.php">
					<div class="form-group">
					<label for="exampleFormControlInput1">Correo</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Ingresar tu correo">
					</div>

					<div class="form-group">
					<label for="exampleFormControlInput1">Contraseña</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña"><i class="fas fa-eye-alt fa-sm"></i>
					</div>
					<script>
					function show() { 
					var p = document.getElementById('pwd'); 
					p.setAttribute('type','text'); } 
					function hide() { 
					var p = document.getElementById('pwd'); 
					p.setAttribute('type','password'); 
					} 
					function showHide() { 
					var pwShown = 0; 
					document.getElementById("eye").addEventListener("click", function() { 
					if (pwShown == 0) 
					{ pwShown = 1; 
					show(); } else { 
					pwShow = 0; hide(); }
					}, false); }
					</script>

					<div class="form-group" style="text-align: center;">
					<input type="submit" name="enviar" class="btn btn-danger" style="background-color:#a31d24;color:#fff;font-size: 12px; " value="Ingresar">
					</div>
					</form>        
					</div>
		</div>
		</div>
		<div class="col-1-sm ">
		</div>
		<div class="col-1-sm ">
		</div>
		<div class="col-1-sm ">
		</div>
		</div>		    	
    	 
 
    </div>
    <footer class="container-fluid text-center" style="background-color:#d6d6d6;width: 100%;">
		<div class="row">
			<div class="col-4">
				asd
			</div>
			<div class="col-4">
				asd
			</div>
			<div class="col-4">
				asd
			</div>
			<div class="col-4">
				asd
			</div>
		</div>		    	
    	 
    </div>


</body>
</html>
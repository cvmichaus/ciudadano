<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

	$ID_UF = base64_decode($_GET['codUF']); 
	$CODSD = $_GET['codSD']; 

       
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="stylo.css">
  <link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>

<body>
  <!-- MAIN -->
     <div id="wrapper">
       <!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top" style="background-color: #f0f0f0;">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="../img/CCIUDADANO_footerlogo.png" width="30%" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="position: inherit; width: 700px; margin-right: 0%;font-family: Roboto; font-size: 12px;color:#a31d24;">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#a31d24;font-size: 16px;font-family: Roboto;font-weight: bold;">Inicio </a>  </li>      
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#000;font-size: 16px;font-family: Roboto;font-weight: bold;">Foro</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#000;font-size: 16px;font-family: Roboto;font-weight: bold;">Sobre CCIUDADANO </a>  </li>          
        <li class="nav-item"> <a class="nav-link" href="logout.php">
          <img src="../img/Perfil.png" alt="" style="position: inherit; width: 50px;margin-right: 0%;margin-top: -12px; "></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <!-- Navigation -->
          <div id="page-wrapper">
            <!-- Page Content -->
             <div class="container-fluid">
                 <div class="row">
                       <div class="col-md-12">
                             <div class="white-box" >

                              <div id="principal" style="  border-color: #ccc; border-width: 1px; border-style: solid;border-radius: 6px;padding-right: 80px;padding-bottom: 20px;padding-left: 80px;margin: 0 0 25px">


                              
                                <br>
                                 <div class="row">
                                  <div class="col-md-3">
                                      <a href="detalles_UF.php?coduf=<?php echo base64_encode($ID_UF);?>"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                      
                                  </div>
                                </div>
                                <br>
								
								<div class="row" >
								<div class="col-md-12">
								<h2>Secuencia Didáctica <?php echo $CODSD; ?></h2>
								</div>
								</div>

								

								<div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >Secuencia didáctica : reconocimiento inicial de la problemática</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                          
                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" > Tema <span style="cursor: pointer;" class="oi oi-info" data-toggle="modal" data-target="#exampleModal" ></span></p>
                            </div>
                            </div>

                            <!--MODAL DIAGNOSTICO INICIAL-->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Detallo los componentes formales que me ayudan a ubicar la Secuencia Didáctica (SD) dentro de la unidad de Formación (UF), parto del currículo del nivel educativo y el área de conocimiento.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                                 <!--MODAL DIAGNOSTICO INICIAL-->
<?php
$QueryTema = "SELECT * FROM  tema  WHERE `CodUF` =  ".$ID_UF." AND NumSD = ".$CODSD." ";
      if($ResTema = $mysqli->query($QueryTema)) {
		  
		   $ExisteTema = mysqli_num_rows($ResTema);
		   
		    if(empty($ExisteTema)){
				?>
				 <form method="post" action="DB_TEMA.php">

								<div class="row">
								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Tema</p>

								<textarea class="form-control" id="tema" required name="tema" aria-describedby="tema" placeholder="Escriba Aqui"></textarea>
                                <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">

								</div>

								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Subtema</p>

								<textarea class="form-control" id="subtema" required name="subtema" aria-describedby="subtema" placeholder="Escriba Aqui"></textarea>
                               	</div>


								</div>

								<div class="row">
									<div class="col-md-12">
										<br><br><br>
                                  </div>
								</div>

								<div class="row">
									<div class="col-md-12">
                                  </div>
								</div>

								<div class="row">
									<div class="col-md-12">
                                  </div>
								</div>

								
								<div class="row">
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  <input type="submit" class="btn btn-outline-danger btn-lg" value="Guardar">
                                  </div>
                                </div>

								</div>

                                  </form>
				<?php
			}else{
				 while($datos = mysqli_fetch_assoc($ResTema)){ 
			?>
       <form method="post" action="DB_MOD_TEMA.php">
					<div class="row">
								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Tema</p>

								<textarea style="border: 0;background-color: #ccc;" class="form-control" rows="10" id="tema" required name="tema" aria-describedby="tema" readonly placeholder="Escriba Aqui"><?php echo $datos["Tema"]; ?></textarea>

                 <input type="hidden" name="codTema" id="codTema" value="<?php echo $datos["CodTema"]; ?>">
                  <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">
                               

								</div>

								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Subtema</p>

								<textarea readonly style="border: 0;background-color: #ccc;" rows="10" class="form-control" id="subtema" required name="subtema" aria-describedby="subtema" placeholder="Escriba Aqui"><?php echo $datos["Subtema"]; ?></textarea>
                               	</div>


								</div>

                 <div class="row">
                            <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                    <br>
                                    <a  onclick="activar_edicion_tema();" id="botonEditar" name="botonEditar" class="btn btn-outline-danger btn-sm" >Editar Información</a>
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                    <br>
                                  <input type="submit" id="botonGuardaMod" name="botonGuardaMod" style="visibility: hidden;" class="btn btn-outline-danger btn-sm" value="Guardar Modificaciones">
                                  </div>
                            </div>

                          </form>
                            <script>
                              function activar_edicion_tema(){
                               
                               document.getElementById('tema').readOnly = false ;
                                document.getElementById('tema').style.backgroundColor = "white";   
                                document.getElementById('subtema').readOnly = false ;
                                 document.getElementById('subtema').style.backgroundColor = "white";
                                alert("Ya puedes editar tu Información");
                                 document.getElementById('botonGuardaMod').style.visibility = "inherit";
                                  document.getElementById('botonEditar').style.visibility = "hidden";


                              }
                            </script>

								<div class="row">
									<div class="col-md-12">
										<br><br><br>
                                  </div>
								</div>

								

								</div>
				<?php
			}

	  }
	  }
?>
                                 


                              </div>
                          
 </div>
             <!-- Page Content -->
          </div>   
     </div>
  </div> 
</div>   
      <!-- MAIN -->
      <footer class="mastfoot mt-auto" style="background-color: #eaeaea;color:#000;">
        <div class="container">
  <div class="row">
    <div class="col-sm">
      <br>
      <img src="../img/CCIUDADANO_footerlogo.png" width="60%" alt="">
    </div>
    <div class="col-sm" style="font-size: 11px;font-family: Roboto;">
    Contactanos<br>
    <img src="../img/Phone.png" width="5%"> Telefono: 54 87 71 10 <br>
    Calle Miguel Hidalgo s/n esquina<br>
    Mariano Matamoros, 14000<br>
    Ciudad de Mexico
    <br>
    </div>
    <div class="col-sm">
      Siguenos en:<br>
      <img src="../img/Facebook.png" width="8%">
      <br>
    </div>
  </div>
  <br>
</div>
      </footer>
</body>
<script src="js/funciones.js"></script>
</html>
   <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
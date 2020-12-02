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
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" > Competencias <span style="cursor: pointer;" class="oi oi-info" data-toggle="modal" data-target="#exampleModal" ></span></p>
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
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                                 <!--MODAL DIAGNOSTICO INICIAL-->
<?php
$Query = "SELECT * FROM  competencias  WHERE `CodUF` =  ".$ID_UF." AND NumSD = ".$CODSD." ";
      if($Res = $mysqli->query($Query)) {
      
       $Existe = mysqli_num_rows($Res);
       
        if(empty($Existe)){
        ?>


            <form method="post" action="DB_COMPETENCIAS.php">

            <div class="row">
            <div class="col-md-6">

            <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
            <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
            <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">

            </div>


            </div>

            <div class="row">


            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente">Componente Cognitivo (explicito) </label>                               
            <textarea rows="6" cols="" class="form-control" name="componente" id="componente" aria-describedby="componente" placeholder="componente"></textarea>
            </div>                                 
            </div>


            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente_meta">Componente Metacognitivo (Tácito)</label>
            <textarea rows="6" cols=""  class="form-control" name="componente_meta" id="componente_meta" aria-describedby="componente_meta" placeholder="componente meta"></textarea>
            </div>                                 
            </div>

            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente_no_cognitivo">Componente No cognitivo (Casual)</label>
            <textarea rows="6" cols=""  class="form-control" name="componente_no_cognitivo" id="componente_no_cognitivo" aria-describedby="componente_no_cognitivo" placeholder="componente no cognitivo"></textarea>
            </div>                                 
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
         while($datos = mysqli_fetch_assoc($Res)){ 
      ?>

<form method="post" action="DB_MOD_COMPETENCIAS.php">

            <div class="row">
            <div class="col-md-6">

            <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
            <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
            <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">
            <input type="hidden" name="codCompetencias" id="codCompetencias" value="<?php echo $datos["CodComp"]; ?>">

            </div>


            </div>

            <div class="row">

            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente">Componente Cognitivo (explicito) </label>                               
            <textarea  style="border: 0;background-color: #ccc;" readonly rows="6" cols="" class="form-control" name="componente" id="componente" aria-describedby="componente" placeholder="componente"><?php echo $datos["Cognitivo"]; ?></textarea>
            </div>                                 
            </div>

            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente_meta">Componente Metacognitivo (Tácito)</label>
            <textarea style="border: 0;background-color: #ccc;" readonly rows="6" cols=""  class="form-control" name="componente_meta" id="componente_meta" aria-describedby="componente_meta" placeholder="componente meta"><?php echo $datos["Metacognitivo"]; ?></textarea>
            </div>                                 
            </div>

            <div class="col-md-4">                                    
            <div class="form-group">
            <label for="componente_no_cognitivo">Componente No cognitivo (Casual)</label>
            <textarea style="border: 0;background-color: #ccc;" readonly rows="6" cols=""  class="form-control" name="componente_no_cognitivo" id="componente_no_cognitivo" aria-describedby="componente_no_cognitivo" placeholder="componente no cognitivo"><?php echo $datos["Nocognitivo"]; ?></textarea>
            </div>                                 
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

                        document.getElementById('componente').readOnly = false ;
                        document.getElementById('componente').style.backgroundColor = "white";  

                        document.getElementById('componente_meta').readOnly = false ;
                        document.getElementById('componente_meta').style.backgroundColor = "white";  

                        document.getElementById('componente_no_cognitivo').readOnly = false ;
                        document.getElementById('componente_no_cognitivo').style.backgroundColor = "white";  


                        alert("Ya puedes editar tu Información");
                        document.getElementById('botonGuardaMod').style.visibility = "inherit";
                        document.getElementById('botonEditar').style.visibility = "hidden";


                        }
                        </script>

            </div>

            </form>


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
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
								<h2>Secuencia Didactica <?php echo $CODSD; ?></h2>
								</div>
								</div>

								

								<div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >Secuencia didactica : reconocimiento inicial de la problematica</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                          
                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" > Desarrollo de las sesiones <span style="cursor: pointer;" class="oi oi-info" data-toggle="modal" data-target="#exampleModal" ></span></p>
                            </div>
                            </div>

                            <!--MODAL DIAGNOSTICO INICIAL-->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion</h5>
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
$Query = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$ID_UF." AND NumSD = ".$CODSD." ";
      if($Res = $mysqli->query($Query)) {
      
       $Existe = mysqli_num_rows($Res);
       
        if(empty($Existe)){
        ?>
          <form method="post" action="DB_MATRIZ.php">
          <div class="row">
          <div class="col-md-6">
          <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
          <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
          <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <table class="table">
          <thead>
          <tr>
          <th scope="col">COMPONENTE</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Inicial receptiva</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Basica</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Autonoma</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Estrategica</th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <th scope="row">COGNITIVO</th>
          <td><textarea id="cognitivo_inicial" name="cognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="cognitivo_basica" name="cognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="cognitivo_autonoma" name="cognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="cognitivo_estrategica" name="cognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
          </tr>

          <tr>
          <th scope="row">NO COGNITIVO</th>
          <td><textarea id="nocognitivo_inicial" name="nocognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="nocognitivo_basica" name="nocognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="nocognitivo_autonoma" name="nocognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="nocognitivo_estrategica" name="nocognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
          </tr>

          <tr>
          <th scope="row">MECOGNITIVO</th>
          <td><textarea id="metacognitivo_inicial" name="metacognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="metacognitivo_basica" name="metacognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="metacognitivo_autonoma" name="metacognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
          <td><textarea id="metacognitivo_estrategica" name="metacognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
          </tr>

          </tbody>
          </table>
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

             <form method="post" action="DB_MOD_MATRIZ.php">
          <div class="row">
          <div class="col-md-6">
          <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
          <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
          <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">
          <input type="hidden" name="codMatriz" id="codMatriz" value="<?php echo $datos["CodMatriz"]; ?>">
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <table class="table">
          <thead>
          <tr>
          <th scope="col">COMPONENTE</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Inicial receptiva</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Basica</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Autonoma</th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Estrategica</th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <th scope="row">COGNITIVO</th>
          <td><textarea id="cognitivo_inicial" name="cognitivo_inicial" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["IRCognitivo"]; ?></textarea> </td>
          <td><textarea id="cognitivo_basica" name="cognitivo_basica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["BCognitivo"]; ?></textarea> </td>
          <td><textarea id="cognitivo_autonoma" name="cognitivo_autonoma" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["ACognitivo"]; ?></textarea> </td>
          <td><textarea id="cognitivo_estrategica" name="cognitivo_estrategica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["ECognitivo"]; ?></textarea> </td>
          </tr>

          <tr>
          <th scope="row">NO COGNITIVO</th>
          <td><textarea id="nocognitivo_inicial" name="nocognitivo_inicial" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["IRnoCognitivo"]; ?></textarea> </td>
          <td><textarea id="nocognitivo_basica" name="nocognitivo_basica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["BnoCognitivo"]; ?></textarea> </td>
          <td><textarea id="nocognitivo_autonoma" name="nocognitivo_autonoma" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["AnoCognitivo"]; ?></textarea> </td>
          <td><textarea id="nocognitivo_estrategica" name="nocognitivo_estrategica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["EnoCognitivo"]; ?></textarea> </td>
          </tr>

          <tr>
          <th scope="row">MECOGNITIVO</th>
          <td><textarea id="metacognitivo_inicial" name="metacognitivo_inicial" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["IRmeCognitivo"]; ?></textarea> </td>
          <td><textarea id="metacognitivo_basica" name="metacognitivo_basica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["BmeCognitivo"]; ?></textarea> </td>
          <td><textarea id="metacognitivo_autonoma" name="metacognitivo_autonoma" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["AmeCognitivo"]; ?></textarea> </td>
          <td><textarea id="metacognitivo_estrategica" name="metacognitivo_estrategica" style="border: 0;outline: none;border: 0;background-color: #ccc" readonly rows="6"><?php echo $datos["EmeCognitivo"]; ?></textarea> </td>
          </tr>

          </tbody>
          </table>
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

                        document.getElementById('cognitivo_inicial').readOnly = false ;
                        document.getElementById('cognitivo_inicial').style.backgroundColor = "white"; 

                         document.getElementById('cognitivo_basica').readOnly = false ;
                        document.getElementById('cognitivo_basica').style.backgroundColor = "white"; 

                        document.getElementById('cognitivo_autonoma').readOnly = false ;
                        document.getElementById('cognitivo_autonoma').style.backgroundColor = "white"; 

                        document.getElementById('cognitivo_estrategica').readOnly = false ;
                        document.getElementById('cognitivo_estrategica').style.backgroundColor = "white"; 

                             document.getElementById('nocognitivo_inicial').readOnly = false ;
                        document.getElementById('nocognitivo_inicial').style.backgroundColor = "white"; 

                         document.getElementById('nocognitivo_basica').readOnly = false ;
                        document.getElementById('nocognitivo_basica').style.backgroundColor = "white"; 

                        document.getElementById('nocognitivo_autonoma').readOnly = false ;
                        document.getElementById('nocognitivo_autonoma').style.backgroundColor = "white"; 

                        document.getElementById('nocognitivo_estrategica').readOnly = false ;
                        document.getElementById('nocognitivo_estrategica').style.backgroundColor = "white"; 

                             document.getElementById('metacognitivo_inicial').readOnly = false ;
                        document.getElementById('metacognitivo_inicial').style.backgroundColor = "white"; 

                         document.getElementById('metacognitivo_basica').readOnly = false ;
                        document.getElementById('metacognitivo_basica').style.backgroundColor = "white"; 

                        document.getElementById('metacognitivo_autonoma').readOnly = false ;
                        document.getElementById('metacognitivo_autonoma').style.backgroundColor = "white"; 

                        document.getElementById('metacognitivo_estrategica').readOnly = false ;
                        document.getElementById('metacognitivo_estrategica').style.backgroundColor = "white";  

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
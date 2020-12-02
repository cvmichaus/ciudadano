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


      $tipo_usuario = $_SESSION['Perfil'];

       
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="EstiloSis.css">
 <link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

<link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

<script  src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
.tooltip-inner {
    max-width: 463px;
    /* If max-width does not work, try using width instead */
    width: 463; 
    color: #FFFFFF;
  font-family: Lato;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 15px;
    text-align: justify;
    vertical-align: middle;
    white-space: pre-wrap;
}
</style>
<body>
     <div class="container-fluid">
      <div class="row align-items-start">
              <div class="col-md-1">
              </div>  

               <div class="col-md-10">

  

<?php
include ("menu.php");
?>

              </div>  

               <div class="col-md-1">
              </div>  
    </div>
     </div>
  <!-- MAIN -->
     <div id="wrapper">
       <!-- Navigation -->

        <!-- Navigation -->
          <div id="page-wrapper">
            <!-- Page Content -->
              <div id="page-wrapper">
            <!-- Page Content -->
             <div class="container-fluid">
                 <div class="row">

                    <div class="col-md-1">
                   </div> 

                       <div class="col-md-10">
                             <div class="white-box" >

                              <div id="principal" style="  border-color: #ccc; border-width: 1px; border-style: solid;border-radius: 6px;padding-right: 80px;padding-bottom: 20px;padding-left: 80px;margin: 0 0 25px">


                              
                                <br>
                                 <div class="row">
                                  <div class="col-md-3">
                                      <a href="detalles_UF.php?coduf=<?php echo base64_encode($ID_UF);?>&codns=<?php echo $CODSD ?>&reenvio=2"  style="color: #a31d24;">&nbsp;<- Regresar </a>
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
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" > Tema <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="Detallo los componentes formales que me ayudan a ubicar la Secuencia Didáctica (SD) dentro de la Unidad de Formación (UF), parto del currículo del nivel educativo y el área de conocimiento."></span></p>
                            </div>
                            </div>

                            <!--MODAL DIAGNOSTICO INICIAL-->
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

								<textarea class="form-control" id="tema" required name="tema" aria-describedby="tema" placeholder="Escriba Aqui" maxlength="500"></textarea>
                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 500 / <span id="caracteres2" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit2 = 500;
                          $(function() {
                          $("#tema").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters2 = (limit2 - init);

                          $('#caracteres2').html(total_characters2 + "");
                          });
                          });
                          </script>
                                <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">

								</div>

								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Subtema</p>

								<textarea class="form-control" id="subtema" required name="subtema" aria-describedby="subtema" placeholder="Escriba Aqui" maxlength="500"></textarea>
                 <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 500 / <span id="caracteres" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit1 = 500;
                          $(function() {
                          $("#subtema").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters1 = (limit1 - init);

                          $('#caracteres').html(total_characters1 + "");
                          });
                          });
                          </script>
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

								<textarea style="border: 0;background-color: #ccc;" class="form-control" rows="10" id="tema" required name="tema" aria-describedby="tema" maxlength="500" readonly placeholder="Escriba Aqui"><?php echo $datos["Tema"]; ?></textarea>

                 <input type="hidden" name="codTema" id="codTema" value="<?php echo $datos["CodTema"]; ?>">
                  <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">
                               

								</div>

								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Subtema</p>

								<textarea readonly style="border: 0;background-color: #ccc;" rows="10" class="form-control" id="subtema" required name="subtema" aria-describedby="subtema"  maxlength="500" placeholder="Escriba Aqui"><?php echo $datos["Subtema"]; ?></textarea>
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
                                 


 <div class="col-md-1">
              </div> 
                              </div>
                          
 </div>
             <!-- Page Content -->
          </div>   
     </div>
  </div> 
</div>   
      <!-- MAIN -->
   <?php
include ("pie.php");
?>
</body>
<script src="js/funciones.js"></script>
  <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

    </script>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</html>
   <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
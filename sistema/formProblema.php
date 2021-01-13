<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
       $iduser = $_GET["idusuario"];

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
</head>
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
     
<?php
include ("menu.php");
?>
              </div>  
              
    </div>
     </div>
  <!-- MAIN -->
     <div id="wrapper">
       <!-- Navigation -->

        <!-- Navigation -->
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
                                    <a href="detalles_UF.php?coduf=<?php echo base64_encode($ID_UF);?>&codns=<?php echo $CODSD ?>&iduser=<?php echo $iduser;?>&reenvio=2" style="color: #a31d24;font-size: 12px;text-decoration: none;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar </a>
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
								 <?php
                  $QueryTema2 = "SELECT * FROM  secuencias_didacticas  WHERE `CodUF` = ".$ID_UF." AND codSD = ".$CODSD." ";
                  if($ResTema2 = $mysqli->query($QueryTema2)) {
                  $datos2 = mysqli_fetch_assoc($ResTema2);
                  ?>
                  <h2><?php echo $datos2["Nombre"]; ?></h2>
                  <?php
                  }
                  ?>
								</div>
								</div>

								

								<div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >Secuencia didáctica : reconocimiento inicial de la problematica</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                          
                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" >Problemática significativa del contexto <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="Hago la descripción de una situación escolar, social, personal, familiar, política, artística, experimental, cultural, ambiental, tecnológica, o, entre otras, económica, que sea pertinente, relevante, con sentido y real; a través de la cual busco orientar el proceso de formación de mis estudiantes, de la mano del desarrollo de competencias del control ciudadano de lo público.   

Esta descripción la problematizaré a partir de cuestionamientos iniciales que compartiré y enriqueceré con mis estudiantes, quienes enmarcarán la problemática resultante en un contexto especifico de su entorno; parto de la premisa de que problemática que surge sólo de la parte docente podría incluso carecer de sentido para los estudiantes. 

El problema significativo de contexto es entonces un ejercicio descriptivo que problematizamos conjuntamente mis estudiantes y yo para hacerlo relevante, con sentido y significativo. Orienta la elección de la o las competencias que se buscan desarrollar, sus componentes y las actividades para hacerlo. La formulación del problema significativo de contexto estará en función de lo que en el contexto me resulte pertinente y, entre otras, el lugar que ocupe la misma secuencia didáctica en el conjunto de la Unidad de Formación (la primera de un par o un grupo de ellas, la última de ese par o grupo de ellas, la intermedia, entre otras)" ></span></p>
                            </div>
                            </div>

                            

<?php
$Query = "SELECT * FROM  problema_sig_contexto  WHERE `CodUF` =  ".$ID_UF." AND NumSD = ".$CODSD." ";
      if($Res = $mysqli->query($Query)) {
      
       $Existe = mysqli_num_rows($Res);
       
        if(empty($Existe)){
        ?>

  <form method="post" action="DB_PROBLEMATICA.php">

  <div class="row">
  <div class="col-md-12">

  <textarea class="form-control" id="problematica" required name="problematica" aria-describedby="problematica" placeholder="Escriba Aqui" maxlength="1000"></textarea>
  <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 1000 / <span id="caracteres2" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit2 = 1000;
                          $(function() {
                          $("#problematica").on("input", function () {
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

<form method="post" action="DB_MOD_PROBLEMATICA.php">

  <div class="row">
  <div class="col-md-12">

  <textarea  style="border: 0;background-color: #ccc;" class="form-control" id="problematica" readonly required name="problematica" aria-describedby="problematica" maxlength="1000" placeholder="Escriba Aqui"><?php echo $datos["Problematica"]; ?></textarea>
  <input type="hidden" name="codProblematica" id="codProblematica" value="<?php echo $datos["CodPSC"]; ?>">
                  <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codSD" id="codSD" value="<?php echo $CODSD; ?>">

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
                               
                               document.getElementById('problematica').readOnly = false ;
                                document.getElementById('problematica').style.backgroundColor = "white";   
                                
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
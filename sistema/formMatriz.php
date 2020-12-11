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
<?php
include ("menu.php");
?>
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
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" > Matriz de valoración </p>
                            </div>
                            </div>

                           
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
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Inicial receptiva <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Elementos base necesarios para el desarrollo pleno de la competencia.

METACOGNITIVO:  Elementos base necesarios para la comprensión y el desarrollo pleno posterior de la competencia. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos que se pueden ocupar son del conocimiento y la comprensión.

COGNITIVO: Elementos base necesarios para el desarrollo pleno de la competencia."></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Basica <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Los verbos que podemos considerar en este componente son 1) prototípicos de percepción sensorial. Acciones que anteceden y enriquecen la comprensión, la utilización, el análisis, la síntesis y la evaluación de los siguientes componentes, que se complementan con verbos para: 2) la comunicación que puede nacer de a) la solicitud, b) el intercambio 3) el registro y 4) la actividad colectiva, que se exige en un contexto escolar.

METACOGNITIVO:  Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de aplicación, pero no se descartan los de análisis o síntesis.  

COGNITIVO: Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de análisis o síntesis.
"></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Autonoma <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: En esta y la siguiente columna, para distinguir entre un mismo comportamiento o entre comportamientos, también nos podemos valer de las expresiones 'de manera', 'de forma' (destacada) o del adverbio completo como destacadamente, animadamente, enfáticamente, propositivamente, según se requiera.

METACOGNITIVO:  Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de aplicación, pero no se descartan los de análisis, síntesis o evaluación.  

COGNITIVO: Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son los de síntesis o evaluación.  "></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Estrategica <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Expresa el desarrollo pleno del componente de la competencia.

METACOGNITIVO:  Expresa el desarrollo pleno del componente de la competencia, apoyado en la dimensión no cognitiva. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocuparen esta celda son los de síntesis o evaluación.   

COGNITIVO: Expresa el desarrollo pleno de la competencia, pues además de sumar los niveles valorativos de la dimensión cognitiva, se realiza con base a los componentes meta cognitivo y no cognitivo. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son los de síntesis o evaluación. "></span></th>
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
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Inicial receptiva <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Elementos base necesarios para el desarrollo pleno de la competencia.

METACOGNITIVO:  Elementos base necesarios para la comprensión y el desarrollo pleno posterior de la competencia. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos que se pueden ocupar son del conocimiento y la comprensión.

COGNITIVO: Elementos base necesarios para el desarrollo pleno de la competencia."></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Basica <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Los verbos que podemos considerar en este componente son 1) prototípicos de percepción sensorial. Acciones que anteceden y enriquecen la comprensión, la utilización, el análisis, la síntesis y la evaluación de los siguientes componentes, que se complementan con verbos para: 2) la comunicación que puede nacer de a) la solicitud, b) el intercambio 3) el registro y 4) la actividad colectiva, que se exige en un contexto escolar.

METACOGNITIVO:  Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de aplicación, pero no se descartan los de análisis o síntesis.  

COGNITIVO: Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de análisis o síntesis.
"></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Autonoma <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: En esta y la siguiente columna, para distinguir entre un mismo comportamiento o entre comportamientos, también nos podemos valer de las expresiones 'de manera', 'de forma' (destacada) o del adverbio completo como destacadamente, animadamente, enfáticamente, propositivamente, según se requiera.

METACOGNITIVO:  Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son de aplicación, pero no se descartan los de análisis, síntesis o evaluación.  

COGNITIVO: Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son los de síntesis o evaluación.  "></span></th>
          <th scope="col" style="color:#a31d24;text-transform: capitalize;">Estrategica <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="NO COGNITIVO: Expresa el desarrollo pleno del componente de la competencia.

METACOGNITIVO:  Expresa el desarrollo pleno del componente de la competencia, apoyado en la dimensión no cognitiva. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocuparen esta celda son los de síntesis o evaluación.   

COGNITIVO: Expresa el desarrollo pleno de la competencia, pues además de sumar los niveles valorativos de la dimensión cognitiva, se realiza con base a los componentes meta cognitivo y no cognitivo. Teniendo como referencia la taxonomía de Bloom o de Marzano, los verbos más convenientes para ocupar son los de síntesis o evaluación. "></span></th>
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
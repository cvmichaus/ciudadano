<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

       $tipo_usuario = $_SESSION['Perfil'];
       

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="../bootstrap.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">



      
</head>
<body class="row m-0 bg-white justify-content-center align-items-center vh-100">
  
  <div class="container-fluid">
    
    <?php require("menu.php"); ?>
   </div>


<div class="container-fluid" style="position: relative;width: 100%;height: auto;min-height: 450px;overflow: hidden;text-align: justify;">

      <div class="row">
          <div class="col-1"></div> 
            <div class="col-10">
              <div class="row" style="padding-bottom: 20px;padding-top: 20px;">
                                  <div class="col-3">
                                    <?php
                                       if($tipo_usuario == 0){
                                        ?>
                                         <a href="home.php"  style="color: #a31d24;font-size: 12px;text-decoration: none;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar </a>
                                          <?php
                                          }
                                          else if ($tipo_usuario == 1){
                                          ?>
                                           <a href="home.php"  style="color: #a31d24;font-size: 12px;text-decoration: none;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar </a>
                                          <?php
                                          }                                         
                                          else if ($tipo_usuario == 2){
                                        ?>
                                         <a href="home.php"  style="color: #a31d24;font-size: 12px;text-decoration: none;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar </a>
                                        <?php
                                       }

                                    ?>
                                    
                                  </div>
                                   <div class="col-3">
                                     
                                  </div>
                                  <div class="col-3">
                                     
                                  </div>
                                  <div class="col-3">
                                     
                                  </div>
                                                                   
                                </div>

                                <div class="row">
                               <div class="col-md-12">
                                <h4>Elementos de la Unidad de Formación</h4>
                                </div>
                                </div>


                                 <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#000;text-transform: uppercase;" >creación de la unidad de formación</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#000;" >Todos los campos son obligatorios, puedes guardar datos que tengas en el momento y continuar después.</p>
                            </div>
                            </div>

                            <form method="post" action="DBUF.php">

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Titulo</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="titulo" style="font-family: Roboto;font-size: 12px;color:#000;">¿Cuál es el nombre de mi asignatura, proyecto o el conjunto de formación enmarcadas en mi Unidad de Formación? </label>
                                <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo" placeholder="Escriba Aqui" required maxlength="100">
                                 <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 100 / <span id="caracteres" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit1 = 100;
                          $(function() {
                          $("#titulo").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters1 = (limit1 - init);

                          $('#caracteres').html(total_characters1 + "");
                          });
                          });
                          </script>

                                <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                </div>
                            </div>
                            </div>


                                <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Proyección</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="proyeccion" style="font-family: Roboto;font-size: 12px;color:#000;">¿Mi Unidad de Formación se realizará en el marco de una asignatura; proyecto escolar; la resolución de un problema que abordamos profesores del mismo grado, pero de distintas asignaturas; la formación por practica in situ; entre otros? </label>
                                <textarea class="form-control" id="proyeccion" name="proyeccion" aria-describedby="proyeccion" placeholder="Escriba Aqui" maxlength="1000"></textarea>
                                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 1000 / <span id="pcaracteres" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit2 = 1000;
                          $(function() {
                          $("#proyeccion").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters2 = (limit2 - init);

                          $('#pcaracteres').html(total_characters2 + "");
                          });
                          });
                          </script>
                               
                                </div>
                            </div>
                            </div>

                              <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Evaluación Diagnostica</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="evaluacion" style="font-family: Roboto;font-size: 12px;color:#000;">¿En qué contexto me propongo desarrollar la Unidad de Formación?, ¿Cuál ha sido el acercamiento de mis estudiantes al tema de los derechos económicos, sociales, culturales, ambientales?, ¿Cuál es el perfil de mis estudiantes? ¿Qué conocimientos ya poseen mis estudiantes? ¿Cuáles son las capacidades, destrezas y habilidades que ya dominan mis estudiantes? ¿Qué valores, actitudes y comportamientos predominan en mis estudiantes?</label>
                                <textarea class="form-control" id="evaluacion" name="evaluacion" aria-describedby="evaluacion" placeholder="Escriba Aqui" maxlength="5000"></textarea>
                                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 5000 / <span id="pcaractere3" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit3 = 5000;
                          $(function() {
                          $("#evaluacion").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters3 = (limit3 - init);

                          $('#pcaractere3').html(total_characters3 + "");
                          });
                          });
                          </script>
                               
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Finalidad</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="finalidad" style="font-family: Roboto;font-size: 12px;color:#000;">¿Qué relaciones se construyen entre la asignatura en la que se desarrollara la Unidad de Formación con el entorno y las situaciones problema? ¿De qué sirven las competencias enmarcadas en esta Unidad de Formación (entre otras las referidas al CCP) a mis estudiantes?</label>
                                <textarea class="form-control" id="finalidad" name="finalidad" aria-describedby="finalidad" placeholder="Escriba Aqui" maxlength="1000"></textarea>
                               <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 1000 / <span id="pcaractere4" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit4 = 1000;
                          $(function() {
                          $("#finalidad").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters4 = (limit4 - init);

                          $('#pcaractere4').html(total_characters4 + "");
                          });
                          });
                          </script>
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Competencias, aprendizaje clave o propósitos de la enseñanza </p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="competencias" style="font-family: Roboto;font-size: 12px;color:#000;">¿Qué competencia o competencias CCP empatan con mis competencias, propósitos de enseñanza, aprendizaje esperados, eje SEP o indicaciones de logro?</label>
                                <textarea class="form-control" id="competencias" name="competencias" aria-describedby="competencias" placeholder="Escriba Aqui" maxlength="2000"></textarea>
                                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 2000 / <span id="pcaractere5" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit5 = 2000;
                          $(function() {
                          $("#competencias").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters5 = (limit5 - init);

                          $('#pcaractere5').html(total_characters5 + "");
                          });
                          });
                          </script>
                               
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Diseño de la situación didáctica </p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="didactica" style="font-family: Roboto;font-size: 12px;color:#000;">A partir de la proyección de su proyecto, resolución de problemas, análisis de casos, preguntas generadoras, participación tutelada en investigación, simulaciones situadas, aprendizaje servicio a la comunidad, formación práctica in situ, defina:<br>
                                ¿Cuáles son las actividades iniciales?<br>
                                ¿Cuáles son las actividades de desarrollo?<br>
                                ¿Cuáles son las actividades de cierre?<br>
                                </label>
                                <textarea class="form-control" id="didactica" name="didactica" aria-describedby="didactica" placeholder="Escriba Aqui" maxlength="1000"></textarea>
                                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 1000 / <span id="pcaractere6" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit6 = 1000;
                          $(function() {
                          $("#competencias").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters6 = (limit6 - init);

                          $('#pcaractere6').html(total_characters6 + "");
                          });
                          });
                          </script>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero de Secuencias didácticas</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                <label for="nsecuencias" style="font-family: Roboto;font-size: 12px;color:#000;">¿Cuántas secuencias didácticas se desarrollarán en el marco de este proyecto, la resolución del problema, el análisis de caso, la pregunta generadora, la participación tutelada en investigación, la simulación situada, la formación pro practica in situ?
                                </label>
                                
                               
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                
                                <input type="number" class="form-control" id="nsecuencias" name="nsecuencias"  min="1" aria-describedby="nsecuencias" required placeholder="Escriba Aqui">
                               
                                </div>
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

                            <div class="row"><div class="col-md-12"><br><br></div></div>

                          </form>




            </div> 
              <div class="col-1"></div>      
      </div>
  </div>


<div class="container-fluid">
<div class="row">
    <div class="col-sm-12"> 
    <?php include("pie.php"); ?>
    </div>
</div>
</div>



</body>

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
</html>
  <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
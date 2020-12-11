<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

      $CodNS = $_GET['codns'];
      $tipo_usuario = $_SESSION['Perfil'];

       $ID_UF = base64_decode($_GET['codUF']); 
       
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="EstiloSis.css">
 <link rel="stylesheet" href="../bootstrap.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
<body class="row m-0 bg-white justify-content-center align-items-center vh-100">
   <div class="container-fluid">
    <?php
include ("menu.php");
?>
     </div>
  
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
                                      <a href="detalles_UF.php?coduf=<?php echo base64_encode($ID_UF);?>&codns=<?php echo $CodNS ?>&reenvio=2"  style="color: #a31d24;">&nbsp;<- Regresar </a>
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
								<h2>Datos de identificacion del grupo</h2>
								</div>
								</div>

								

								<div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >Datos de identificacion del grupo</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >Todos los datos</p>
                            </div>
                            </div>


                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#a31d24;text-transform: uppercase;" ><span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-placement="right" title="¿Mi Unidad de Formación se realizará en el marco de una asignatura; proyecto escolar; la resolución de un problema que abordamos profesores del mismo grado, pero de distintas asignaturas; la formación por practica in situ; entre otros?" ></span></p>
                            </div>
                            </div>

                            
                                  <form method="post" action="DBDIG.php">

								<div class="row">
								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grado</p>

								<textarea class="form-control" id="grado" required name="grado" aria-describedby="grado" placeholder="Escriba Aqui" maxlength="50"></textarea>

                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 50 / <span id="caracteres1" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit1 = 50;
                          $(function() {
                          $("#grado").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters1 = (limit1 - init);

                          $('#caracteres1').html(total_characters1 + "");
                          });
                          });
                          </script>
                                <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                 <input type="hidden" name="coduf" id="coduf" value="<?php echo $ID_UF; ?>">
                                 <input type="hidden" name="codigons" id="codigons" value="<?php echo $CodNS ?>">

								</div>

								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Asignaturas</p>

								<textarea class="form-control" id="asignaturas" required name="asignaturas" aria-describedby="asignaturas" placeholder="Escriba Aqui" maxlength="100"></textarea>
                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 100 / <span id="caracteres2" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit2 = 100;
                          $(function() {
                          $("#asignaturas").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters2 = (limit2 - init);

                          $('#caracteres2').html(total_characters2 + "");
                          });
                          });
                          </script>
                               	</div>

								</div>

								<div class="row">
								<div class="col-md-6">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grupo</p>

								<textarea class="form-control" id="grupo" name="grupo" required aria-describedby="grupo" placeholder="Escriba Aqui" maxlength="99"></textarea>
                 <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 99 / <span id="caracteres3" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit3 = 99;
                          $(function() {
                          $("#grupo").on("input", function () {
                          //al cambiar el texto del txt_detalle
                          var init = $(this).val().length;
                          total_characters3 = (limit3 - init);

                          $('#caracteres3').html(total_characters3 + "");
                          });
                          });
                          </script>
                               	</div>

								<div class="col-md-3">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Alumnos</p>
								<input type="number"  class="form-control" required name="numero_alumnos" id="numero_alumnos" aria-describedby="numero_alumnos" placeholder="Numero Alumnos" min="1" max="999" value="0">
								</div>

								<div class="col-md-3">
								<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Horas</p>
								 <input type="number"  class="form-control" required name="numero_horas" id="numero_horas" aria-describedby="numero_horas" placeholder="numero_horas" min="1" max="99" value="0"> </div>


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

 <div class="col-md-1">
              </div> 
                              </div>
                          
 </div>
             <!-- Page Content -->
          </div>   
     </div>

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
</html>
   <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
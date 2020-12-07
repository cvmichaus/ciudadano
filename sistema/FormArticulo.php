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
 <link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">



      
</head>
<body class="row m-0 bg-white justify-content-center align-items-center vh-100">
  
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
  </div>


  <div id="page-wrapper" style="width: 96%; height: 100%;">

      <div class="row align-items-start">
              <div class="col-md-1">
              </div> 

              <div class="col-md-10">

                  <div class="row">
                            <div class="col-md-12">
                            <a href="Foro.php" style="color:#a31d24;"> <- Regresar</a>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <h1>Articulo</h1>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#000;text-transform: uppercase;" >creación de un Articulo</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#000;" >Todos los campos son obligatorios.</p>
                            </div>
                            </div>
                    
                     <form method="post" action="BDArticulo.php">

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Titulo</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                               
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
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Articulo</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="articulo" style="font-family: Roboto;font-size: 12px;color:#000;"></label>
                                <textarea class="form-control" id="articulo" name="articulo" aria-describedby="articulo" placeholder="Escriba Aqui" maxlength="5000"></textarea>
                                <small id="passwordHelpBlock" style="text-align: right;" class="form-text text-muted">
Caracteres 5000 / <span id="pcaracteres" ></span>  
</small>   
                          <script type="text/javascript">
                          var limit2 = 5000;
                          $(function() {
                          $("#articulo").on("input", function () {
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
                            <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  <input type="submit" class="btn btn-outline-danger btn-lg" value="Guardar articulo">
                                  </div>
                            </div>

                          </form>
                      
              </div> 

              <div class="col-md-1">
              </div>  
                                 
                                 
        </div>
        <br>
<?php
include ("pie.php");
?>

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
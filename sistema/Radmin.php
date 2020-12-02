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
    <link rel="stylesheet" href="EstiloSis.css">
 <link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">



      
</head>
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
  </div>


  <div id="page-wrapper">

      <div class="row align-items-start">
              <div class="col-md-1">
              </div> 

              <div class="col-md-10">

                 <div class="white-box">

                  
            <div class="row" style="text-align: center;vertical-align: middle;padding-bottom: 20px;padding-top: 20px;">
            <div class="col-6">

            <form class="example form-inline" action="#">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            </div>
            <div class="col-6">
            <a href="FormUF.php" class="btn btn-danger btn-sm" style="background-color: #a31d24">Crear una nueva Unidad de Formacion</a>
            </div>
            </div>

            <div class="row" style="text-align: center;vertical-align: middle;">
            <?php

            $ConsultaPrincipal = "SELECT a.CodUF,a.Titulo,a.NSDidacticas,b.Grado,b.Grupo,b.Asignaturas,b.NumeroAlumnos,b.NumeroHoras 
            FROM euf as a 
             LEFT JOIN datosidentgrupo as b  ON a.CodUF = b.CodUF
            WHERE  a.CodMaestro =  ".$iduser." ";
            if($ResQry = $mysqli->query($ConsultaPrincipal)) {
            while($data = mysqli_fetch_assoc($ResQry)){ 
            $CodUFxD = $data['CodUF'];  
             $NSD = $data['NSDidacticas'];     
            ?>
            <div class="col-4">
            <div class="card">
            <div class="card-body">
            <label style=" color: #2B2B2B; font-family: Lato; font-size: 16px; font-weight: bold; letter-spacing: 0; line-height: 19px;" class="card-title"><?php echo $data['Titulo']; ?></label>
            <p class="card-text" style="olor: #2B2B2B; font-family: Lato; font-size: 14px; letter-spacing: 0; line-height: 17px; text-align: left;">
                Grado: <?php echo $data['Grado']; ?> <br>
                Asignatura(s) / proyecto: <?php echo $data['Asignaturas']; ?> <br>
                Número de alumnos: <?php echo $data['NumeroAlumnos']; ?> <br>
                Número de horas: <?php echo $data['NumeroHoras']; ?> <br>
            </p>
            <center><a href="detalles_UF.php?codns=<?php echo $NSD; ?>&coduf=<?php echo base64_encode($CodUFxD);?>" class="btn btn-primary" style=" height: 30px;
  width: 83px;
  border-radius: 5px;
  background-color: #A31D24;text-align: center;vertical-align: middle;font-family: Lato;
  font-size: 14px;
  letter-spacing: 0;
  line-height: 17px;"> Ver </a></center>
            </div>
            </div>
            </div>
            <?php
            }
            }
            ?>
            </div>
          </div>



              </div> 

              <div class="col-md-1">
              </div>  
                                 
                                 
        </div>

  </div>

<?php
include ("pie.php");
?>

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
<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

       $ID_UF = base64_decode($_GET['coduf']); 
       $NS_UF = $_GET['codns']; 
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body <?php
 if(isset($_GET["reenvio"])) {
      if($_GET["reenvio"] == 2){
         ?>
        onload="ejecuta_ajax('secuencias_didactica.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
      }else{
        ?>
        onload="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $ID_UF; ?>','contenidos')"
      <?php
      }

  }else{
      ?>
        onload="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $ID_UF; ?>','contenidos')"
      <?php
  }
?> >
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
             <div class="container-fluid">
                 <div class="row">

                    <div class="col-md-1">
                   </div> 

                       <div class="col-md-10">
                             <div class="white-box">

                              <div id="principal" style="  border-color: #ccc; border-width: 1px; border-style: solid;border-radius: 6px;">
                                <br>
                                <div class="row" style="padding-bottom: 20px;padding-top: 20px;">
                                  <div class="col-md-3">
                                    <?php
                                       if($tipo_usuario == 0){
                                        ?>
                                         <a href="admin.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                          <?php
                                          }
                                          else if ($tipo_usuario == 1){
                                          ?>
                                           <a href="maestro.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                          <?php
                                          }                                         
                                          else if ($tipo_usuario == 2){
                                        ?>
                                         <a href="estudiantes.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                        <?php
                                       }

                                    ?>
                                    
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                      
                                  </div>
                                </div>
                                <br>
  <?php
  $ConsultaPrincipal = "SELECT * FROM  euf WHERE `CodUF` =  ".$ID_UF." ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
  while($data = mysqli_fetch_assoc($ResQry)){ 
    
  ?>
                                    <div class="row" style="margin-right: 35px;">
                                    <div class="col-md-12">
                                    <label style="color: #a31d24;font-weight: bolder;text-indent: 20pt; "><?php echo $data['Titulo']; ?></label>
                                    </div>
                                    </div>


                                     <div class="row">
                                  <div class="col-md-4">
                                          <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-data-transfer-download" ></span> Descargar </a>  <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-print" ></span> Imprimir </a> <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-share" ></span> Compartir </a>                                        
                                  </div>
                                   <div class="col-md-2">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3" style="text-align: right;vertical-align: middle;">
                                      <!--
                                      <a href="deleteuf.php" class="btn btn-danger btn-sm" style="color: #a31d24;background-color: #fff;"><span class="oi oi-trash" ></span> Eliminar UF </a>-->


                                <form method="post" action="EliminarUF.php" id="from1">
  <input type="hidden" id="codigoUF" name="codigoUF" value="<?php echo $ID_UF; ?>">
<input type="hidden" name="codigoNS" id="codigoNS" value="<?php echo $NS_UF; ?>">
  <button  class="btn btn-light" id="btnEliminar" style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;cursor: pointer;" ><span class="oi oi-trash"></span> Eliminar UF </button> 
  </form> 


<script type="text/javascript">
document.querySelector('#from1').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Eliminar unidad de formación",
          text: "¿Seguro deseas eliminar esta unidad de formación? Perderás toda la información que se encuentra almacenada y vinculada a esta unidad de formación.",
          buttons: [
            'NO',
            'SI'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Eliminando..!',
              text: 'La UF se eliminara a continuación',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Cancelado", "tu UF esta a salvo", "error");
          }
        });
    });
</script>

                                  </div>
                                </div>

                                     <div class="row">
                                    <div class="col-md-12" style="text-align: center;vertical-align: middle; width: 100%;">
                                      <br>
                                    <center>
                                      <ul class="nav nav-tabs">
                                         <li class="nav-item">
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                                                           
                                      </li>

                                      <li class="nav-item"  onclick="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $data['CodUF']; ?>','contenidos')">
                                     <a 
                                          <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 1){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?>
                                     class="nav-link" id="informacion-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="informacion" aria-selected="true" >
                                      <span class="oi oi-monitor" ></span> Información general</a>
                                      </li>

                                      <li  class="nav-item" onclick="ejecuta_ajax('secuencias_didactica.php','coduf=<?php echo $data['CodUF']; ?>&ns=<?php echo $data['NSDidacticas']; ?>','contenidos')" >
                                     <a <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 2){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?> class="nav-link"  id="secuencia-tab" data-toggle="tab" style="cursor: pointer;"  role="tab" aria-controls="secuencia" aria-selected="false" ><span class="oi oi-book" ></span> Secuencia didáctica</a>
                                      </li>

                                      <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#archivos" role="tab" aria-controls="contact" aria-selected="false" ><span class="oi oi-layers" ></span> Recursos didácticos</a>
                                      </li>

                                      <li class="nav-item" onclick="ejecuta_ajax('estudiantes.php','coduf=<?php echo $data['CodUF']; ?>','contenidos')">
                                     <a <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 4){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?> class="nav-link" class="nav-link" id="estudiantes-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="estudiantes" aria-selected="false" ><span class="oi oi-people"  ></span> Estudiantes</a>
                                      </li>

                                     
                                      </ul>                                   
                                    </center>

                                    </div>
                                    </div>
                                    <div class="row">
                                      <div id="contenidos">
                                      
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
             <!-- Page Content -->
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
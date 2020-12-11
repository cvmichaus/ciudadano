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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="../bootstrap.min.css">

  <link rel="stylesheet" href="EstiloSis.css">
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://kit.fontawesome.com/d6e77194d9.js" crossorigin="anonymous"></script>


  </head>
  
  <body <?php
 if(isset($_GET["reenvio"])) {
      if($_GET["reenvio"] == 2){
         ?>
        onload="ejecuta_ajax('secuencias_didactica.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
      }else if($_GET["reenvio"] == 3){
         ?>
        onload="ejecuta_ajax('recursos_didacticos.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
      }else if($_GET["reenvio"] == 4){
         ?>
        onload="ejecuta_ajax('estudiantes.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
  }else{
      ?>
        onload="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
  }
}else{
  ?>
        onload="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $ID_UF; ?>&ns=<?php echo $NS_UF; ?>','contenidos')"
      <?php
}
?>  class="row m-0 bg-white justify-content-center align-items-center vh-100">
    
    <div class="container">
    
    <?php require("menu.php"); ?>
   </div>

 <div class="container-fluid" style="position: relative;width: 100%;height: auto;min-height: 450px;overflow: hidden;text-align: justify;">
<div class="row">
           <div class="col-sm-1"></div> 
           <div class="col-sm-10">           

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
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                      
                                  </div>
                                </div>

                                <?php
  $ConsultaPrincipal = "SELECT * FROM  euf WHERE `CodUF` =  ".$ID_UF." ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
  while($data = mysqli_fetch_assoc($ResQry)){ 
      ?>

        <div class="row" style="margin-right: 35px;">
                                    <div class="col-md-12">
                                    <label style=" height: 24px; width: 872px;color: #A31D24; font-family: Roboto; font-size: 20px;letter-spacing: 0; line-height: 24px;"><?php echo $data['Titulo']; ?> </label>
                                    </div>
                                    </div>

        <div class="row">
                                  <div class="col-md-4">
                                          <a href="#" class="btn btn-secondary btn-sm" >
                                           <i class="fas fa-download fa-sm"></i> Descargar </a>
                                            <a href="#" class="btn btn-secondary btn-sm" >
                                             <i class="fas fa-print fa-sm"></i> Imprimir </a>
                                              <a href="#" class="btn btn-secondary btn-sm" > 
                                                <i class="fas fa-share-alt fa-sm"></i> Compartir </a>                                        
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
  <button  class="btn btn-light" id="btnEliminar" style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;cursor: pointer;" > <i class="fas fa-trash fa-sm"></i> Eliminar UF </button> 
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
                                      <i class="fas fa-file fa-sm"></i> Información general</a>
                                      </li>

                                      <li  class="nav-item" onclick="ejecuta_ajax('secuencias_didactica.php','coduf=<?php echo $data['CodUF']; ?>&ns=<?php echo $data['NSDidacticas']; ?>&codusu=<?php echo $iduser; ?>','contenidos')" >
                                     <a <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 2){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?> class="nav-link"  id="secuencia-tab" data-toggle="tab" style="cursor: pointer;"  role="tab" aria-controls="secuencia" aria-selected="false" >
                                          <i class="fas fa-book-open fa-sm"></i> Secuencia didáctica</a>
                                      </li>

                                      <li class="nav-item" onclick="ejecuta_ajax('recursos_didacticos.php','coduf=<?php echo  $ID_UF; ?>&ns=<?php echo $data['NSDidacticas']; ?>&codusu=<?php echo $iduser; ?>','contenidos')">
                                     <a <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 4){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?> class="nav-link" class="nav-link" id="estudiantes-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="estudiantes" aria-selected="false" ><i class="fas fa-copy fa-sm"></i>  Recursos didácticos</a>
                                      </li>
<!--
onclick="ejecuta_ajax('estudiantes.php','coduf=<?php //echo $data['CodUF']; ?>','contenidos')"

-->
                                      <li class="nav-item" onclick="ejecuta_ajax('estudiantes.php','coduf=<?php echo $data['CodUF']; ?>&ns=<?php echo $data['NSDidacticas']; ?>','contenidos')">
                                     <a <?php
                                                if(isset($_GET["reenvio"])) {
                                                  if($_GET["reenvio"] == 4){ 
                                                          echo 'class="nav-link active"';
                                                  }else{
                                                           echo 'class="nav-link"';
                                                  }

                                                }
                                          ?> class="nav-link" class="nav-link" id="estudiantes-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="estudiantes" aria-selected="false" ><i class="fas fa-users fa-sm"></i> Estudiantes</a>
                                      </li>

                                     
                                      </ul>                                   
                                    </center>

                                    </div>
                                    </div>
                                    <div class="row">
                                      <div id="contenidos" class="container">
                                      
                                     </div>
                                    </div>                            

  <?php 
}
}
  ?>
              
                          
                    
              

           </div> 
           <div class="col-sm-1"></div>     
     </div>
 </div>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-12"> 
    <?php include("pie.php"); ?>
    </div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


   <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 

<script>
  function ejecuta_ajax(archivo, parametros, capa){
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById(capa).innerHTML=xmlhttp.responseText;
        }
        }

        x = Math.random()*99999999;
        xmlhttp.open("GET",archivo+"?"+parametros+"&x="+x, true);
        xmlhttp.send();
        }



        (function ($) {
    $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    
    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }
});

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

</body>

</html>
 <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
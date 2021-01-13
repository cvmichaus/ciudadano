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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


   <link rel="stylesheet" href="../bootstrap.min.css">
     
   <script src="https://kit.fontawesome.com/d6e77194d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="EstiloSis.css">



  </head>
  <style>
body 


form.example input[type=text] {
  padding: 0px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  border-radius: 6px;
}

form.example button {
  float: left;
  width: 20%;
  padding: 0px;
  background: #A31D24;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
   border-radius: 6px;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 <body class="row m-0 bg-white justify-content-center align-items-center vh-100">
    
    <div class="container">
  <?php require("menu.php"); ?>
   </div>

 <div class="container-fluid" style="position: relative;width: 100%;height: auto;min-height: 450px;overflow: hidden;text-align: justify;">
<div class="row">
           <div class="col-sm-1"></div> 
           <div class="col-sm-10">
            <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 10px;">

                 </div>
            </div>

            <div class="row" style="padding-bottom:10px;padding-top: 20px;">
                                  <div class="col-md-3">
                                
                                         <a href="admin.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                        
                                    
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                      
                                  </div>
                                </div>

            <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 40px;">
                  <label style=" height: 24px;
  width: 137px;
  color: #A31D24;
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 24px;">Administración</label>
                 </div>
            </div>

            <div class="row" style="text-align: center;align-items: center;vertical-align: middle;">
              <div class="col-12" style="padding-top: 10px;padding-left: 200px;padding-bottom: 10px;text-align: center;vertical-align: middle;">
                    <form class="example" action="/action_page.php">
                    <input type="text" name="search" style="box-sizing: border-box;
                    height: 20px;
                    width: 577px;
                    border: 1px solid #B3B3B3;
                    border-radius: 5px;">
                    <button type="submit" style="height: 20px;
                    width: 90px;color: #A31D24;
                    font-family: Roboto;
                    font-size: 8px;
                    font-weight: bold;
                    letter-spacing: 0;
                    line-height: 9px;
                    background-color: #FFFFFF;
                    text-align: center;"><i class="fa fa-search"> Buscar</i></button>
                    </form>
                 </div>
            </div>

<div style="height: 88px; width: 100%;border-radius: 10px; background-color: #FFFFFF; box-shadow: 0 2px 4px 0 #D4D4D4;">
            <div class="row">
                 <div class="col-sm-12" style="padding-top: 10px;padding-left: 100px;">
                  <label style=" height: 17px;  width: 58px; color: #A31D24;font-family: Lato;font-size: 14px; font-weight: bold;letter-spacing: 0;line-height: 17px;">Resumen</label>
                 </div>
            </div>

               <div class="row" style="text-align: center;vertical-align: middle;">

                    <div class="col-sm-3">
                       <span style="height: 25px; width: 13px; color: #000000; font-family: Lato;font-size: 21px; font-weight: bold;  letter-spacing: 0; line-height: 25px;">
                        <?php
                $D1 = $mysqli->query("SELECT * FROM  usuarios as u  WHERE u.Perfil = 1 and u.estatus = 1 ");
                      $row_cnt = $D1->num_rows;
                        echo $row_cnt;
                        ?>
                      
                     </span><br>
                       <label style=" height: 15px;  width: 52px; color: #1F1D21;  font-family: Lato2;  font-size: 12px; font-weight: bold; letter-spacing: 0; line-height: 15px;">Docentes</label>
                    </div>

                     <div class="col-sm-3" >
                        <span style="height: 25px; width: 13px; color: #000000; font-family: Lato;font-size: 21px; font-weight: bold;  letter-spacing: 0; line-height: 25px;">
                           <?php
                $D2 = $mysqli->query("SELECT * FROM  secundarias ");
                      $row_cnt2 = $D2->num_rows;
                        echo $row_cnt2;
                        ?>
                        </span><br>
                       <label style=" height: 15px;  width: 52px; color: #1F1D21;  font-family: Lato2;  font-size: 12px; font-weight: bold; letter-spacing: 0; line-height: 15px;">Secundarias</label>
                     </div>

                      <div class="col-sm-3" >
                        <span style="height: 25px; width: 13px; color: #000000; font-family: Lato;font-size: 21px; font-weight: bold;  letter-spacing: 0; line-height: 25px;">
                          <?php
                $D4 = $mysqli->query("SELECT * FROM  estudiantes ");
                      $row_cnt4 = $D4->num_rows;
                        echo $row_cnt4;
                        ?>
                        </span><br>
                       <label style=" height: 15px;  width: 52px; color: #1F1D21;  font-family: Lato2;  font-size: 12px; font-weight: bold; letter-spacing: 0; line-height: 15px;">Estudiantes</label>
                     </div>

                      <div class="col-sm-3" >
                        <span style="height: 25px; width: 13px; color: #000000; font-family: Lato;font-size: 21px; font-weight: bold;  letter-spacing: 0; line-height: 25px;">
                            <?php
                $D3 = $mysqli->query("SELECT * FROM  euf ");
                      $row_cnt3 = $D3->num_rows;
                        echo $row_cnt3;
                        ?>
                        </span><br>
                       <label style=" height: 15px;  width: 202px; color: #1F1D21;  font-family: Lato2;  font-size: 12px; font-weight: bold; letter-spacing: 0; line-height: 15px;">Unidades de formación</label>
                     </div>
               </div>
       </div>
          
          <div class="row" style="padding-top: 20px;">
                 <div class="col-sm-3">
                  <span style="height: 24px; width: 79px;color: #000000; font-family: Roboto; font-size: 20px;
  letter-spacing: 0;  line-height: 24px;">Usuarios</span>
                 </div>
                  <div class="col-sm-3">

                 </div>
                  <div class="col-sm-3">

                 </div>
                  <div class="col-sm-3">

                 </div>
            </div>

               <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 20px; padding-top: 10px;">
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align: center;vertical-align: middle;  color: #000000;  font-family: Roboto; font-size: 12px; font-weight: bold;  letter-spacing: 0;  line-height: 14px;">
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo electrónico</th>
                <th>Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
          <?php
    $ConsultaPrincipal = "SELECT u.CodUsuario,u.correo,u.Perfil,d.Nombres,d.Apellidos FROM  usuarios as u 
    INNER JOIN detalle_usuario as d ON u.CodUsuario = d.CodUsuario
    WHERE u.Perfil = 1  ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
  while($data = mysqli_fetch_assoc($ResQry)){ 
          ?>
            <tr style="text-align: center;vertical-align: middle;  font-family: Lato2;  font-size: 10px;  letter-spacing: 0;  line-height: 12px;">
                <td><?php echo $data["CodUsuario"];?></td>
                <td><?php echo $data["Nombres"];?> <?php echo $data["Apellidos"]?></td>
                <td><?php echo $data["correo"];?></td>
                <td>Docente</td>
                <td>
                <a style="color:#a31d24;cursor: pointer;" href="EditarUsu.php?codUsu=<?php echo $data["CodUsuario"]; ?>"><i  class="fas fa-edit fa-lg"></i></a>
                </td>
                <td> 

                  <form method="post" action="EliminarDocente.php" id="from1">
  <input type="hidden" id="codUsu" name="codUsu" value="<?php echo $data["CodUsuario"]; ?>">
  <button   id="btnEliminar" style="color:#a31d24;cursor: pointer;background-color: transparent;
       border: 0px solid;" ><i class="fas fa-trash fa-lg"></i> </button> 
  </form> 

  <script type="text/javascript">
document.querySelector('#from1').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Eliminar docente",
          text: "¿Estas seguro eliminar este perfil de docente?",
          buttons: [
            'NO',
            'SI'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Eliminando..!',
              text: 'Se eliminara a continuación',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Cancelado", "tu docente esta a salvo", "error");
          }
        });
    });
</script>


               
                </td>
                <td> 
                <a style="color:#a31d24;cursor: pointer;" href="VerUsu.php?codUsu=<?php echo $data["CodUsuario"]; ?>"><i class="fas fa-eye fa-lg"></i></a>
                </td>
            </tr>
             <?php
          }
        }
          ?>
        </tbody>
    </table>



                 </div>
            </div>

            <div class="row" style="padding-bottom: 20px;padding-top: 10px;">
              <div class="col-3">
              </div>
              <div class="col-3">
              </div>
              <div class="col-3">
              </div>
                <div class="col-3">
                   <a class="btn btn-sm btn-primary btn-block" href="FormDocentes.php" style="background-color:#a31d24;color:#fff;font-size: 15px;height: 40px; width: 178px;" > <i class="fas fa-plus fa-lg"></i> Agregar usuario
 </a>

                </div>
            </div>
                    
                


      
                    
              

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

<script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
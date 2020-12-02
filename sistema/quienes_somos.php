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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   <link rel="stylesheet" href="../bootstrap.min.css">
     <script src="../bootstrap.bundle.min.js"></script>
   <script src="https://kit.fontawesome.com/d6e77194d9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="EstiloSis.css">

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>

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

                           <div class="row" style="right: 140px;position: relative;">
                            <div class="col-6" style="text-align: center;vertical-align: middle;height: 103px; width: 423px;border-radius: 0 5px 5px 0;  background-color: #A31D24;color: #FFFFFF;font-family: Roboto;  font-size: 36px; font-weight: bold;  letter-spacing: 0; line-height: 50px;">
                             <div style="padding-top: 25px;"> | CCIUDADANO
                                      </div>
                             </div>         
                           </div>


                             <div class="row">
                            <div class="col-12">
                             <div style="height: 76px;  width: 100%; color: #2B2B2B; font-family: Roboto;
  font-size: 16px;  letter-spacing: 0;  line-height: 19px; text-align: justify;padding-top: 25px;"><strong style="font-weight: bold;">CCIUDADANO</strong> es un programa especial del <strong style="font-weight: bold;">Centro de Investigaciones y Estudios en Antropología Social CIESAS</strong> fundado en 2007, cuyo objetivo es el <strong style="font-weight: bold;color:#A31D24;">fortalecimiento del trabajo de organizaciones y grupos ciudadanos</strong> interesados en involucrarse de manera organizada, informada, y responsable en procesos de toma de decisiones públicas en el ámbito local y comunitario. A esto lo llamamos Control Ciudadano de lo Público.
                                      </div>
                             </div>         
                           </div>   

                           <div class="row" style="padding-top: 50px;padding-bottom: 20px;">
                            <div class="col-12">
                              <span style="  height: 19px; width: 229px; color: #2B2B2B; font-family: Roboto;  font-size: 16px; letter-spacing: 0; line-height: 19px;">Está conformado por tres áreas:</span>
                            </div>
                           </div> 

                           <div class="row">
                            <div class="col-4">
                                    <div class="row">
                                     <div class="col-4">
                                     <div style="box-sizing: border-box; height: 56px; width: 56px; border: 1px solid #A31D24; background-color: #FFFFFF; color: #333333; font-family: Roboto;border-radius: 40px; border-style: dotted; text-align: center;vertical-align: middle;  font-size: 36px; font-weight: bold; letter-spacing: 0;  line-height: 42px;"> 1 </div>
                                     </div>
                                     <div class="col-8">
                                      <span class="col" style="height: 42px; width: 192px; color: #2B2B2B; font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;  text-align: center;">
                                   Incubadora de Iniciativas<br>
                                    Ciudadanas de Incidencia
                                </span>
                                     </div>                   
                                    </div>
                            </div>
                            <div class="col-4">
                             <div class="row">
                                     <div class="col-4">
                                     <div style="box-sizing: border-box; height: 56px; width: 56px; border: 1px solid #A31D24; background-color: #FFFFFF; color: #333333; font-family: Roboto;border-radius: 40px; border-style: dotted; text-align: center;vertical-align: middle;  font-size: 36px; font-weight: bold; letter-spacing: 0;  line-height: 42px;"> 2 </div>
                                     </div>
                                     <div class="col-8">
                                      <span class="col" style="height: 42px; width: 192px; color: #2B2B2B; font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;  text-align: center;">
                                   Investigación Aplicada y<br>
                                    Gestión del Conocimiento
                                </span>
                                     </div>                   
                                    </div>
                            </div>
                            <div class="col-4">
                               <div class="row">
                                     <div class="col-4">
                                     <div style="box-sizing: border-box; height: 56px; width: 56px; border: 1px solid #A31D24; background-color: #FFFFFF; color: #333333; font-family: Roboto;border-radius: 40px; border-style: dotted; text-align: center;vertical-align: middle;  font-size: 36px; font-weight: bold; letter-spacing: 0;  line-height: 42px;"> 3 </div>
                                     </div>
                                     <div class="col-8">
                                      <span class="col" style="height: 42px; width: 192px; color: #2B2B2B; font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;  text-align: center;">
                                   Formación y Docencia
                                </span>
                                     </div>                   
                                    </div>
                            </div>

                           </div> 

                           <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                            <div class="col-4">
                              <span style="height: 140px; width: 100%; color: #1F1D21; font-family: Roboto;
  font-size: 36px; font-weight: bold; letter-spacing: 0; line-height: 50px;">
                                Sobre la Formación de Competencias Cívico Ciudadanas
                              </span>
                            </div>
                             <div class="col-8">
                              <span style="height: 105px; width: 535px; color: #2B2B2B; font-family: Roboto;
  font-size: 18px; letter-spacing: 0; line-height: 21px;">
                                El desarrollo de esta página es resultado de tener el interés por desarrollar <strong  style="font-weight: bold;color:#A31D24;">competencias cívico ciudadanas</strong> en distintos públicos, desde hace más de <strong  style="font-weight: bold;color:#00000;">5 años</strong>, hemos trabajado en el desarrollo de un <strong  style="font-weight: bold;color:#A31D24;">modelo de aprendizaje cívico democrático</strong> que hemos probado con profesores y estudiantes universitarios.


                              </span>
                            </div>
                           </div>   

                           <div class="row" style="padding-top: 20px;padding-bottom: 20px;align-items: center;" >
                           
                            <div class="col-12" style=" height: 317px; width: 800px; border-radius: 5px;
background-color: #FFFFFF; box-shadow: 0 2px 15px 0 #C7C7C7;">
                                <span style=" height: 240px; width: 831px; color: #2B2B2B;  font-family: Roboto; font-size: 14px; letter-spacing: 1px;  line-height: 16px;text-align: justify;">
                                 <p> <br><br>
                                  Las experiencias obtenidas de estas prácticas universitarias nos han permitido reconocer la necesidad de hablarles a públicos cada vez más jóvenes con la intención de promover ejercicios de incidencia ciudadana que les permitan reconocerse como agentes de cambio dentro sus comunidades. En el marco del Proyecto Construyendo la Adolescencia Ciudadana hemos dado ese paso para acercarnos a ellos, pero, para hablarle a las y los jóvenes hay que conocer su lenguaje, sus intereses y preocupaciones; y los mejores aliados para conocerlos e incentivarlos a interesarse por lo que pasa en su entorno son sus profesores.
                                </p>
<p>
Es por ello, que hemos diseñado una herramienta que le permita a las y los docentes instrumentalizar su planeación a través de diseño de secuencias didácticas que contribuyan a desarrollar competencias cívicas en población adolescente que cursa sus estudios de secundaria con la finalidad de contribuir a nutrir la argumentación de la ciudadanía para elaborar proyectos de incidencia, sustentados en el desarrollo de diagnósticos. 
</p>
<p>
Además, esperamos que el desarrollo de diagnósticos para la elaboración de proyectos de incidencia ciudadana también se convierta en una herramienta útil para vecinos organizados, colectivos, asociaciones u otros actores interesados en dar solución a las problemáticas que aquejan a sus comunidades. 
                                 </p>
                                </span>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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
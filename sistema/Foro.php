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
                 <div class="col-sm-12" style="padding-bottom: 40px;">

                 </div>
            </div>
               <div class="row">
                    <div class="col-sm-6">
                       <form class="example" action="/action_page.php">
  <input type="text" name="search" style="box-sizing: border-box;
  height: 21px;
  width: 325px;
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
 <?php
if($tipo_usuario == 0  OR $tipo_usuario == 1 ) {
  ?>
                     <div class="col-sm-6" style="text-align: right; height: 30px; width: 253px;color: #808080; font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;"  >
                        <a href="FormArticulo.php" class="btn btn-danger btn-sm" style="background-color: #a31d24;color: #FFF; font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;">Crear un articulo nuevo</a>

                      

                     </div>
                    <?php
                  }
                    ?>
               </div>
               
               <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 40px;">

                 </div>
            </div>

             <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 40px;">
                    <label style="color: #2B2B2B;
  font-family: Roboto;
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 0;
  line-height: 28px;
  text-align: center;">FORO</label>
                 </div>
            </div>
              <div class="row">
                 <div class="col-sm-12" style="padding-bottom: 40px;height: 76px; width: 998px;">
                    <label style="color: #2B2B2B; font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px; text-align: justify;"><strong style="font-weight: bold;">CCIUDADANO</strong> abre este espacio para la discusión, el compañerismo y el apoyo mutuo
                 </div>
            </div>
<div class="row">
	
            <?php
echo ' ';

       ?>
<div class="col-12" style="align-items: center;padding-left: 200px;">
	
 
<?php 
   $QueryE = "SELECT * FROM  articulos as a  LEFT JOIN detalle_usuario as u ON a.CodUsu = u.CodUsuario ";
      if($ResE = $mysqli->query($QueryE)) {
      
       while($datoA = mysqli_fetch_assoc($ResE)){ 
      

  ?>  
  <div style="height: auto; width: 746px; align-items: center;">

 	<div class="container" style="height: 286px; width: 746px; border-radius: 10px; background-color: #FFFFFF;  box-shadow: 0 2px 4px 0 #D4D4D4;align-items: center;">
 	<div class="row">
 		<div class="col-12">
 	<label style="color: #2B2B2B; font-family: Roboto; font-size: 16px; font-weight: bold;  letter-spacing: 0; line-height: 19px;padding-top: 20px;"><?php echo $datoA["Titulo"]; ?></label><br>
 	</div>
 </div>
 <div class="row" style="padding-top: 20px;">
 	<div class="col-8" >
 	<img src="fotos/<?php if (empty($datoA["avatar"])){ echo "avatar.png"; }else{ echo $datoA["avatar"]; }?>" class="rounded-circle" width="25px;" >	<label style="color: #666666; font-family: Roboto;  font-size: 12px; letter-spacing: 0; line-height: 14px;"> <?php echo $datoA["Nombres"]; ?> <?php echo $datoA["Apellidos"]; ?> </label> <i class="fa fa-clock-o" aria-hidden="true"></i> <label style="color: #666666;font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;"> <?php echo $datoA["FechaAlta"]; ?> <?php echo $datoA["HoraAlta"]; ?></label><br>
 	</div>	
 	<div class="col-4" style="text-align: left;">
 		<i class="fa fa-envelope-o" aria-hidden="true"></i> <i class="fa fa-whatsapp" aria-hidden="true"></i><i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i>
 	</div>
 </div>

 <div class="row">
 <div class="col-12">
 	<label style="color: #2B2B2B;font-family: Roboto;font-size: 14px;letter-spacing: 0;line-height: 16px;padding-top: 20px;">
 		<?php echo substr(nl2br($datoA["DetalleArt"]),0,250); ?>...
  </label>
 </div>	
 </div>

  <div class="row">
 <div class="col-4">
 	<label style="color: #A31D24;font-family: Roboto;font-size: 12px; letter-spacing: 0; line-height: 14px;padding-top: 20px;">
 		<i class="fa fa-comments-o" aria-hidden="true"></i> 
    <?php
                $D1 = $mysqli->query("SELECT * FROM  comentarios as u  WHERE u.CodArticulo ='".$datoA["CodArticulo"]."'  ");
                      $row_cnt = $D1->num_rows;
                        echo $row_cnt;
                        ?>
                         comentarios
  </label>
 </div>	
  <div class="col-4">
 	<label style="color: #2B2B2B;font-family: Roboto;font-size: 14px;letter-spacing: 0;line-height: 16px;padding-top: 20px;">
  </label>
 </div>	
  <div class="col-4" style="text-align: right;">
 	<label style="  color: #808080; font-family: Lato; font-size: 14px; letter-spacing: 0;  line-height: 17px; text-align: center;padding-top: 20px;">
 		<a href="DetalleArticulo.php?codart=<?php echo $datoA["CodArticulo"]; ?>&iduser=<?php echo $iduser;?>" class="btn btn-danger btn-sm" style="height: 30px; width: 83px;
  color: #ffffff; font-family: Lato; font-size: 14px; letter-spacing: 0;  line-height: 17px;  text-align: center;"> Ver </a>
  </label>
 </div>	
 </div>
  </div>
  <br><br>
 <?php 
  }
}
  ?>  
 </div>
  
 </div>  

   
                    

           </div> 

           <div class="col-sm-1"></div>     
     </div>
 </div>

<div class="container-fluid">
<div class="row">
  <br> <br> <br>
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
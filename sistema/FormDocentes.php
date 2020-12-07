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


<script type="text/javascript" language="javascript" src="datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.print.min.js"></script>

<link rel="stylesheet" type="text/css" href="datatables/query.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/buttons.dataTables.min.css">


<script type="text/javascript" language="javascript" class="init">
 $(document).ready(function() {
        var selected = [];
        $('#example2').DataTable( {
         "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
            stateSave: true,
            "order": [[ 1, "desc" ]],
        } );

        $('#example2 tbody').on('click', 'tr', function () {
            var id = this.id;
            var index = $.inArray(id, selected);

            if ( index === -1 ) {
                selected.push( id );
            } else {
                selected.splice( index, 1 );
            }

            $(this).toggleClass('selected');
        } );

    } )


</script>


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
 <body class="row m-0 bg-white justify-content-center align-items-center vh-100" onload="generar_contrasenya();">

    
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
                                
                                         <a href="administracion.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                        
                                    
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
  line-height: 24px;">Docentes</label>
                 </div>
            </div>

            

            <div class="row">
                 <div class="col-sm-3" style="box-sizing: border-box; height: 437px;width: 300px; border: 1px solid #D4D4D4; border-radius: 10px; background-color: #FFFFFF;">
                  <label style="color: #666666; font-family: Lato; font-size: 12px; letter-spacing: 0;  line-height: 15px;padding-top: 20px;">DATOS USUARIO</label>

                  <form method="post" action="AddDocente.php" enctype="multipart/form-data">

                              <center>
                                    <div class="image-upload">
    <label for="file-input">
        <img src="fotos/avatar.png" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" style="cursor: pointer;height: 50px; width: 50px;" class="rounded-circle" width="20%"> 
    </label>
        <input id="file-input" name="foto" type="file" accept="image/x-png,image/jpeg,image/png"/>
</div>
<style>
.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 30px;
    cursor: pointer;
}
  </style>    
                
                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                <input type="text" style=" height: 30px;width: 200px;" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
                </div>

                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                <input type="text" style=" height: 30px;width: 200px;" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
                </div>
                </div>


                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                <input type="email" style=" height: 30px;width: 200px;" class="form-control" id="correo" name="correo" placeholder="Email">
                </div>
                </div>

                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Cedula</label>
                <div class="col-sm-10">
                <input type="text" style=" height: 30px;width: 200px;" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
                </div>
                </div>

                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Clave</label>
                <div class="col-sm-10">
                <div class="input-group" id="show_hide_password">
                <input class="form-control" type="password" id="password" name="password" placeholder="Ingresar tu contraseña" style=" height: 30px;width: 100px;">
                <div class="input-group-addon">
                <a href=""><i class="fa fa-eye-slash" style=" color: #A31D24;" aria-hidden="true"></i></a>
                </div>
                </div>
                </div>
                </div>

          <style>
            .fa {
  position:absolute;
  padding: 11px;
  right: 1px;
}
          </style>

                 </div>

                 <div class="col-1">
                 </div>

                 <div class="col-sm-8" style="box-sizing: border-box; height: 337px;width: 663px; border: 1px solid #D4D4D4; border-radius: 10px;background-color: #FFFFFF;">

                  <label style="color: #666666; font-family: Lato; font-size: 12px; letter-spacing: 0;  line-height: 15px;padding-top: 20px;">DATOS SECUNDARIA</label>

                  
                <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left;" >Tipo de secundaria:</label>
          <select name="tipo_escuela" id="tipo_escuela"  class="form-control" style=" height: 30px;width: 454px;" placeholder="Tipo de Secundaria">
        <option value="">Seleccione</option>
        <option value="Secundaria General">Secundaria General </option>
        <option value="Tele-secundaria">Tele-secundaria</option>
         <option value="Secundaria Técnica">Secundaria Técnica</option>
          <option value="Secundaria Federal">Secundaria Federal</option>
          <option value="Secundaria Mixta">Secundaria Mixta</option>
      </select>
          </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left;">Nombre de la secundaria</label>
                <div class="col-sm-10">
                <input type="text" style=" height: 30px;width: 452px;" class="form-control" name="nombre_secundaria" id="nombre_secundaria" placeholder="Nombre de la secundaria">
                </div>
                </div>

                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label" style="text-align: left;">Clave de la secundaria</label>
                <div class="col-sm-10">
                <input type="text" style=" height: 30px;width: 452px;" class="form-control" name="clave_secundaria" id="clave_secundaria"  placeholder="Clave de la secundaria">
                </div>
                </div>

                  

                 <div class="col-md-12">  
    <center><input name="enviar" class="btn btn-lg btn-primary btn-block btn-xs" type="submit" style=" height: 40px;width: 160px;color: #808080;  font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;border: 1px solid #D4D4D4;
    border-radius: 10px; background-color: #FFFFFF; font-weight: bolder;text-align: center;" value="Guardar"></center><br>

    </div>

                  </form>
                   
                 </div>
            </div>

               
          
       

         

            <div class="row" style="padding-bottom: 20px;padding-top: 10px;">
              <div class="col-3">
              </div>
              <div class="col-3">
              </div>
              <div class="col-3">
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

<script type="text/javascript">
 
      var tamanyo_password        = 9;      // definimos el tamaño que tendrá nuestro password
 
      var caracteres_conseguidos      = 0;      // contador de los caracteres que hemos conseguido
      var caracter_temporal       = '';
      
      var array_caracteres        = new Array();// array para guardar los caracteres de forma temporal
        
        for(var i = 0; i < tamanyo_password; i++){    // inicializamos el array con el valor null
          array_caracteres[i] = null;
        }
 
      var password_definitivo       = '';
 
      var numero_minimo_letras_minusculas = 1;      // en ésta y las siguientes variables definimos cuántos 
      var numero_minimo_letras_mayusculas = 1;      // caracteres de cada tipo queremos en cada 
      var numero_minimo_numeros     = 1;
      var numero_minimo_simbolos      = 1;
 
      var letras_minusculas_conseguidas   = 0;
      var letras_mayusculas_conseguidas = 0;
      var numeros_conseguidos       = 0;
      var simbolos_conseguidos      = 0;
 
 
      // función que genera un número aleatorio entre los límites superior e inferior pasados por parámetro
      function genera_aleatorio(i_numero_inferior, i_numero_superior) {
          var     i_aleatorio  =   Math.floor((Math.random() * (i_numero_superior - i_numero_inferior + 1)) + i_numero_inferior);
          return  i_aleatorio;
      }
 
 
      // función que genera un tipo de caracter en base al tipo que se le pasa por parámetro (mayúscula, minúscula, número, símbolo o aleatorio)
      function genera_caracter(tipo_de_caracter){
        // hemos creado una lista de caracteres específica, que además no tiene algunos caracteres como la "i" mayúscula ni la "l" minúscula para evitar errores de transcripción
        var lista_de_caracteres = '$+=?@_23456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz';
        var caracter_generado = '';
        var valor_inferior    = 0;
        var valor_superior    = 0;
 
        switch (tipo_de_caracter){
          case 'minúscula':
            valor_inferior  = 38;
            valor_superior  = 61;
            break;
          case 'mayúscula':
            valor_inferior  = 14;
            valor_superior  = 37;
            break;
          case 'número':
            valor_inferior  = 6;
            valor_superior  = 13;
            break;
          case 'símbolo': 
            valor_inferior  = 0;
            valor_superior  = 5;
            break;
          case 'aleatorio':
            valor_inferior  = 0;
            valor_superior  = 61;
 
        } // fin del switch
 
        caracter_generado = lista_de_caracteres.charAt(genera_aleatorio(valor_inferior, valor_superior));
        return caracter_generado;
      } // fin de la función genera_caracter()
 
 
      // función que guarda en una posición vacía aleatoria el caracter pasado por parámetro
      function guarda_caracter_en_posicion_aleatoria(caracter_pasado_por_parametro){
        var guardado_en_posicion_vacia  = false;
        var posicion_en_array     = 0;
 
        while(guardado_en_posicion_vacia  !=  true){
          posicion_en_array = genera_aleatorio(0, tamanyo_password-1);  // generamos un aleatorio en el rango del tamaño del password
 
          // el array ha sido inicializado con null en sus posiciones. Si es una posición vacía, guardamos el caracter
          if(array_caracteres[posicion_en_array] == null){
            array_caracteres[posicion_en_array] = caracter_pasado_por_parametro;
            guardado_en_posicion_vacia      = true;
          }
        }
      }
 
 
      // función que se inicia una vez que la página se ha cargado
      function generar_contrasenya(){
 
        // generamos los distintos tipos de caracteres y los metemos en un password_temporal
        while (letras_minusculas_conseguidas < numero_minimo_letras_minusculas){
          caracter_temporal = genera_caracter('minúscula');
          guarda_caracter_en_posicion_aleatoria(caracter_temporal);
          letras_minusculas_conseguidas++;
          caracteres_conseguidos++;
        }
 
        while (letras_mayusculas_conseguidas < numero_minimo_letras_mayusculas){
          caracter_temporal = genera_caracter('mayúscula');
          guarda_caracter_en_posicion_aleatoria(caracter_temporal);
          letras_mayusculas_conseguidas++;
          caracteres_conseguidos++;
        }
 
        while (numeros_conseguidos < numero_minimo_numeros){
          caracter_temporal = genera_caracter('número');
          guarda_caracter_en_posicion_aleatoria(caracter_temporal);
          numeros_conseguidos++;
          caracteres_conseguidos++;
        }
 
        while (simbolos_conseguidos < numero_minimo_simbolos){
          caracter_temporal = genera_caracter('símbolo');
          guarda_caracter_en_posicion_aleatoria(caracter_temporal);
          simbolos_conseguidos++;
          caracteres_conseguidos++;
        }
 
        // si no hemos generado todos los caracteres que necesitamos, de forma aleatoria añadimos los que nos falten
        // hasta llegar al tamaño de password que nos interesa
        while (caracteres_conseguidos < tamanyo_password){
          caracter_temporal = genera_caracter('aleatorio');
          guarda_caracter_en_posicion_aleatoria(caracter_temporal);
          caracteres_conseguidos++;
        }
 
        // ahora pasamos el contenido del array a la variable password_definitivo
        for(var i=0; i < array_caracteres.length; i++){
          password_definitivo = password_definitivo + array_caracteres[i];
        }
 
        document.getElementById("password").value = password_definitivo;
      }
    </script>

         <script>
  
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
          </script>
</body>

</html>
 <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
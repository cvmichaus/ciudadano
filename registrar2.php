<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
   <div class="row align-items-center">
    <div class="col-1-sm ">
    </div>
   <div class="col-1">
    </div>
   <div class="col-1">
    </div>
   <div class="col-1">
    </div>

    <div class="col-5">
           <div class="row align-items-center">
             <div class="col-12" style="text-align: center;">
              <br>
          <img class="logo" src="img/CCIUDADANO_footerlogo.png" alt="" width="330px" height="51px" >
          <br> <br>
           </div>
           </div>

           <div class="row align-items-center" style="border: 1px solid #d6d6d6;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6;">
             

           <div class="col-12">
            <form class="form-signin" method="POST"  action="session_init.php">
             
              <div class="row" style="background-color: #fff;font-family: Roboto;font-size: 11px;"> 
                    <div class="col-md-6">    
                           <div class="form-group">
      <label for="nombre" style="color:#000;font-family: Roboto;">Nombre(s)</label><br>
      <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre Completo">
      </div>
    </div>


 <div class="col-md-6">    
                           <div class="form-group">
      <label for="apellidos" style="color:#000;font-family: Roboto;">Apellidos</label><br>
      <input type="text" name="apellidos" id="apellidos" class="form-control input-sm" placeholder="Apellidos">
      </div>
    </div>
</div>

<div class="row" style="background-color: #fff;"> 

                    <div class="col-md-12">    
      <div class="form-group">
      <label for="tipo_escuela" style="color:#000;font-family: Roboto;">Tipo de secundaria:</label><br>
      <select name="tipo_escuela" id="tipo_escuela" class="form-control input-sm" placeholder="Tipo de Secundaria">
        <option value="">Seleccione</option>
        <option value="Secundaria General">Secundaria General </option>
        <option value="Tele-secundaria">Tele-secundaria</option>
         <option value="Secundaria Técnica">Secundaria Técnica</option>
          <option value="Secundaria Federal">Secundaria Federal</option>
          <option value="Secundaria Mixta">Secundaria Mixta</option>
      </select>
      </div>
</div>
</div>

<div class="row" style="background-color: #fff;"> 
                    <div class="col-md-6">    
      <div class="form-group">
      <label for="nombre_secundaria" style="color:#000;font-family: Roboto;">Nombre de la secundaria</label><br>
      <input type="text" name="nombre_secundaria" id="nombre_secundaria" class="form-control input-sm" placeholder="Nombre de la escuela">
      </div>

        </div>

        <div class="col-md-6">    
      <div class="form-group">
      <label for="clave_secundaria" style="color:#000;font-family: Roboto;">Clave de la secundaria</label><br>
      <input type="text" name="clave_secundaria" id="clave_secundaria" class="form-control input-sm" placeholder="Clave de la secundaria">
      </div>

        </div>
     </div>


     <div class="row" style="background-color: #fff;"> 
                    <div class="col-md-12">    
      <div class="form-group">
      <label for="correo" style="color:#000;font-family: Roboto;">Correo</label><br>
      <input type="email" name="correo" id="correo" class="form-control input-sm" placeholder="Correo">
      </div>

        </div>
     </div>
  <div class="row" style="background-color: #fff;"> 
        <div class="col-md-6">    
        <div class="form-group">
        <label for="pass" style="color:#000;font-family: Roboto;">Crear contraseña</label><br>
        <input type="password" name="pass" id="pass" class="form-control input-sm" placeholder="Contraseña" >
        </div>

        </div>

        <div class="col-md-6">    
        <div class="form-group">
        <label for="pass2" style="color:#000;font-family: Roboto;">Confirmar contraseña</label><br>
        <input type="password" name="pass2" id="pass2" class="form-control input-sm" placeholder="Contraseña" onblur="validar_form();" data-toggle="tooltip" data-placement="right" title="La contraseña debe de tener entre 8 a 12 caracteres, una letra Mayúscula, un Numero y un carácter especial (!#$%&?!¡).">
        </div>

        </div>
     </div>

     <div class="row" style="background-color: #fff;">
      <div class="col-md-12">    
          <input name="enviar" class="btn btn-lg btn-primary btn-block btn-xs" type="submit" style="background-color:#a31d24;color:#fff;font-size: 12px; " value="Registrarme">

      </div>
     </div>
            </form>        
           </div>
           </div>

           <div class="row align-items-center" >
               <div class="col-12" style="text-align: right;">
                <a href="index.php" class="espera-si-tengo-un" >
        ¡Espera! Sí tengo una cuenta.</a>
               </div>
           </div>

            <div class="row align-items-center" >
               <div class="col-12" style="text-align: right;">
               <hr>
               </div>
           </div>




     </div>
    
   
     <div class="col-1">
    </div>
     <div class="col-1">
    </div>
     <div class="col-1">
    </div>
     <div class="col-1-sm">
    </div>

   </div>

 </div>
 <footer class="container-fluid text-center" style="background-color:#d6d6d6;width: 100%;">
 <div class="container">
 <div class="row align-items-center">
   <div class="col-4" style="text-align: left;">
     <img src="img/CCIUDADANO_footerlogo.png" width="80%" alt="">
    </div>
     <div class="col-4" style="text-align: left;color: #000000; font-family: Roboto; font-size: 14px;
  letter-spacing: 0; line-height: 16px;  text-align: left;">
      <br>
     <center><label class="contactanos"> Contactanos </label></center><br>
<span class="telefono">
    <img src="img/Phone.png" width="5%">
     Teléfono : 54 87 71 10<br>
    Calle Miguel Hidalgo s/n esquina<br>
    Mariano Matamoros, 14000<br>
     Ciudad de México
  </span>
    <br> <br> <br>
    </div>
     <div class="col-4">

       <label class="contactanos"> Siguenos en</label><br>
      <img src="img/Facebook.png" height="20px;" width="20px"> Facebook
      <br><br>
      <br>


    </div>
    
 </div>
 </div>
</footer>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
          function validar_form() {

            var p1 = document.getElementById("pass").value;
            var p2 = document.getElementById("pass2").value;

            var espacios = false;
            var cont = 0;

            while (!espacios && (cont < p1.length)) {
            if (p1.charAt(cont) == " ")
            espacios = true;
            cont++;
            }

            if (espacios) {
            alert ("La contraseña no puede contener espacios en blanco");
             document.getElementById("pass").value="";
                document.getElementById("pass2").value="";
            return false;
            }

            if (p1.length == 0 || p2.length == 0) {
            alert("Los campos del password no pueden quedar vacios");
             document.getElementById("pass").value="";
                document.getElementById("pass2").value="";
            return false;
            }

            if (p1 != p2) {
            alert("Las passwords deben de coincidir");

             document.getElementById("pass").value="";
                document.getElementById("pass2").value="";
            return false;
            } else {
            //alert("Todo esta correcto");

                var contrasenna = document.getElementById('pass').value;
                if(validar_clave(contrasenna) == true)
                {
                //alert('Cotraseña fuerte');
                }
                else
                {

              
                alert('La contraseña debe de tener entre 8 a 12 caracteres, una letra Mayúscula, un Numero y un carácter especial (!#$%&?!¡).');
                
   
                document.getElementById("pass").value="";
                document.getElementById("pass2").value="";
                }

            return true; 
            }


      
    }



      function validar_clave(contrasenna)
    {
      //contrasenna.length >= 8 || contrasenna.length >= 12
      if(contrasenna.length >= 8 )
      {   
        var mayuscula = false;
        var minuscula = false;
        var numero = false;
        var caracter_raro = false;
        
        for(var i = 0;i<contrasenna.length;i++)
        {
          if(contrasenna.charCodeAt(i) >= 65 && contrasenna.charCodeAt(i) <= 90)
          {
            mayuscula = true;
          }
          else if(contrasenna.charCodeAt(i) >= 97 && contrasenna.charCodeAt(i) <= 122)
          {
            minuscula = true;
          }
          else if(contrasenna.charCodeAt(i) >= 48 && contrasenna.charCodeAt(i) <= 57)
          {
            numero = true;
          }
          else
          {
            caracter_raro = true;
          }
        }
        if(mayuscula == true && minuscula == true && caracter_raro == true && numero == true)
        {
          return true;
        }
      }
      return false;
    }

    </script>


        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  
  <link rel="stylesheet" href="bootstrap.min.css">
     <script src="bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/d6e77194d9.js" crossorigin="anonymous"></script>
    
   
</head>
<body class="row m-0 bg-white justify-content-center align-items-center vh-100">
   <div class="row">
    <div class="col-1-sm">
    </div>

    <div class="col-6-sm">
          <div class="row" style="padding-bottom: 10px;padding-top:40px;">
          <div class="col-12" style="text-align: center;">
          <br>
          <img class="logo" src="img/CCIUDADANO_footerlogo.png" alt="" width="330px" height="51px" >
          <br> <br>
          </div>
          </div>
<!--height:452px;-->
  <div class="row" style="box-sizing: border-box; width: 495px;height:452px; border: 1px solid #D4D4D4; border-radius: 10px;">  

     <form class="form-signin" method="POST"  action="registrarse.php">
<div class="row" style="padding-left: 15px;">
    <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Nombre(s)</label>
          <input type="text" class="form-control" style=" height: 30px;width: 217px;" name="nombre" id="nombre" placeholder="Nombre(s)">
          </div>

    </div>

    <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Apellidos</label>
          <input type="text" class="form-control" style=" height: 30px;width: 217px;"  name="apellidos" id="apellidos" placeholder="Apellidos">
          </div>

    </div>

        <div class="col-12">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Tipo de secundaria:</label>
          <select name="tipo_escuela" id="tipo_escuela"  class="form-control" style=" height: 30px;width: 452px;" placeholder="Tipo de Secundaria">
        <option value="">Seleccione</option>
        <option value="Secundaria General">Secundaria General </option>
        <option value="Tele-secundaria">Tele-secundaria</option>
         <option value="Secundaria Técnica">Secundaria Técnica</option>
          <option value="Secundaria Federal">Secundaria Federal</option>
          <option value="Secundaria Mixta">Secundaria Mixta</option>
      </select>
          </div>

    </div>


    <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Nombre de la secundaria</label>
          <input type="text" class="form-control" style=" height: 30px;width: 217px;" name="nombre_secundaria" id="nombre_secundaria"  placeholder="Nombre(s)">
          </div>

    </div>

    <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Clave de la secundaria</label>
          <input type="text" class="form-control" style=" height: 30px;width: 217px;"name="clave_secundaria" id="clave_secundaria"  placeholder="Clave de la secundaria">
          </div>

    </div>


          <div class="col-12">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Correo</label>
         <input type="email" name="correo" id="correo"  class="form-control" style=" height: 30px;width: 452px;" placeholder="Correo">
          </div>

    </div>

      <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Crear contraseña</label>
          <input type="password" name="pass" id="pass" class="form-control" style=" height: 30px;width: 217px;" placeholder="Contraseña">
          </div>

    </div>

      <div class="col-6">
     <div class="form-group">
          <label for="exampleFormControlInput1" style="height: 15px;width: 217px;color: #000000; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">Confirmar contraseña</label>
          <input type="password" name="pass2" id="pass2" class="form-control" style=" height: 30px;width: 217px;"  placeholder="Contraseña" onblur="validar_form();" data-toggle="tooltip" data-placement="right" title="La contraseña debe de tener entre 8 a 12 caracteres, una letra Mayúscula, un Numero y un carácter especial (!#$%&?!¡).">
          </div>

    </div>

    <div class="col-md-12">    
    <center><input name="enviar" class="btn btn-lg btn-primary btn-block btn-xs" type="submit" style=" height: 40px;width: 160px;color: #808080;  font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;border: 1px solid #D4D4D4;
    border-radius: 10px; background-color: #FFFFFF; font-weight: bolder;text-align: center;" value="Registrarme"></center><br>

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

           <div class="row" style="width: 324px;">
               <div class="col-12" style="text-align: right;">
               <br>
               </div>
           </div>    
   </div>
 </div>

<footer class="container-fluid text-center" style="background-color:#d6d6d6;width: 100%;padding-bottom: 20px;">
 <div class="container">
 <div class="row align-items-center">
   <div class="col-3">
     <img src="img/CCIUDADANO_footerlogo.png"   height="37px" width="239px" alt="">
    </div>
    
    <div class="col-1">

    </div>

     <div class="col-3"  style="text-align: left;color: #000000; font-family: Roboto; font-size: 14px;
  letter-spacing: 0; line-height: 16px;  text-align: left;">
  <br>
      <center><label class="contactanos"> Contáctanos </label></center><br>
<span class="telefono">
    <img src="img/Phone.png" width="5%">
     Teléfono : 54 87 71 10<br>
    Calle Miguel Hidalgo s/n esquina<br>
    Mariano Matamoros, 14000<br>
     Ciudad de México
  </span>
    </div>

     <div class="col-1">

    </div>

     <div class="col-4" style="text-align: left;color: #000000; font-family: Roboto; font-size: 14px;
  letter-spacing: 0; line-height: 16px;  text-align: center;">

       <label class="contactanos"> Síguenos en </label><br>
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
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.5.2-dist/js/bootstrap.js"></script>
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
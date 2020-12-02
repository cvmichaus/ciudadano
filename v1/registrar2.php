<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>CCIUDADANO</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
<style>
   @font-face {
      font-family: "Roboto";
      src: url("font/Roboto-Regular.ttf");
    }

  body{
      font-family: Roboto;

  }

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  font-family: Roboto;
}
.form-signin .checkbox {
  font-weight: 400;
  font-family: Roboto;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
  font-family: Roboto;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
  <body>
    <div>     
      <main role="main">       
       <div style="border: 1px solid #d6d6d6;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;width: 800px; height: 580px; margin-left: 20%; margin-right: 20%; display: flex;  justify-content: center;  align-items: center; ">
       <form style=" width: 100%; max-width: 600px;  padding: 15px;  margin: 0 auto; font-family: Roboto;" method="POST"  action="registrarse.php">
      <center><img class="mb-4" src="img/CCIUDADANO_footerlogo.png" alt="" width="50%" ></center>
          <div class="container-fluid">
                

                    <div class="row"> 
                    <div class="col-md-6">    
                           <div class="form-group">
      <label for="nombre" style="color:#000;font-family: Roboto;">Nombre(s)</label><br>
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo">
      </div>
    </div>


 <div class="col-md-6">    
                           <div class="form-group">
      <label for="apellidos" style="color:#000;font-family: Roboto;">Apellidos</label><br>
      <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
      </div>
    </div>
</div>

<div class="row"> 

                    <div class="col-md-12">    
      <div class="form-group">
      <label for="tipo_escuela" style="color:#000;font-family: Roboto;">Tipo de Secundaria:</label><br>
      <select name="tipo_escuela" id="tipo_escuela" class="form-control" placeholder="Tipo de Secundaria">
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

<div class="row"> 
                    <div class="col-md-6">    
      <div class="form-group">
      <label for="nombre_secundaria" style="color:#000;font-family: Roboto;">Nombre de la secundaria</label><br>
      <input type="text" name="nombre_secundaria" id="nombre_secundaria" class="form-control" placeholder="Nombre de la escuela">
      </div>

        </div>

        <div class="col-md-6">    
      <div class="form-group">
      <label for="clave_secundaria" style="color:#000;font-family: Roboto;">Clave de la secundaria</label><br>
      <input type="text" name="clave_secundaria" id="clave_secundaria" class="form-control" placeholder="Clave de la secundaria">
      </div>

        </div>
     </div>


     <div class="row"> 
                    <div class="col-md-12">    
      <div class="form-group">
      <label for="correo" style="color:#000;font-family: Roboto;">Correo</label><br>
      <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">
      </div>

        </div>
     </div>


     <div class="row"> 
        <div class="col-md-6">    
        <div class="form-group">
        <label for="pass" style="color:#000;font-family: Roboto;">Contraseña</label><br>
        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" >
        </div>

        </div>

        <div class="col-md-6">    
        <div class="form-group">
        <label for="pass2" style="color:#000;font-family: Roboto;">Contraseña</label><br>
        <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Contraseña" onblur="validar_form();">
        </div>

        </div>
     </div>

     <div class="row">
      <div class="col-md-12">    
          <input name="enviar" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:#a31d24;color:#fff;font-size: 15px; " value="Registrarme">

      </div>
     </div>



                       </div>
                   
      </form>
  </div>
      </main>
   
      <footer class="mastfoot mt-auto" style="background-color: #eaeaea;color:#000;">
        <div class="container">
  <div class="row">
    <div class="col-sm">
      <br>
      <img src="img/CCIUDADANO_footerlogo.png" width="60%" alt="">
    </div>
    <div class="col-sm" style="font-size: 11px;font-family: Roboto;">
    Contactanos<br>
    <img src="img/Phone.png" width="5%"> Telefono: 54 87 71 10 <br>
    Calle Miguel Hidalgo s/n esquina<br>
    Mariano Matamoros, 14000<br>
    Ciudad de Mexico
    <br>
    </div>
    <div class="col-sm">
      Siguenos en:<br>
      <img src="img/Facebook.png" width="8%">
      <br>
    </div>
  </div>
</div>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
  </body>
</html>
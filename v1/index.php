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
       <div style="border: 1px solid #d6d6d6;-moz-border-radius: 6px;-webkit-border-radius: 6px;border-radius: 6px;width: 400px; height: 550px; margin-left: 30%; margin-right: 30%; display: flex;  justify-content: center;  align-items: center; ">

   

      <form class="form-signin" method="POST"  action="session_init.php">
      <img class="mb-4" src="img/CCIUDADANO_footerlogo.png" alt="" width="100%" >
           <?php
      if(isset($_GET["error"])) {
      ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>ERROR ! </strong> Usuario y / o Contraseña erroneos. Intentelo de nuevo.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

      <?php
      }else if(isset($_GET["adios"])){
         ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Has cerrado sesion  <br>¡Esperamos verte pronto!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

      <?php
      }
      ?>
      <h5 style="text-align: center;vertical-align: middle;color:#a31d24;font-size: 20px;"  class="h3 mb-3 font-weight-normal">Iniciar Session</h5>

      <div class="form-group">
      <label for="username" style="color:#000;font-family: Roboto;">Correo:</label><br>
      <input type="mail" name="username" id="username" class="form-control" placeholder="Ingresar Correo">
      </div>
      <div class="form-group">
      <label for="password" style="color:#000;font-family: Roboto;">Contraseña:</label><br>
      <input type="password" name="password" id="password" class="form-control" placeholder="Ingresar Contraseña">
      </div>
      
      <input name="enviar" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:#a31d24;color:#fff;font-size: 15px; " value="Ingresar">
      <br>
      <a href="#" style="font-family: Roboto;text-align: right;vertical-align: middle;color:#ccc;">olvide mi contraseña</a>
      <hr>
      <center><label style="font-family: Roboto;text-align: center;vertical-align: middle;color:#a31d24;font-size: 15px;">¿No tienes cuenta?</label></center>
      <a  href="registrar.php"class="btn btn-lg btn-primary btn-block" style="font-family: Roboto;background-color:#d6d6d6;color:#000;font-size: 15px; " type="submit">Registrate</a>
      <hr>
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
  </body>
</html>
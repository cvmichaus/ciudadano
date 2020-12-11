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
   <script src="https://kit.fontawesome.com/d6e77194d9.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body class="row m-0 bg-white justify-content-center align-items-center vh-100">
   <div class="row">
    <div class="col-1-sm">
    </div>

    <div class="col-5">
          <div class="row align-items-center" style="padding-bottom: 10px;padding-top:40px;">
          <div class="col-12" style="text-align: center;">
          <br>
          <img class="logo" src="img/CCIUDADANO_footerlogo.png" alt="" width="330px" height="51px" >
          <br> <br>
          </div>
          </div>


        <div class="row align-items-center">
        <div class="col-12" style="text-align: center;">
        <?php
        if(isset($_GET["adios"])){
        ?>
        <label class="has-cerrado-sesion">Has cerrado sesión.<br>
        ¡Esperamos verte pronto!</label><br><br>

        <?php
        }
        if(isset($_GET["olvide"])){
        ?>
         <label style="height: 56px; width: 272px; color: #000000;  font-family: Roboto;  font-size: 12px;  font-weight: bold;  letter-spacing: 0;  line-height: 28px;  text-align: center;">No pudimos reenviar tu informacion de acceso ya que tu correo no esta en el sistema. Favor de ingresar un correo valido </label><br><br>
         <?php
        }
       
        ?>
        </div>
        </div>


          <div class="row align-items-center" style="box-sizing: border-box;
          height: 281px;
          width: 324px;
          border: 1px solid #D4D4D4;
          border-radius: 10px;">
          <div class="col-12">
          <center><label class="iniciar-sesion">Iniciar Sesión </label></center>           
          </div>

          <div class="col-12">
          <form class="form-signin" method="POST"  action="session_init.php">
          <div class="form-group">
          <label for="exampleFormControlInput1" style=" height: 15px;
          width: 290px;
          color: #000000;
          font-family: Roboto;
          font-size: 12px;
          letter-spacing: 0;
          line-height: 14px;">Correo</label>
          <input type="text" class="form-control" style=" height: 30px;
          width: 290px;" name="username" id="username" placeholder="Ingresar tu correo">
          <?php
          if(isset($_GET["error"])) {
          ?>
          <div style=" height: 9px;
          width: 177px;
          color: #EB343A;
          font-family: Roboto;
          font-size: 9px;
          letter-spacing: 0;
          line-height: 9px;">
          Usuario incorrecto
          </div>
          <?php
          }
          ?>
        

          </div>

          <div class="form-group">
          <label for="exampleFormControlInput1" style="  height: 15px;
          width: 290px;
          color: #000000;
          font-family: Roboto;
          font-size: 12px;
          letter-spacing: 0;
          line-height: 14px;">Contraseña</label>
        <div class="input-group" id="show_hide_password">
      <input class="form-control" type="password" id="password" name="password" placeholder="Ingresar tu contraseña" style=" height: 30px; width: 270px;">
      <div class="input-group-addon">
        <a href=""><i class="fa fa-eye-slash" style=" color: #A31D24;" aria-hidden="true"></i></a>
      </div>
          </div>
<?php
          if(isset($_GET["error"])) {
          ?>
           <div style=" height: 9px;
  width: 177px;
  color: #EB343A;
  font-family: Roboto;
  font-size: 9px;
  letter-spacing: 0;
  line-height: 9px;">
       Contraseña incorrecta
      </div>
          <?php
          }
          ?>
         

      </div>
      		<style>
      			.fa {
  position:absolute;
  padding: 11px;
  right: 1px;
}
      		</style>

         <!-- <div class="form-group">
    <div class="input-group" id="show_hide_password">
      <input class="form-control" type="password" id="password" name="password" placeholder="Ingresar tu contraseña" style=" height: 30px;
          width: 270px;">
      <div class="input-group-addon">
        <a href=""><i class="fa fa-eye" style=" color: #A31D24;" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
-->




          <div class="form-group" style="text-align: center;">
          <input type="submit" name="enviar" style=" height: 40px;width: 160px;color: #808080;  font-family: Roboto; font-size: 12px;letter-spacing: 0;line-height: 14px;border: 1px solid #D4D4D4;
          border-radius: 10px; background-color: #FFFFFF; font-weight: bolder;text-align: center;" value="Ingresar">
          </div>
          </form>        
          </div>
          </div>

           <div class="row" style="width: 324px;">
               <div class="col-12" style="text-align: right;">
                <a style="font-family: Lato;text-align: right;color:#666666;font-size: 12px;cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
        Olvidé mi contraseña</a>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Olvidé mi contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="renviarDatos.php">
		<div class="form-group" style="font-family: Lato;text-align: left;color:#666666;font-size: 12px;">
		<label for="exampleFormControlInput1" style="font-family: Lato;text-align: right;color:#666666;font-size: 12px;">Correo</label>
		<input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com">
		</div>

		 <button type="submit" class="btn btn-primary">Enviar</button>

		</form>
      </div>
     
    </div>
  </div>
</div>
        <hr>
         <center><label class="no-tienes-cuenta" style="text-align: center;">¿Eres docente?¿No tienes cuenta?</label></center>

         <a  href="registrar.php" id="boton_ingresar" class="btn btn-sm btn-primary btn-block" type="submit">Regístrate</a>
         <style>
         	#boton_ingresar{
         		font-family: Roboto;
         		background-color:#d6d6d6;
         		color:#000;
         		font-size: 12px;
         		text-align: center;
         		font-weight: bolder;
         	}
         	#boton_ingresar: hover{
         		background-color: #A31D24;
         		color:#CCCCCC;
         		font-size: 12px;
         		text-align: center;
         		font-weight: bolder;
         	}

         	#boton_ingresar: active{
         		background-color: #A31D24;
         		color:#CCCCCC;
         		font-size: 12px;
         		text-align: center;
         		font-weight: bolder;
         	}
         </style>	
          <hr>
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
  <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="sistema/vendor/popper.min.js"></script>
    <script src="bootstrap-4.5.2-dist/js/bootstrap.js"></script>
</body>
</html> 
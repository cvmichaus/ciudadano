<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];


     $codUsu = $_GET["codUsu"];
       

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="stylo.css">
  <link href="../bootstrap-4.5.2-dist/css/bootstrap.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="js/funciones.js"></script>
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

      <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <!-- MAIN -->
     <div id="wrapper">
       <!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top" style="background-color: #f0f0f0;">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="../img/CCIUDADANO_footerlogo.png" width="30%" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="position: inherit; width: 700px; margin-right: 0%;font-family: Roboto; font-size: 12px;color:#a31d24;">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#a31d24;font-size: 16px;font-family: Roboto;font-weight: bold;">Inicio </a>  </li>      
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#000;font-size: 16px;font-family: Roboto;font-weight: bold;">Foro</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" style="color:#000;font-size: 16px;font-family: Roboto;font-weight: bold;">Sobre CCIUDADANO </a>  </li>          
        <li class="nav-item"> <a class="nav-link" href="logout.php">
          <img src="../img/Perfil.png" alt="" style="position: inherit; width: 50px;margin-right: 0%;margin-top: -12px; "></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <!-- Navigation -->
          <div id="page-wrapper">
            <!-- Page Content -->
             <div class="container-fluid">
                 <div class="row">
                       <div class="col-md-12">
                             <div class="white-box">

<div class="row">
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

<div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-3">
                                     <p><h3 style="font-family: Roboto;font-size: 20px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Perfil</h3></p>
                                  </div>
                                  <div class="col-3">
                                      
                                  </div>  
                                   <div class="col-3" style="text-align: right;">
                                    <form method="post" action="EliminarDocente.php" id="from1">
  <input type="hidden" id="codUsu" name="codUsu" value="<?php echo $codUsu; ?>">
  <button  class="btn btn-light" id="btnEliminar" style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;cursor: pointer;" ><span class="oi oi-trash"></span> Eliminar Usuario</button> 
  </form> 


<script type="text/javascript">
document.querySelector('#from1').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Eliminar Docente",
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
              text: 'El docente se eliminara acontinuacion',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Cancelado", "tu usuario esta a salvo", "error");
          }
        });
    });
</script>
                                  </div>   
                                  <div class="col-3">                                  

                                     <button type="button" class="btn btn-light" style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;"><span  class="oi oi-key"></span> Resetear Contraseña</button>

                                  </div>                               
                                </div>

                                  <?php
      $ConsultaPrincipal = "SELECT u.Usuario,u.correo,u.Perfil,d.Nombres,d.Apellidos,s.Tipo,s.Nombre,s.Clave
      FROM usuarios as u
      INNER JOIN detalle_usuario as d  ON u.CodUsuario = d.CodUsuario 
      INNER JOIN secundarias as s  ON u.CodUsuario = s.CodUsu
      WHERE u.CodUsuario ='".$codUsu."' AND u.estatus  =1  ";

      if($resqryUsuario = $mysqli->query($ConsultaPrincipal)) {
      while($data = mysqli_fetch_assoc($resqryUsuario)){ 
                                  ?>
                                  <from method="POST"  action="actualizar_usuario.php">
                                     <input type="hidden" id="codUsuario" name="codUsuario" value="<?php echo $codUsu; ?>">
                                  <div class="row" style="width:100%;" >
                                <div class="col-4" style="border: 1px solid #000000;-moz-border-radius: 7px;-webkit-border-radius: 7px;padding: 10px; ">
                                 <label style="text-transform: uppercase;font-family: Roboto;font-size: 12px;font-weight: bolder; text-align: left;vertical-align: middle;font-color:#ccc;">Datos Basicos</label>
                                 <br>
                                 <label style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Nomnbre(s)</label>
                                 <br>
                                  <label><input class="form-control" style="width: 150%color:#000;font-family: Roboto;" type="text" name="nombre" id="nombre" value="<?php echo $data['Nombres']; ?>"></label>
                                  <br>
                                 <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Apellidos</label>
                                  <br>
                                   <label><input style="width: 150%color:#000;font-family: Roboto;" class="form-control" type="text" name="apellidos" id="apellidos" value="<?php echo $data['Apellidos']; ?>"></label>
                                  <br>
                                 <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Correo</label>
                                  <br>
                                   <label><input style="color:#000;font-family: Roboto;" class="form-control" type="mail" name="correo"  id="correo" value="<?php echo $data['correo']; ?>"></label>
                                  <br>
                                 <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Tipo de Usuario</label>
                                   <br>
                                   <label>
                                      <select style="width: 150%;color:#000;font-family: Roboto;" class="form-control" type="text" name="correo"  id="correo" >
                                      <option value="1">Docente</option>
                                      
                                   </select>
                                   </label>
                                </div>
                                <div class="col-8"  style="border: 1px solid #000000;-moz-border-radius: 7px;-webkit-border-radius: 7px;padding: 10px;">
                                  <label style="text-transform: uppercase;font-family: Roboto;font-size: 12px;font-weight: bolder; text-align: left;vertical-align: middle;font-color:#ccc;">Secundaria donde Labora</label>
                                  <br>
                                   <label>
                                    <div class="row">
                                      <div class="col-12">
                                         <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Tipo de secundaria</label>
                                      </div>
                                    </div>
                                     <div class="row">
                                      <div class="col-12">
                     

    <select style="width: 100%;color:#000;font-family: Roboto;" name="tipo_escuela" id="tipo_escuela" class="form-control" placeholder="Tipo de Secundaria">
    <option value="<?php echo $data['Tipo']; ?>"><?php echo $data['Tipo']; ?></option>
    <option value="Secundaria General">Secundaria General </option>
    <option value="Tele-secundaria">Tele-secundaria</option>
    <option value="Secundaria Técnica">Secundaria Técnica</option>
    <option value="Secundaria Federal">Secundaria Federal</option>
    <option value="Secundaria Mixta">Secundaria Mixta</option>
    </select>
                                      </div>

            <div class="col-6">
              <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Nombre de secundaria</label>
              <br>
 <input type="text" name="nombre_secundaria" id="nombre_secundaria" class="form-control" placeholder="Nombre de la escuela" value="<?php echo $data['Nombre']; ?>">
            </div>
            <div class="col-6">
              <label  style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: capitalize;font-weight: bold;">Clave de secundaria</label>
              <br>
<input type="text" name="clave_secundaria" id="clave_secundaria" class="form-control" placeholder="Clave de la secundaria" value="<?php echo $data['Clave']; ?>">
            </div>

                                    </div>

                                     <div class="row">
                                      <div class="col-6">
                                        <br><br><br>
                                        <button type="button" class="btn btn-light" style="font-family: Roboto;font-size: 12px;color:#a31d24;font-weight: bold; "> + Agregar otro centro de trabajo</button>
                                      </div>
                                      
                                        <div class="col-3"></div>
                                         <div class="col-3">
                                          <br><br><br>
                                           <input name="enviar" class="btn btn-sm btn-primary btn-block" type="submit" style="background-color:#a31d24;color:#fff;font-size: 15px; " value="Actualizar">

                                         </div>
                                     </div>

                                   </label>
                                    </div>
                                  </div>
                                </from>

                                   <?php
                                  }
                                }
                                  ?>

                             </div>
                       </div>
                 </div>
             </div>
             <!-- Page Content -->
          </div>   
     </div>
      <!-- MAIN -->
      <footer class="mastfoot mt-auto" style="background-color: #eaeaea;color:#000;">
        <div class="container">
  <div class="row">
    <div class="col-sm">
      <br>
      <img src="../img/CCIUDADANO_footerlogo.png" width="60%" alt="">
    </div>
    <div class="col-sm" style="font-size: 11px;font-family: Roboto;">
    Contactanos<br>
    <img src="../img/Phone.png" width="5%"> Telefono: 54 87 71 10 <br>
    Calle Miguel Hidalgo s/n esquina<br>
    Mariano Matamoros, 14000<br>
    Ciudad de Mexico
    <br>
    </div>
    <div class="col-sm">
      Siguenos en:<br>
      <img src="../img/Facebook.png" width="8%">
      <br>
    </div>
  </div>
  <br>
</div>
      </footer>
</body>
</html>
  <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
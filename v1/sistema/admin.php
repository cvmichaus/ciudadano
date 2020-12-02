<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];
       

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
<br>
                                <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-6">
                               <p><h3 style="font-family: Roboto;font-size: 14px;color:#a31d24;text-transform: uppercase;font-weight: bold;">Administración</h3></p>                               
                                  </div>
                                  <div class="col-6">
                                  
                                  </div>
                                </div>

                                <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-4">
                                  </div>
                                  <div class="col-4">
                                      <form class="example form-inline" action="/action_page.php">
                                      <input type="text" placeholder="Search.." name="search">
                                      <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>                    
                                  </div>  
                                   <div class="col-4">
                                  </div>                               
                                </div>
<br><br>

<div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-3">
                                     <p><h3 style="font-family: Roboto;font-size: 12px;color:#a31d24;text-transform: uppercase;font-weight: bold;">Resumen</h3></p>
                                  </div>
                                  <div class="col-3">
                                      
                                  </div>  
                                   <div class="col-3">
                                  </div>   
                                  <div class="col-3">
                                  </div>                               
                                </div>

   <?php

      $ConsultaDocentes = "SELECT * FROM usuarios WHERE estatus =1 AND Perfil = 1 ";
      $resDoc = $mysqli->query($ConsultaDocentes);
      $row_cnt = $resDoc->num_rows;


      $ConsultaUF = "SELECT * FROM euf ";
      $resUF = $mysqli->query($ConsultaUF);
      $row_UF = $resUF->num_rows;
      

       $ConsultaSec = "SELECT * FROM secundarias ";
      $resSec = $mysqli->query($ConsultaSec);
      $row_Sec = $resSec->num_rows;
      
    
      ?>
                                <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-3">
          <h2 class="timer count-title count-number" data-to="<?php echo $row_cnt; ?>" data-speed="1500"></h2>
                  <p class="count-text ">Docentes</p>
                                  </div>
                                  <div class="col-3">
          <h2 class="timer count-title count-number" data-to="<?php echo $row_Sec; ?>" data-speed="1500"></h2>
                  <p class="count-text ">Secundarias</p>
                                  </div>  
                                   <div class="col-3">
        <h2 class="timer count-title count-number" data-to="0" data-speed="1500"></h2>
                  <p class="count-text ">Estudiantes</p>
                                  </div>   
                                  <div class="col-3">
        <h2 class="timer count-title count-number" data-to="<?php echo $row_UF; ?>" data-speed="1500"></h2>
                  <p class="count-text ">Unidades de formación</p>
                                  </div>                               
                                </div>


                                  <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-3">
                               <p><h3 style="font-family: Roboto;font-size: 14px;color:#a31d24;text-transform: uppercase;font-weight: bold;">Usuarios</h3></p>                               
                                  </div>
                                  <div class="col-3">                                  
                                  </div>
                                      <div class="col-3">                                  
                                  </div>
                                      <div class="col-3">                                  
                                  </div>
                                </div>

                                  <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-12">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> 
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

                      <script>
                      $(document).ready(function() {
                      $('#example').DataTable();
                      } );
                      </script> 
                                      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
                 <th>Ver</th>
            </tr>
        </thead>
        <tbody>
      <?php

      $ConsultaPrincipal = "SELECT * FROM usuarios WHERE estatus =1 AND Perfil <> 0 ";

      if($resqryUsuario = $mysqli->query($ConsultaPrincipal)) {
      while($data = mysqli_fetch_assoc($resqryUsuario)){      
      ?>
      <tr>
      <td><?php echo $data['CodUsuario']; ?></td>
      <td><?php echo $data['Usuario']; ?></td>
      <td><?php echo $data['correo']; ?></td>
      <td><?php echo $data['Usuario']; ?></td>
      <td><a  href="EditarUsu.php?codUsu=<?php echo $data['CodUsuario']; ?>" style="cursor: pointer;" ><span class="oi oi-pencil" style="color: #a31d24;" ></span></a></td>
      <td>
    <form method="post" action="EliminarDocente.php" id="from1">
      <input type="hidden" id="codUsu" name="codUsu" value="<?php echo $data['CodUsuario']; ?>">
     <button id="btnEliminar" style="cursor: pointer;" ><span class="oi oi-trash" style="color: #a31d24; outline: none;border:0;border:none;" ></button> 
    </form>  
      </td>
      <td><a  href="VerUsu.php?codUsu=<?php echo $data['CodUsuario']; ?>" style="cursor: pointer;" ><span class="oi oi-eye" style="color: #a31d24;"></span></a></td>
      </tr>
      <?php
      }
      }
      ?>
        </tbody>

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

   
    </table>

                                  </div>
                                 
                                </div>


                                <div class="row" style="text-align: center;vertical-align: middle;">
                                  <div class="col-3">
                                    
                                  </div>
                                  <div class="col-3">
                                      
                                  </div>  
                                   <div class="col-3">
                                     
                                  </div>   
                                  <div class="col-3">
                                    <br><br>
                                     <a href="#" id="botonAgregar" name="botonAgregar" class="btn btn-outline-danger btn-sm" >Agegar Usuario</a>
                                  </div>                               
                                </div>




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
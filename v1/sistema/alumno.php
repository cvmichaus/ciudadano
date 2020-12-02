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
	  <script src="../bootstrap-4.5.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

                                   <div class="row" style="text-align: center;vertical-align: middle; ">
                                     <div class="col-md-12">
                                      <label style="font-size: 1.3em;font-weight: bolder;">Elementos de la Unidad de Formacion</label>
                                     </div>
                                   </div>                                        
                                
                                </div>

                                 <div class="row" >
                                     <div class="col-md-12">
                                      <label style="font-size: 1.3em;font-weight: bolder;">Creacion de  Unidad de Formacion</label>
                                     </div>
                                     
                                   </div>  

                                   <div class="row" >
                                     <div class="col-md-12">
                                      <hr>
                                     </div>                                     
                                   </div> 


                                    <div class="row" >
                                     <div class="col-md-12">
                                      <label style="font-size: 1em;font-weight: bolder;">Titulo</label>
                                     </div>                                     
                                   </div> 


                                    <div class="row">
                                     <div class="col-md-12">            
                                     <div class="form-group">
                                        <label for="NombreAsignatura">¿Cual es el nombre de mi asignatura , proyecto o el conjunto de actividades de formacion enmarcadas en mi Unidad de Formacion</label>
                                        <input type="text" class="form-control" id="NombreAsignatura" aria-describedby="NombreAsignatura" placeholder="Escriba Aqui">
                                        </div>
                                     </div>                                     
                                   </div> 

                                    <div class="row" >
                                     <div class="col-md-12">
                                      <label style="font-size: 1em;font-weight: bolder;">Proyeccion </label>
                                     </div>                                     
                                   </div> 

                                    <div class="row">
                                     <div class="col-md-12">            
                                     <div class="form-group">
                                        <label for="proyeccion">¿Mi unidad de formacion se realizara en el marco de una asignatura , un proyecto escolar , la resolucion de un problema que abordamos profesores del mismo grado , pero de distintas  asignaturas , la formacion por practicas in sitio entre otros?</label>
                                        <textarea class="form-control" id="proyeccion" aria-describedby="proyeccion" placeholder="Escriba Aqui"></textarea>
                                        </div>
                                     </div>                                     
                                   </div> 

                                    <div class="row" >
                                     <div class="col-md-12">
                                      <label style="font-size: 1em;font-weight: bolder;">Evaluacion Diagnostica </label>
                                     </div>                                     
                                   </div> 

                                    <div class="row">
                                     <div class="col-md-12">            
                                     <div class="form-group">
                                        <label for="evadiagnostica">¿En que contexto me propongo desarrollar la Unidad de Formacion?, ¿Cual ha sido el acercamiento de mis estudiantes al al tema de los derechos economicos , sociales, culturales, ambientales? , ¿Cual es el perfil de mis estudiantes? ¿Que conocimientos ya poseen mis estudiantes? ¿Cuales son las capacidades, destrexas y habilidades que ya dominana mis estudiantes ? ¿Que valores, actitudes y comportamientos predominan en mis estudiantes ? </label>
                                        <textarea class="form-control" id="evadiagnostica" aria-describedby="evadiagnostica" placeholder="Escriba Aqui"></textarea>
                                        </div>
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
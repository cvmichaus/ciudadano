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

                               <div class="row">
                            <div class="col-md-12">
                            <a href="maestro.php" style="color:#a31d24;"> <- Regresar</a>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <h1>Elementos de la Unidad de Formación</h1>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;text-transform: uppercase;" >creación de la unidad de formación</p>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-12">
                           <hr>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 11px;color:#CCC;" >Todos los campos son obligatorios, puedes guardar datos que tengas en el momento y continuar después.</p>
                            </div>
                            </div>

                              <form method="post" action="DBUF.php">

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Titulo</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="titulo" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿Cuál es el nombre de mi asignatura, proyecto o el conjunto de formación enmarcadas en mi Unidad de Formación? </label>
                                <textarea class="form-control" id="titulo" name="titulo" aria-describedby="titulo" placeholder="Escriba Aqui" required></textarea>
                                <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                </div>
                            </div>
                            </div>


                                <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Proyección</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="proyeccion" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿Mi Unidad de Formación se realizará en el marco de una asignatura; proyecto escolar; la resolución de un problema que abordamos profesores del mismo grado, pero de distintas asignaturas; la formación por practica in situ; entre otros? </label>
                                <textarea class="form-control" id="proyeccion" name="proyeccion" aria-describedby="proyeccion" placeholder="Escriba Aqui"></textarea>
                               
                                </div>
                            </div>
                            </div>

                              <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Evaluación Diagnostica</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="evaluacion" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿En qué contexto me propongo desarrollar la Unidad de Formación?, ¿Cuál ha sido el acercamiento de mis estudiantes al tema de los derechos económicos, sociales, culturales, ambientales?, ¿Cuál es el perfil de mis estudiantes? ¿Qué conocimientos ya poseen mis estudiantes? ¿Cuáles son las capacidades, destrezas y habilidades que ya dominan mis estudiantes? ¿Qué valores, actitudes y comportamientos predominan en mis estudiantes?</label>
                                <textarea class="form-control" id="evaluacion" name="evaluacion" aria-describedby="evaluacion" placeholder="Escriba Aqui"></textarea>
                               
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Finalidad</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="finalidad" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿Qué relaciones se construyen entre la asignatura en la que se desarrollara la Unidad de Formación con el entorno y las situaciones problema? ¿De qué sirven las competencias enmarcadas en esta Unidad de Formación (entre otras las referidas al CCP) a mis estudiantes?</label>
                                <textarea class="form-control" id="finalidad" name="finalidad" aria-describedby="finalidad" placeholder="Escriba Aqui"></textarea>
                               
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Competencias, aprendizaje clave o propósitos de la enseñanza </p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="competencias" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿Qué competencia o competencias CCP empatan con mis competencias, propósitos de enseñanza, aprendizaje esperados, eje SEP o indicaciones de logro?</label>
                                <textarea class="form-control" id="competencias" name="competencias" aria-describedby="competencias" placeholder="Escriba Aqui"></textarea>
                               
                                </div>
                            </div>
                            </div>


                             <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Diseño de la situación didáctica </p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="didactica" style="font-family: Roboto;font-size: 12px;color:#BBB;">A partir de la proyección de su proyecto, resolución de problemas, análisis de casos, preguntas generadoras, participación tutelada en investigación, simulaciones situadas, aprendizaje servicio a la comunidad, formación práctica in situ, defina:<br>
                                ¿Cuáles son las actividades iniciales?<br>
                                ¿Cuáles son las actividades de desarrollo?<br>
                                ¿Cuáles son las actividades de cierre?<br>
                                </label>
                                <textarea class="form-control" id="didactica" name="didactica" aria-describedby="didactica" placeholder="Escriba Aqui"></textarea>
                               
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                            <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero de Secuencias didácticas</p>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="nsecuencias" style="font-family: Roboto;font-size: 12px;color:#BBB;">¿Cuántas secuencias didácticas se desarrollarán en el marco de este proyecto, la resolución del problema, el análisis de caso, la pregunta generadora, la participación tutelada en investigación, la simulación situada, la formación pro practica in situ?
                                </label>
                                <input type="number" class="form-control" id="nsecuencias" name="nsecuencias" aria-describedby="nsecuencias" required placeholder="Escriba Aqui">
                               
                                </div>
                            </div>
                            </div>

                             <div class="row">
                            <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  </div>
                                  <div class="col-md-3">
                                  <input type="submit" class="btn btn-outline-danger btn-lg" value="Guardar">
                                  </div>
                            </div>

                          </form>





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
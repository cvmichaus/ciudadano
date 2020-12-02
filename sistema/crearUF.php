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
    <script src="../bootstrap-4.5.2-dist/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <!-- wysihtml5 parser rules -->



</head>
<style>


</style>
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
                                      <a href="maestro.php" class="btn btn-danger btn-sm" style="background-color: #a31d24"> Regresar </a>
                                  </div>
                                </div>
                                <br>
                              <form method="post" action="addUF.php">

                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                      <h2>Datos de la unidad de formacion</h2>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                      Secuencia didactica reconocimiento inicial de problematica
                                      <hr>
                                    </div>
                                </div>

                                  <div class="row">
                                    <div class="col-md-12">                                      
                                        <div class="form-group">
                                        <label for="semestre">Nombre identificador de la UF</label>
                                        <input type="text" class="form-control" id="nombreUF" name="nombreUF" aria-describedby="nombreUF" placeholder="nombreUF">
                                        <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
                                        </div>
                                    </div>

                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-6">                                      
                                        <div class="form-group">
                                        <label for="semestre">Semestre</label>
                                        <input type="text" class="form-control" id="semestre" name="semestre" aria-describedby="semestre" placeholder="Semestre">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="Asignatura">Asignatura</label>
                                        <input type="text" class="form-control" name="asignatura" id="asignatura" aria-describedby="Asignatura" placeholder="Asignatura">
                                        </div>
                                    </div>
                                </div>

                                 <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="MACD">Etapa del MACD</label>
                                        <input type="text" class="form-control" id="MACD" name="MACD" aria-describedby="MACD" placeholder="Etapa del MACD">
                                        </div>
                                  </div>
                                   <div class="col-md-4">                                   
                                    <div class="form-group">
                                        <label for="numero_alumnos">Numero de alumnos</label>
                                        <select  class="form-control" name="numero_alumnos" id="numero_alumnos" aria-describedby="numero_alumnos" placeholder="Numero Alumnos">
                                        <option value="">Seleccione</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">1</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>    
                                        </select>
                                        </div>                                 
                                  </div>
                                   <div class="col-md-4">                                    
                                    <div class="form-group">
                                        <label for="numero_horas">Numero de Horas</label>
                                        <select class="form-control" name="numero_horas" id="numero_horas" aria-describedby="numero_horas" placeholder="numero_horas">
                                          <option value="">Seleccione</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">1</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        </select>
                                        </div>                                 
                                  </div>
                                 </div>

                                  <div class="row">
                                    <div class="col-md-12">
                                      <label style="font-weight: bolder;">DIAGNOSTICO SITUACIONAL INICIAL</label>  <span style="cursor: pointer;" class="oi oi-info" data-toggle="modal" data-target="#exampleModal" ></span>
                                      <hr>
                                    </div>
                                </div>

                                <!--MODAL DIAGNOSTICO INICIAL-->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lorem Imposum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id convallis felis, nec ornare mauris. Vestibulum hendrerit tortor velit, at maximus tellus auctor eget. Proin est risus, vehicula in vehicula nec, lacinia et leo. Vestibulum elit dolor, finibus non ex eget, pharetra vehicula libero. In facilisis vel velit eget tincidunt. Vestibulum dolor erat, ultrices et finibus ac, posuere et lacus. Phasellus cursus, nisl id tempor pulvinar, turpis velit luctus purus, eget sodales nisl velit a purus. 
        <br>Donec ac facilisis quam. Vivamus sed eros vel velit accumsan sagittis. Sed elementum nisi euismod arcu accumsan iaculis. Sed eu lacinia ex. Cras placerat, libero vel mollis dictum, magna arcu ultrices eros, vel laoreet massa elit id ligula. Nulla ac posuere orci. Donec id nisl massa. Donec id felis non nunc rhoncus convallis vel non lectus.<br>

Etiam sit amet pharetra nulla, nec molestie nisi. Donec ut lacinia nibh, eget viverra lacus. Ut gravida volutpat diam at vestibulum. Pellentesque a tempus lorem. Duis quis ante eros. Donec imperdiet ullamcorper porta.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                                 <!--MODAL DIAGNOSTICO INICIAL-->

                                  <div class="row">


                                        <div class="col-md-6">                                    
                                        <div class="form-group">
                                        <label for="temas">Tema</label>                               
                                        <textarea class="form-control" name="temas" id="temas" aria-describedby="temas" placeholder="temas">
                                        </textarea>
                                        </div>                                 
                                        </div>


                                        <div class="col-md-6">                                    
                                        <div class="form-group">
                                        <label for="subtemas">Subtemas</label>
                                        <textarea  class="form-control" name="subtemas" id="subtemas" aria-describedby="subtemas" placeholder="subtemas">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                  </div>


                                    <div class="row">
                                    <div class="col-md-12">
                                      <label style="font-weight: bolder;">Competencias</label>  <span style="cursor: pointer;" class="oi oi-info" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" ></span>
<!--

data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"

data-toggle="modal" data-target="#exampleModal2"
-->

                                      <hr>
                                    </div>
                                </div>

                                <!--MODAL Competencias-->
                                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Competencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                                 <!--MODAL Competencias-->

  <div class="row">


                                        <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="componente">Componente Cognitivo </label>                               
                                        <textarea class="form-control" name="componente" id="componente" aria-describedby="componente" placeholder="componente">
                                        </textarea>
                                        </div>                                 
                                        </div>


                                        <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="componente_meta">Componente Metacognitivo</label>
                                        <textarea  class="form-control" name="componente_meta" id="componente_meta" aria-describedby="componente_meta" placeholder="componente meta">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                        <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="componente_no_cognitivo">Componenete no cognitivo</label>
                                        <textarea  class="form-control" name="componente_no_cognitivo" id="componente_no_cognitivo" aria-describedby="componente_no_cognitivo" placeholder="componente no cognitivo">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                  </div>

                                   <div class="row">
                                    <div class="col-md-12">
                                      <label style="font-weight: bolder;">Recursos</label>  <span style="cursor: pointer;" class="oi oi-info" data-toggle="modal" data-target="#exampleModal3" ></span>
                                      <hr>
                                    </div>
                                </div>

                                <!--MODAL Recursos-->
                                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recursos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                                 <!--MODAL Competencias-->

 <div class="row">


                                        <div class="col-md-12">                                    
                                        <div class="form-group">
                                        <label for="recursos_tema">Tema </label>                               
                                        <textarea class="form-control" name="recursos_tema" id="recursos_tema" aria-describedby="recursos_tema" placeholder="Tema">
                                        </textarea>
                                        </div>                                 
                                        </div>

</div>

 <div class="row">


                                        <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="actividades_docentes" style="font-weight: bolder;">Actividades docentes </label>
                                        <br>
                                        <label for="actividades_docentes">Primera Session </label>                               
                                        <textarea class="form-control" id="actividades_docentes" name="actividades_docentes" aria-describedby="actividades_docentes" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                          <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="actividades_estudiantes" style="font-weight: bolder;">Actividades estudiantes </label>
                                        <br>
                                        <label for="actividades_docentes">Primera Session </label>                          
                                        <textarea class="form-control" id="actividades_estudiantes" name="actividades_estudiantes" aria-describedby="actividades_estudiantes" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                          <div class="col-md-4">                                    
                                        <div class="form-group">
                                        <label for="criterios_evidencias" style="font-weight: bolder;">Criterios y Evidencias </label> 
                                        <br>
                                        <label for="actividades_docentes">Primera Session </label>                              
                                        <textarea class="form-control" id="criterios_evidencias" name="criterios_evidencias" aria-describedby="criterios_evidencias" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

</div>


<div class="row">


                                        <div class="col-md-4">                                    
                                        <div class="form-group">
                                        
                                        <label for="actividades_docentesS2">Segunda Session </label>                               
                                        <textarea class="form-control" id="actividades_docentesS2" name="actividades_docentesS2" aria-describedby="actividades_docentesS2" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                          <div class="col-md-4">                                    
                                        <div class="form-group">
                                        
                                        <label for="actividades_estudiantesS2">Segunda Session </label>                          
                                        <textarea class="form-control" id="actividades_estudiantesS2" name="actividades_estudiantesS2" aria-describedby="actividades_estudiantesS2" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

                                          <div class="col-md-4">                                    
                                        <div class="form-group">
                                       
                                        <label for="criterios_evidenciasS2">Segunda Session </label>                              
                                        <textarea class="form-control" id="criterios_evidenciasS2" name="criterios_evidenciasS2" aria-describedby="criterios_evidenciasS2" placeholder="">
                                        </textarea>
                                        </div>                                 
                                        </div>

</div>

<div class="row">
                                    <div class="col-md-12">
                                      <label style="font-weight: bolder;">Matriz de valoracion</label> 
                                    </div>
                                </div>


                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table">
  <thead>
    <tr>
      <th scope="col">COMPONENTE</th>
      <th scope="col" style="color:#a31d24;text-transform: capitalize;">Inicial receptiva</th>
      <th scope="col" style="color:#a31d24;text-transform: capitalize;">Basica</th>
      <th scope="col" style="color:#a31d24;text-transform: capitalize;">Autonoma</th>
      <th scope="col" style="color:#a31d24;text-transform: capitalize;">Estrategica</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">NO COGNITIVO</th>
      <td><textarea id="nocognitivo_inicial" name="nocognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="nocognitivo_basica" name="nocognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="nocognitivo_autonoma" name="nocognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="nocognitivo_estrategica" name="nocognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
    </tr>
    <tr>
      <th scope="row">METACOGNITIVO</th>
      <td><textarea id="metacognitivo_inicial" name="metacognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="metacognitivo_basica" name="metacognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="metacognitivo_autonoma" name="metacognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="metacognitivo_estrategica" name="metacognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
    </tr>
    <tr>
      <th scope="row">COGNITIVO</th>
     <td><textarea id="cognitivo_inicial" name="cognitivo_inicial" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="cognitivo_basica" name="cognitivo_basica" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="cognitivo_autonoma" name="cognitivo_autonoma" style="border: 0;outline: none;"></textarea> </td>
      <td><textarea id="cognitivo_estrategica" name="cognitivo_estrategica" style="border: 0;outline: none;"></textarea> </td>
    </tr>
  </tbody>
</table>
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
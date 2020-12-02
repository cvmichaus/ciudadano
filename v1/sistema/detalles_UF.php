<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

       $ID_UF = base64_decode($_REQUEST['coduf']); 
       

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
<link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<script  src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


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

                              <div id="principal" style="  border-color: #ccc; border-width: 1px; border-style: solid;border-radius: 6px;">
                                <br>
                                <div class="row">
                                  <div class="col-md-3">
                                      <a href="maestro.php"  style="color: #a31d24;">&nbsp;<- Regresar </a>
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                      
                                  </div>
                                </div>
                                <br>
  <?php
  $ConsultaPrincipal = "SELECT * FROM  euf WHERE `CodUF` =  ".$ID_UF." ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
  while($data = mysqli_fetch_assoc($ResQry)){ 
    
  ?>
                                    <div class="row" style="margin-right: 35px;">
                                    <div class="col-md-12">
                                    <label style="color: #a31d24;font-weight: bolder;text-indent: 20pt; "><?php echo $data['Titulo']; ?></label>
                                    </div>
                                    </div>


                                     <div class="row">
                                  <div class="col-md-4">
                                          <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-data-transfer-download" ></span> Descargar </a>  <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-print" ></span> Imprimir </a> <a href="#" class="btn btn-secondary btn-sm" ><span class="oi oi-share" ></span> Compartir </a>                                        
                                  </div>
                                   <div class="col-md-2">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3" style="text-align: right;vertical-align: middle;">
                                      <!--
                                      <a href="deleteuf.php" class="btn btn-danger btn-sm" style="color: #a31d24;background-color: #fff;"><span class="oi oi-trash" ></span> Eliminar UF </a>-->


                                      <form method="post" action="EliminarUF.php" id="from1">
      <input type="hidden" id="codUsu" name="codUsu" value="<?php echo $data['CodUsuario']; ?>">
     <button  id="btnEliminar" class="btn btn-light btn-sm" style="cursor: pointer;" ><span class="oi oi-trash" style="color: #a31d24; outline: none;border:0;border:none;"> Eliminar UF</span></button> 
    </form> 

                                  </div>
                                </div>

                                     <div class="row">
                                    <div class="col-md-12" style="text-align: center;vertical-align: middle;">
<br>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" >
  <a class="nav-link active" id="informacion-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="informacion" aria-selected="true" ><span class="oi oi-monitor" onclick="ejecuta_ajax('informacion_generl.php','coduf=<?php echo $data['CodUF']; ?>','contenidos')" > Información General</a>

  </li>
  <li class="nav-item">
  <a class="nav-link" id="secuencia-tab" data-toggle="tab" style="cursor: pointer;"  role="tab" aria-controls="secuencia" aria-selected="false" ><span class="oi oi-book" onclick="ejecuta_ajax('secuencias_didactica.php','coduf=<?php echo $data['CodUF']; ?>&ns=<?php echo $data['NSDidacticas']; ?>','contenidos')" > Secuencia didáctica</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#archivos" role="tab" aria-controls="contact" aria-selected="false" ><span class="oi oi-layers" > Archivos y documentos</a>
  </li>
    <li class="nav-item">
  <a class="nav-link" id="estudiantes-tab" data-toggle="tab" style="cursor: pointer;" role="tab" aria-controls="estudiantes" aria-selected="false" ><span class="oi oi-people" onclick="ejecuta_ajax('estudiantes.php','coduf=<?php echo $data['CodUF']; ?>','contenidos')" > Estudiantes</a>
  </li>
    <li class="nav-item">
  <a class="nav-link" id="diagnosticos-tab" data-toggle="tab" href="#diagnosticos" role="tab" aria-controls="diagnosticos" aria-selected="false" ><span class="oi oi-spreadsheet" > Diagnósticos/Estadísticas</a>
  </li>
  </ul>                                     
                                    


                                    </div>
                                    </div>
                                    <div class="row">
                                      <div id="contenidos">
                                      
                                     </div>
                                    </div>
                                    <?php
 }
}
?>
                                   

                                
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
    Contáctanos<br>
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
<script src="js/funciones.js"></script>
</html>
  <?php
  } else {
    header("Location: ../index.php");
  }
 
 ?>
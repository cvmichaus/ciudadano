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
                                  <div class="col-6">
                                
                                  <form class="example form-inline" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

                                  </div>
                                  <div class="col-6">
                                  <a href="FormUF.php" class="btn btn-danger btn-sm" style="background-color: #a31d24">Crear una nueva Unidad de Formacion</a>
                                  </div>
                                </div>
<br><br>
  <div class="row">
     <?php
    
        $ConsultaPrincipal = "SELECT CodUF,Titulo FROM  euf WHERE `CodMaestro` =  ".$iduser." ";
     if($ResQry = $mysqli->query($ConsultaPrincipal)) {
                                while($data = mysqli_fetch_assoc($ResQry)){ 
                                $CodUFxD = $data['CodUF'];     
      ?>
          <div class="col-4">
          <div class="card">
          <div class="card-body">
          <h5 class="card-title"><?php echo $data['Titulo']; ?></h5>
          <p class="card-text">
         
          </p>
          <center><a href="detalles_UF.php?coduf=<?php echo base64_encode($CodUFxD);?>" class="btn btn-primary" style="background-color: #a31d24"> Ver </a></center>
          </div>
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
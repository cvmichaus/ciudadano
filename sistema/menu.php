  <link rel="stylesheet" href="EstiloSis.css">
<nav class="navbar navbar-expand-md navbar-ligth bg-ligth" id="menu_rec">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img class="logo horizontal-logo" src="../img/site_logo.png" style="height: 26px;width: 155px;" alt="forecastr logo" >
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav ">
       
  <!--
  <li class="nav-item">
    <a class="nav-link" href="#" id="menulink">Sobre este programa</a>
  </li>
-->
  <li class="nav-item" id="menuitem">
    <a class="nav-link" href="home.php" id="menulink">Unidades de formación</a>
  </li>
  <li class="nav-item" id="menuitem">
    <a class="nav-link" href="quienes_somos.php" id="menulink">Quienes somos</a>
  </li>
              <?php
if($tipo_usuario == 0  OR $tipo_usuario == 1 ) {
  ?>
  <li class="nav-item" id="menuitem">
    <a class="nav-link" href="Foro.php" id="menulink">Foro</a>
  </li>
<?php
}
?>
<?php
if($tipo_usuario == 0){
  ?>
<!--
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="menulink">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Administradores</a>
          <a class="dropdown-item" href="#">Docentes</a>
          <a class="dropdown-item" href="VerUsu.php?codUsu=<?php //echo $iduser; ?>">Perfil</a>
        </div>
      </li>
-->
  <li class="nav-item" id="menuitem">
    <a class="nav-link" href="administracion.php" id="menulink">Admin</a>
  </li>
  <?php
}
  ?>      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../img/Perfil.png" style="position: inherit; width: 40px;margin-right: 0%;margin-top: -12px; ">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3" style="border: 1px solid #A31D24;background-color: #FAFAFA;">
            <?php
if($tipo_usuario == 0  OR $tipo_usuario == 1 ) {
  ?>
            <a class="dropdown-item" style="color: #A31D24; font-family: Lato;  font-size: 14px;  font-weight: bold; letter-spacing: 0;  line-height: 17px;" href="VerUsu.php?codUsu=<?php echo $iduser; ?>">Mi perfil</a>
              <?php
}
  ?>  
            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
           
          </div>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
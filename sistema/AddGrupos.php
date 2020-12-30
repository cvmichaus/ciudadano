<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

      set_time_limit(0);
      require("../class/cnmysql.php");

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

			$user = $_SESSION['UsuarioNombre'];
			$iduser = $_SESSION['CodUsuario'];

			echo "aqui los datos ";
  } else {
    header("Location: ../index.php");
  }
 
?>
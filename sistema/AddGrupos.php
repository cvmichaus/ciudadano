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
			$creaciongrupo = $_POST["elegir"];
			$CodUF = $_POST["codUF"];
			$codns =$_POST["codigoNS"];
			$numero_estudiantes=$_POST["numero_estudiantes"];
			$numero_grupos=$_POST["numero_grupos"];
			
echo "CodUF: "; echo $CodUF ; echo "<br>";
echo "CodNS: "; echo $user ; echo "<br>";
echo "usuario: "; echo $codns ; echo "<br>";
echo "IDusuario: "; echo $iduser ; echo "<br>";
echo "Se crea el Grupo: "; echo $creaciongrupo ; echo "<br>";
if(isset($creaciongrupo)){
	if($creaciongrupo == "on"){
	  echo "yo creo los grups";
	}else{
	  echo "el sistema lo crea";	
	}
}else{
	$elegir="sistema";
  echo $elegir; echo "<br>";
}
echo "# Grupos: "; echo $numero_grupos ; echo "<br>";
echo "# Estudiantes: "; echo $numero_estudiantes ; echo "<br>";


  } else {
    header("Location: ../index.php");
  }
 
?>
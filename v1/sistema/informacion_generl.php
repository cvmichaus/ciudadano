<div class="col-md-12" style="padding-top: 20px;
padding-right: 80px;
padding-bottom: 20px;
padding-left: 80px;
margin: 0 0 25px;">
<?php
session_start();
 

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

$COD_UF = $_GET['coduf'];

$ConsultaIG = "SELECT * FROM  euf WHERE `CodUF` =  ".$COD_UF." ";
  if($ResQryIG = $mysqli->query($ConsultaIG)) {
  while($datosig = mysqli_fetch_assoc($ResQryIG)){ 


?>
<br>
		<div class="row" >
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Proyección</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["Proyeccion"]; ?>
		</p>
		</div>
		</div>   


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Evaluación Diagnostica</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["EvaluacionD"]; ?>
		</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Finalidad</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["Finalidad"]; ?>
		</p>
		</div>
		</div>

		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Competencias, aprendizaje clave o propósitos de la enseñanza</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["Competencias"]; ?>
		</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Diseño de la situación didáctica</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["DisenioSD"]; ?>
		</p>
		</div>
		</div>     


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero de Secuencias didácticas</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			<?php echo $datosig["NSDidacticas"]; ?>
		</p>
		</div>
		</div>   


		 <div class="row">
                                  <div class="col-md-3">
                                                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3">
                                     
                                  </div>
                                   <div class="col-md-3" style="text-align: right;vertical-align: middle;">
                                      <a href="edituf.php" class="btn btn-danger btn-sm" style="color: #a31d24;background-color: #fff;"><span class="oi oi-pencil" ></span> Editar Informacion General</a>
                                  </div>
                                </div>                               
 
<?php
}
}

?>
 </div>
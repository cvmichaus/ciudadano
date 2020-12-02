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
 

  <div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >Proyección</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
			<?php echo nl2br($datosig["Proyeccion"]); ?>
		</p>
		</div>
		</div>   


		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >
		Evaluación Diagnostica</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
			<?php echo nl2br($datosig["EvaluacionD"]); ?>
		</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >
		Finalidad</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
			<?php echo nl2br($datosig["Finalidad"]); ?>
		</p>
		</div>
		</div>

		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >
		Competencias, aprendizaje clave o propósitos de la enseñanza</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
			<?php echo nl2br($datosig["Competencias"]); ?>
		</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >
		Diseño de la situación didáctica</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
			<?php echo nl2br($datosig["DisenioSD"]); ?>
		</p>
		</div>
		</div>     


		<div class="row">
		<div class="col-md-12">
		<p class="TitulosGenerlaes" >
		Numero de Secuencias didácticas</p>
		</div>
		</div>  


		<div class="row">
		<div class="col-md-12">
		<p class="TextoGenerlaes" >
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
                                   <div class="col-md-3" >
                                      <a href="edituf.php?coduf=<?php echo $COD_UF; ?>" style="color: #A31D24; font-family: Roboto;  font-size: 12px;letter-spacing: 0;  line-height: 14px;  text-align: center;" class="btn btn-light btn-sm " ><span class="oi oi-pencil" ></span> Editar información general</a>
                                  </div>
                                </div>                               
 
<?php
}
}

?>
 </div>
</div>
 
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
$CodNS = $_GET['ns'];
$tipo_usuario = $_SESSION['Perfil'];
       
?>
<br>
		


      <?php  
      $Condig = "SELECT * FROM  datosidentgrupo  WHERE `CodUF` =  ".$COD_UF." ";
      if($ResQryDig = $mysqli->query($Condig)) {

            $row_cnt = mysqli_num_rows($ResQryDig);

            if(empty($row_cnt)){
              ?>
<div class="row">
    <div class="col-md-12">
    <p style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;" ><a style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" href="formDatosIG.php?codUF=<?php echo base64_encode($COD_UF); ?>&codns=<?php echo $CodNS; ?>"> <i class="fas fa-pencil-alt fa-sm"></i></a> datos de identificación del grupo </p>
    </div>
    </div>
<?php
            }else{
               ?>
<div class="row">
    <div class="col-md-12">
    <p style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;" ><a style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" > <i class="fas fa-pencil-alt fa-sm"></i></a> Datos de Identificacion del grupo  </p>
    </div>
    </div>
<?php
            }

        while($datodig = mysqli_fetch_assoc($ResQryDig)){ 
        

?>

 

         <div class="row">
                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grado</p>

                <label class="form-control" id="grado" name="grado" aria-describedby="grado"   style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Grado"]; ?></label>
                </div>

                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Asignaturas</p>

                <label class="form-control" id="asignaturas" name="asignaturas" aria-describedby="asignaturas" style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Asignaturas"]; ?></label>
                                </div>


                </div>

                <div class="row">
                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grupo</p>

                <label class="form-control" id="grupo" name="grupo" aria-describedby="grupo"  style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Grupo"]; ?></label>
                                </div>

                <div class="col-md-3">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Alumnos</p>

               <label type="text" readonly class="form-control" name="numero_alumnos" id="numero_alumnos" aria-describedby="numero_alumnos" style="border: 0;background-color: #FFF;" ><?php echo $datodig["NumeroAlumnos"]; ?> </label>  

                </div>

                <div class="col-md-3">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Horas</p>

                 <label type="text" readonly style="border: 0;background-color: #FFF;" class="form-control" name="numero_horas" id="numero_horas" aria-describedby="numero_horas"><?php echo $datodig["NumeroHoras"]; ?></label>
                                         

                </div>


                </div>
     <?php     
      }
    }
  ?>
    
    
		<div class="row" style="width:100%">
		<div class="col-md-12" style="width:100%">
		<hr>
		</div>
		</div>  

		

		<div class="row" style="align-items: center;">
			<div class="col-md-12">
				<div id="accordion">
					<?php
               $nemero_secuencias = $_GET['ns'];
 				$i = 0;
					while ($i != $nemero_secuencias) {
 					$i++; 
					?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $i; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>" style="color: #666666;  font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;text-decoration: none;">
         <a style="text-decoration: none;color:#666666;" href="DelSecuencia.php?codUF=<?php echo $COD_UF; ?>&CodM=<?php echo $iduser; ?>" data-toggle="tooltip" data-placement="right" title="Eliminar"> <i class="fas fa-trash fa-sm"></i></a> 
         &nbsp;&nbsp;&nbsp;&nbsp; 
		 <a href="#"><i class="fas fa-download fa-sm"></i></a>
    &nbsp;&nbsp;&nbsp;&nbsp; 
     <a href="#"><i class="fas fa-eye fa-sm"></i></a>
    &nbsp;&nbsp;&nbsp;&nbsp; 
		 <?php echo $i; ?>.&nbsp; Secuencia didáctica <?php echo $i; ?>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $i; ?>" <?php if($i == 1){ echo 'class="collapse show"';}else{ echo 'class="collapse "';}?> aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
      <div class="card-body">
       <ul style="list-style: none;font-family: Roboto;">
        <li><a style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" href="formTema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" > <i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> 
        Tema y Subtema </li>

         <li><a  href="formProblema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> Problema significativo de contexto</li>

          <li><a href="formCompetencias.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> Competencias</li>

           <li><a href="formRecursos.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> Recursos</li>

            <li><a href="formDesarrollo.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> Desarrollo de las sesiones</li>

             <li><a href="formMatriz.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> Matriz de valoración</li>
              
       </ul>
      </div>
    </div>
  </div>
<?php
}
?>
</div>
           </div>

		</div>

     <div class="row" >
    
      <div class="col-md-2">
        <a href="addSecuencia.php?codUF=<?php echo $COD_UF; ?>&CodM=<?php echo $iduser; ?>" class="btn btn-outline-danger btn-sm" style="border-radius: 5px; background-color: #A31D24;color: #FFFFFF;  font-family: Roboto;
  font-size: 12px;  " >Agregar secuencia</a>

      </div>
        <div class="col-md-8">
       
      </div>
      
    </div>

 </div>

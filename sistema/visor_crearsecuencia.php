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
         <a style="text-decoration: none;color:#666666;" href="DelSecuencia.php?codUF=<?php echo $COD_UF; ?>&CodM=<?php echo $iduser; ?>" data-toggle="tooltip" data-placement="right" title="Eliminar Secuencia <?php echo $i; ?>"> <i class="fas fa-trash fa-sm"></i></a> 
         &nbsp;&nbsp;&nbsp;&nbsp; 
         <?php
          $QueryE = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$i." ";
      if($ResE = $mysqli->query($QueryE)) {
      
       $ExisteD = mysqli_num_rows($ResE);
       
        if(empty($ExisteD)){
         ?>
		 <a style="cursor: not-allowed;"><i class="fas fa-download fa-sm"></i></a>
     <?php
         }else{
          ?>
          <a href="descargar_secuencia.php?cods=<?php echo $i; ?>&codUF=<?php echo $COD_UF; ?>"><i class="fas fa-download fa-sm" data-toggle="tooltip" title="Descargar Secuencia <?php echo $i; ?>" ></i></a>
     
     <?php
         }
      }
     ?>
    &nbsp;&nbsp;&nbsp;&nbsp; 
    
     <?php
          $QueryV = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$i." ";
      if($ResV = $mysqli->query($QueryV)) {
      
       $ExisteV = mysqli_num_rows($ResV);
       
        if(empty($ExisteV)){
         ?>
     <a style="cursor: not-allowed;"><i class="fas fa-eye fa-sm" data-toggle="tooltip" title="Ver Secuencia <?php echo $i; ?>"></i></a>
     <?php
         }else{
          ?>
          <a href="ver_secuencia.php?cods=<?php echo $i; ?>&codUF=<?php echo $COD_UF; ?>"><i class="fas fa-eye fa-sm" data-toggle="tooltip" title="Ver Secuencia <?php echo $i; ?>"></i></a></a>
     
     <?php
         }
      }
     ?>
    &nbsp;&nbsp;&nbsp;&nbsp; 
		 <?php echo $i; ?>.&nbsp; Secuencia didáctica <?php echo $i; ?>
        </button>
      </h5>
    </div>
<style>
.tooltip-inner {
    max-width: 463px;
    /* If max-width does not work, try using width instead */
    width: 463; 
    color: #FFFFFF;
  font-family: Lato;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 15px;
    text-align: justify;
    vertical-align: middle;
    white-space: pre-wrap;
}
</style>

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
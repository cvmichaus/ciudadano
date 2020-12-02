<div class="col-md-12" style="padding-top: 20px;
padding-right: 30px;
padding-bottom: 20px;
padding-left: 30px;
">
<?php
session_start();
 

      set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $iduser = $_SESSION['CodUsuario'];

$COD_UF = $_GET['coduf'];
$nemero_secuencias = $_GET['ns'];

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
    <p style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;" ><a style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" href="formDatosIG.php?codUF=<?php echo base64_encode($COD_UF); ?>"><span class="oi oi-pencil" ></span></a> datos de identificación del grupo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
    </div>
    </div>
<?php
            }else{
               ?>
<div class="row">
    <div class="col-md-12">
    <p style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;" ><a style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span class="oi oi-pencil" ></span></a> Datos de Identificacion del grupo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </p>
    </div>
    </div>
<?php
            }

        while($datodig = mysqli_fetch_assoc($ResQryDig)){ 
        

?>

 

         <div class="row">
                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grado</p>

                <textarea class="form-control" id="grado" name="grado" aria-describedby="grado" placeholder="Escriba Aqui"  style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Grado"]; ?></textarea>
                </div>

                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Asignaturas</p>

                <textarea class="form-control" id="asignaturas" name="asignaturas" aria-describedby="asignaturas" placeholder="Escriba Aqui" style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Asignaturas"]; ?></textarea>
                                </div>


                </div>

                <div class="row">
                <div class="col-md-6">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Grupo</p>

                <textarea class="form-control" id="grupo" name="grupo" aria-describedby="grupo" placeholder="Escriba Aqui" style="border: 0;background-color: #FFF;" readonly><?php echo $datodig["Grupo"]; ?></textarea>
                                </div>

                <div class="col-md-3">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Alumnos</p>

               <input type="text" readonly class="form-control" name="numero_alumnos" id="numero_alumnos" aria-describedby="numero_alumnos" style="border: 0;background-color: #FFF;" placeholder="Numero Alumnos" value="<?php echo $datodig["NumeroAlumnos"]; ?>">   

                </div>

                <div class="col-md-3">
                <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Numero Horas</p>

                 <input type="text" readonly style="border: 0;background-color: #FFF;" class="form-control" name="numero_horas" id="numero_horas" aria-describedby="numero_horas" placeholder="numero_horas" value="<?php echo $datodig["NumeroHoras"]; ?>">
                                         

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

		

		<div class="row">
			<div class="col-md-12">
				<div id="accordion">
					<?php
                $nemero_secuencias;
 				$i = 0;
					while ($i != $nemero_secuencias) {
 					$i++; 
					?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $i; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>" style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;">
         <span class="oi oi-trash" ></span> 
		<span class="oi oi-data-transfer-download" ></span>
		 Secuencia didáctica  #<?php echo $i; ?>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $i; ?>" <?php if($i == 1){ echo 'class="collapse show"';}else{ echo 'class="collapse "';}?> aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
      <div class="card-body">
       <ul style="list-style: none;font-family: Roboto;">
        <li><a style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" href="formTema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil" ></span></a> Tema y Subtema </li>

         <li><a  href="formProblema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil" ></span></a> Problema significativo de contexto</li>

          <li><a href="formCompetencias.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil"  ></span></a> Competencias</li>

           <li><a href="formRecursos.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil"  ></span></a> Recursos</li>

            <li><a href="formDesarrollo.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil"  ></span></a> Desarrollo de las sesiones</li>

             <li><a href="formMatriz.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $i; ?>" style="font-family: Roboto;cursor:pointer;font-size: 18px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" ><span data-toggle="tooltip" data-placement="top" title="Editar" class="oi oi-pencil"  ></span></a> Matriz de valoración</li>
              
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
 </div>
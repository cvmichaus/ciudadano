<div class="col-md-12" style="padding-top: 20px;padding-right: 80px;padding-bottom: 20px;padding-left: 80px;margin: 0 0 25px;">
<?php
session_start();
       set_time_limit(0);

      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

      $user = $_SESSION['UsuarioNombre'];
      $idusuario = $_GET['iduser'];

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
    <p style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;" ><a style="font-family: Roboto;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;" href="formDatosIG.php?codUF=<?php echo base64_encode($COD_UF); ?>&codns=<?php echo $CodNS; ?>&idusuario=<?php echo $idusuario; ?>"> <i class="fas fa-pencil-alt fa-sm"></i></a> datos de identificación del grupo </p>
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

	<!-- SECUENCIAS DIDACTICAS -->
<!-- SECUENCIAS DIDACTICAS -->
     <div clas="row">
      <div class="col-12" style="width: 100%">
          <?php
                $D2 = $mysqli->query("SELECT * FROM  secuencias_didacticas WHERE codMaestro = ".$idusuario." AND codUF = ".$COD_UF." ");
                      $row_cnt2 = $D2->num_rows;
                       
                       if ($row_cnt2 == 0){
                          echo "aun no hay secuencias didacticas o no eres el propietario de esata Unidad de Formacion por lo tanto  no puedes ver las secuencias didacticas";
                       }else{
                           //echo $row_cnt2;
                                while($datoSec = mysqli_fetch_assoc($D2)){ 
                                  ?>
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="heading<?php echo $datoSec["NumSD"]; ?>" >
      <h5 class="mb-0">
         <a style="text-decoration: none;color:#666666;" href="DelSecuencia.php?codUF=<?php echo $COD_UF; ?>&CodM=<?php echo $idusuario; ?>&codSD=<?php echo $datoSec["codSD"]; ?>" data-toggle="tooltip" data-placement="right" title="Eliminar Secuencia <?php echo $datoSec["NumSD"]; ?>"> <i class="fas fa-trash fa-sm"></i></a> 
          &nbsp;&nbsp;&nbsp;&nbsp; 
        <?php
        $QueryE = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["NumSD"]." ";
        if($ResE = $mysqli->query($QueryE)) {

        $ExisteD = mysqli_num_rows($ResE);

        if(empty($ExisteD)){
        ?>
        <a style="cursor: not-allowed;"><i class="fas fa-download fa-sm"></i></a>
        <?php
        }else{
        ?>
        <a href="descargar_secuencia.php?cods=<?php echo $datoSec["NumSD"]; ?>&codUF=<?php echo $COD_UF; ?>"><i class="fas fa-download fa-sm" data-toggle="tooltip" title="Descargar Secuencia <?php echo $datoSec["NumSD"]; ?>" ></i></a>

        <?php
        }
        }
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp; 

        <?php
        $QueryV = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["NumSD"]." ";
        if($ResV = $mysqli->query($QueryV)) {

        $ExisteV = mysqli_num_rows($ResV);

        if(empty($ExisteV)){
        ?>
        <a style="cursor: not-allowed;"><i class="fas fa-eye fa-sm" data-toggle="tooltip" title="Ver Secuencia <?php echo $datoSec["NumSD"]; ?>"></i></a>
        <?php
        }else{
        ?>
        <a href="ver_secuencia.php?cods=<?php echo $datoSec["NumSD"]; ?>&codUF=<?php echo $COD_UF; ?>"><i class="fas fa-eye fa-sm" data-toggle="tooltip" title="Ver Secuencia <?php echo $datoSec["NumSD"]; ?>"></i></a></a>

        <?php
        }
        }
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp; 

        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $datoSec["NumSD"]; ?>" aria-expanded="true" aria-controls="collapse<?php echo $datoSec["NumSD"]; ?>">
          <label style="color: #666666;font-family: Roboto; font-size: 16px;letter-spacing: 0;line-height: 19px;"><span style="font-family: Roboto;cursor:pointer;font-size: 16px;color:#a31d24;text-transform: uppercase;font-weight: bolder;text-decoration: none;"><?php echo $datoSec["NumSD"]; ?> .</span> <?php echo $datoSec["Nombre"]; ?> </label>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $datoSec["NumSD"]; ?>" <?php if($datoSec["NumSD"] == 1){ echo 'class="collapse show"';}else{ echo 'class="collapse "';}?> aria-labelledby="heading<?php echo $datoSec["NumSD"]; ?>" data-parent="#accordion">
      <div class="card-body">
      
      <ul style="list-style: none;font-family: Roboto;">


        <li><a style=" height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" href="formTema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" > <i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> 
        <span <?php
        $QueryTema = "SELECT * FROM  tema  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["codSD"]." ";
      if($ResTema = $mysqli->query($QueryTema)) {

      
       $ExisteTema = mysqli_num_rows($ResTema);
        if(empty($ExisteTema)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Tema y Subtema</span> </li>

         <li><a  href="formProblema.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" style="height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> 
         <span <?php
        $QueryProblematica = "SELECT * FROM  problema_sig_contexto  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["codSD"]." ";
      if($ResProblematica = $mysqli->query($QueryProblematica)) {

      
       $ExisteProblematica = mysqli_num_rows($ResProblematica);
        if(empty($ExisteProblematica)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Problema significativo de contexto</span></li>

          <li><a href="formCompetencias.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" style="height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> 
           <span <?php
        $QueryCompetencias = "SELECT * FROM  problema_sig_contexto  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["codSD"]." ";
      if($ResCompetencias = $mysqli->query($QueryCompetencias)) {

      
       $ExisteCompetencias = mysqli_num_rows($ResCompetencias);
        if(empty($ExisteCompetencias)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Competencias</span></li>

           <li><a href="formRecursos.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" style="height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> <span <?php
        $QueryRecursos = "SELECT * FROM  recursos  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["codSD"]." ";
      if($ResRecursos = $mysqli->query($QueryRecursos)) {

      
       $ExisteRecursos = mysqli_num_rows($ResRecursos);
        if(empty($ExisteRecursos)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Recursos</span></li>

            <li><a href="formDesarrollo.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" style="height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a>  <span <?php
        $QueryDesarrollos = "SELECT * FROM  desarrollo_sesiones  WHERE `CodUF` =  ".$COD_UF." AND NumDS = ".$datoSec["codSD"]." ";
      if($ResDesarrollos = $mysqli->query($QueryDesarrollos)) {

      
       $ExisteDesarrollos = mysqli_num_rows($ResDesarrollos);
        if(empty($ExisteDesarrollos)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Desarrollo de las sesiones</span></li>

             <li><a href="formMatriz.php?codUF=<?php echo base64_encode($COD_UF); ?>&codSD=<?php echo $datoSec["codSD"]; ?>&idusuario=<?php echo $idusuario; ?>" style="height: 14px; width: 89px; color: #666666; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;text-decoration: none;" ><i class="fas fa-pencil-alt fa-sm" data-toggle="tooltip" data-placement="top" title="Editar"></i> </a> <span <?php
        $Querymatriz = "SELECT * FROM  matriz  WHERE `CodUF` =  ".$COD_UF." AND NumSD = ".$datoSec["codSD"]." ";
      if($Resmatriz = $mysqli->query($Querymatriz)) {

      
       $Existematriz = mysqli_num_rows($Resmatriz);
        if(empty($Existematriz)){
           echo 'style="font-family: Roboto; font-size: 12px;text-decoration: none;"';
        }else{
          echo 'style="font-family: Roboto; font-size: 12px;color:#A31D24"';
        }
     }
     ?>
        >Matriz de valoración</span></li>
              
       </ul>

      </div>
    </div>
  </div>


</div>
                                  <?php  
                                }
                       }
                        ?>
      </div>
    </div>

     <div class="row" >
    
      <div class="col-md-2">
        <br><br>
        <a href="addSecuencia.php?codUF=<?php echo $COD_UF; ?>&CodM=<?php echo $idusuario; ?>" class="btn btn-outline-danger btn-sm" style="border-radius: 5px; background-color: #A31D24;color: #FFFFFF;  font-family: Roboto;
  font-size: 12px;  " >Agregar secuencia</a>

      </div>
        <div class="col-md-8">
      </div>
    </div>
 </div>
 

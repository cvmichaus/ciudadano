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
    $chkPHP = $_GET["chkphp"];
    $COD_UF = $_GET["coduf"];

	if($chkPHP == "false"){
			?>

	    <from>
    <div class="row">
      <?php
      $D4 = $mysqli->query("SELECT * FROM  estudiantes WHERE CodUF =".$COD_UF."  ");
                      $row_cnt4 = $D4->num_rows;
                        
      ?>
        <div class="col-4" style="text-align: center;">
                  <label style="color: #A31D24;font-family: Roboto; font-size: 12px; font-weight: bold; letter-spacing: 0;  line-height: 16px; text-align: center;">
                  ¿De cuántos estudiantes se conformarán tus equipos?
                  </label>
                  <br>
                  <div class="number-input">
                  <a style="cursor: pointer;" onclick="this.parentNode.querySelector('input[type=number]').stepDown();verificar();" ><i class="fa fa-minus fa-2x" aria-hidden="true"></i></a>
                  <input id="numero_estudiantes" name="numero_estudiantes" onchange="verificar();" class="quantity" min="0" max="<?php echo $row_cnt4; ?>" name="quantity" value="<?php echo $row_cnt4; ?>" type="number">
                  <a style="cursor: pointer;" onclick="this.parentNode.querySelector('input[type=number]').stepUp();verificar();" class="plus"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                  </div>
        </div>
         <div class="col-4">
          
        </div>
         <div class="col-4">
                  <label style="color: #A31D24;font-family: Roboto; font-size: 12px; font-weight: bold; letter-spacing: 0;  line-height: 16px; text-align: center;">
                  Número total de equipos: 
                  </label>
                  <br><br>
                  <div class="number-input">
                  <a style="cursor: pointer;" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></a>
                  <input id="numero_grupos" name="numero_grupos" class="quantity" min="0" name="quantity" value="1" disabled="disabled" type="number">
                  <a style="cursor: pointer;" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></a>
                  </div>
          
        </div>
    </div>
     <div class="row">
       <div class="col-4">
          
        </div>
         <div class="col-4">
     <input type="hidden" name="numrealestudiantes" id="numrealestudiantes" value="<?php echo $row_cnt4; ?>">       
  <input type="hidden" name="codUF" id="codUF" value="<?php echo $_GET["coduf"]; ?>">
   <input type="hidden" name="codigoNS" id="codigoNS" value="<?php echo $_GET["ns"]; ?>">
  <button  class="btn btn-danger" id="btnCrearEquipos" name="btnCrearEquipos" disabled="disabled" style="font-family: Roboto;font-size: 12px;color:#fff;height: 40px;
  width: 160px;" > Crear equipos </button> 
        </div>
         <div class="col-4">
          
        </div>
     </div>
  </div>
</from>				

			<?php
	}else{
		?>
			<div class="row">
				<div class="col-12" style="text-align: center;vertical-align: middle;padding-top: 20px;">
				  <label style="  color: #A31D24; font-family: Roboto; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 16px;  text-align: center;">Equipo:</label> 	
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align: center;vertical-align: middle;padding-top: 15.82px;">
				  <label style="color: #000000; font-family: Lato; font-size: 15.6px;  letter-spacing: 0;  line-height: 18px;"> 1 </label> 	
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align: center;vertical-align: middle;padding-top: 15.82px;">
				  <form name="formulariob" id="formulariob">
				  	 <input type="hidden" name="cod_UF" id="cod_UF" value="<?php echo $_GET["coduf"]; ?>">
				  	<input type="serch" name="q" id="q" onkeyup="busqueda();" style=" border-radius: 5px;box-sizing: border-box;height: 24px; width: 456px; border: 1px solid #B3B3B3;background-color: #FFFFFF;">
				  <span style="  color: #A31D24; font-family: Lato; font-size: 12px; letter-spacing: 0;  line-height: 15px;"><i class="fas fa-plus fa-sm"></i> Agregar integrante</span>
				  <div id="capa">
				  	<input  style="border-style: none;background-color: #F0F0F0;box-sizing: border-box;height: 24px; width: 456px; " type="text" name="vcapa" id="vcapa">
				  </div>
				   </form>
		
				</style>	
				</div>
			</div>
		<?php
	}	

  } else {
    header("Location: ../index.php");
  }
 
?>
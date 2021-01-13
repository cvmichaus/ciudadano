<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script type="text/javascript" language="javascript" src="datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="datatables/buttons.print.min.js"></script>

<link rel="stylesheet" type="text/css" href="datatables/query.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="datatables/buttons.dataTables.min.css">

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


?>



<br>
		<div class="row" >
		<div class="col-md-12">
		<p style="  color: #666666; font-family: Roboto;  font-size: 14px;  font-weight: bold;  letter-spacing: 0;
  line-height: 16px;" >
      <span style="color:#A31D24;">1.</span> Registro de estudiantes
</p>
		</div>
		<div class="col-md-12">
		<p style="color: #000000; font-family: Roboto; font-size: 12px;  letter-spacing: 0;  line-height: 14px;" >
			Estos estudiantes serán los que conformen tu Unidad de Formación y serán las personas a las que les llegen las actividades a desarrollar de las secuencias didácticas que hayas definido. 
		</p>
		<p style="color: #000000; font-family: Roboto; font-size: 12px;  letter-spacing: 0;  line-height: 14px;">
		 Puedes hacer el registro estudiante por estudiente o en una carga masiva.
		</p>
		</div>
		</div>  

		<div class="row" >
		<div class="col-md-12">
		<p style="color: #666666; font-family: Roboto;  font-size: 14px;  font-weight: bold;  letter-spacing: 0;
  line-height: 16px;" >Lista de estudiantes que conforman esta unidad de formación</p>
		</div>
		</div>  


		<div class="row" >
		<div class="col-md-12">
		<p >
			
		</p>
		</div>
		</div>  


		<div class="row" >
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >
			<table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align: center;vertical-align: middle;">
                <th>ID</th>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Correo</th>
                <th>Grupo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          <?php
$ConsultaPrincipal = "SELECT * FROM estudiantes Where CodUF = '".$COD_UF."' ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
  while($data = mysqli_fetch_assoc($ResQry)){ 
          ?>
            <tr style="text-align: center;vertical-align: middle;">
                <td><?php echo $data["CodEstudiante"];?></td>
                <td><?php echo $data["Nombre"];?></td>
                <td><?php echo $data["Grado"];?></td>
                <td><?php echo $data["Correo"];?></td>
                <td><?php echo $data["Grupo"];?></td>
                <td>
                <a href="EditarAlumno.php?codE=<?php echo $data["CodEstudiante"];?>"><i class="fas fa-edit fa-lg"></i></a>
                </td>
                <td> 
                <a href="EliminarAlumno.php?codE=<?php echo $data["CodEstudiante"];?>"><i class="fas fa-trash fa-lg"></i></a>
                </td>
            </tr>
             <?php
}
}
          ?>
        </tbody>
    </table>
		</p>
		</div>
		</div>  

      <div class="row" >
    <div class="col-md-9">
    <p >
      
    </p>
    </div>
    <div class="col-md-3" style="text-align: left;">
    <p >
  <form method="post" action="FormEstudiante.php" id="from1">
  
<input type="hidden" name="codUF" id="codUF" value="<?php echo $_GET["coduf"]; ?>">
   <input type="hidden" name="codigoNS" id="codigoNS" value="<?php echo $_GET["ns"]; ?>">
  <button  class="btn btn-danger" id="btnNuevousu" style="font-family: Roboto;font-size: 12px;color:#fff;" > <i class="fas fa-plus fa-sm"></i> Agregar estudiante </button> 
  </form> 

    </p>
    </div>
    </div>  

 
  <div class="row" >
    <div class="col-2">
    </div>
    <div class="col-8">
    <div style="height: 169px;width:642px;align-items: center;background-color: #F0F0F0;border-radius: 10px;">
      <div class="row">
        <div class="col-8">
            <label style="color: #4D4D4D;font-family: Roboto;font-size: 12px;letter-spacing: 0;line-height: 14px;text-align: justify;padding-left: 20px;padding-top: 20px;">
        Para registrar estudiantes de forma masiva, descarga el archivo en formato excel (.XSL) y llena las columnas con los datos requeridos.<br>

      </label>
        </div>
        <div class="col-4" style="text-align: right;padding-top: 20px;">
      <a  class="btn btn-danger" id="btnNuevousu" style="height: 40px;width: 100px; color: #1F1D21; font-family: Roboto; font-size: 8px; font-weight: bold; letter-spacing: 0;line-height: 9px;text-align: center;background-color: #F0F0F0;" > <i class="fas fa-download fa-sm"></i> Archivo para descargar </a> 
        </div>
      </div>

<div class="row">
<div class="col-12">
  <br>
</div>  
</div>
       <div class="row">
        <div class="col-10" style="padding-left: 40px;">
          <form class="md-form">
            
            <div class="input-group mb-3">
  <div class="custom-file" >
    <input  type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01"> </label>
  </div>
  <button type="submit" class="btn btn-danger">
    <i class="fas fa-plus fa-sm"></i> Cargar archivo</button>
   </form>
</div>
    
      </div>


    </div>

    
    </div>
     <div class="col-2">
    </div>
    </div>  

   

 </div>


  <div class="row" >
    <div class="col-md-12">
      <hr>
    </div>
    </div>                               
 

  <div class="row" >
    <div class="col-md-12">
    <p style=" color: #666666; font-family: Roboto;  font-size: 14px;  font-weight: bold;  letter-spacing: 0;
  line-height: 16px;" >
      <span style="color:#A31D24;">2.</span> Creación de grupos</p>
    </div>
    <div class="col-md-12">
    <p style="color: #000000; font-family: Roboto; font-size: 12px;  letter-spacing: 0;  line-height: 14px;" >
     Los criterios de evlauación para la creación de diagnósticos son grupales, no individuales, por lo que tendrás que conformar grupos entre tus estudiantes. Puedes hacer tu mismo o dejar al sistema que cree estos grupos de manera aleatoria.
    </p>
  
    </div>
    </div> 

<style>
input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}

.number-input {
  border: 2px solid #ddd;
  display: inline-flex;
}

.number-input,
.number-input * {
  box-sizing: border-box;
}

.number-input button {
  outline:none;
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  cursor: pointer;
  margin: 0;
  position: relative;
}

.number-input button:before,
.number-input button:after {
  display: inline-block;
  position: absolute;
  content: '';
  width: 1rem;
  height: 2px;
  background-color: #212121;
  transform: translate(-50%, -50%);
}
.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
  font-family: sans-serif;
  max-width: 5rem;
  padding: .5rem;
  border: solid #ddd;
  border-width: 0 2px;
  font-size: 1rem;
  height: 2rem;
  font-weight: bold;
  text-align: center;
}

.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 23px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #A31D24;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
   
    
<div style=" display: flex; justify-content: center; align-items: center;">
<div style="text-align: justify;padding-right: 20px;padding-top: 20px;padding-bottom: 20px;height: 365px; width:692px; border-radius: 10px; background-color: #F0F0F0;">
  
  <div class="row" style="text-align: justify;padding-left: 110px;">
    <div class="col-12">
<span style="color: #666666; font-family: Roboto; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 16px;padding-right: 5px;">Deseo que el sistema cree los equipos</span>
        <label class="switch">
          <!--
  <input type="checkbox" name="chk" id="chk" onChange="ejecuta_ajax('equipos.php','chkphp='+chk.checked+'','grupos')">
          -->
  <input type="checkbox" name="chk" id="chk" onChange="ejecuta_ajax('equipos.php','chkphp='+chk.checked+'&coduf='+codUF.value+'','grupos')">
  <span class="slider round"></span>
</label>
   <span style="color: #666666; font-family: Roboto; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 16px;padding-left: 5px;">Deseo hacerlo yo</span>
    </div>
</div>

<div class="row" style="text-align: justify;padding-left: 20px;">
 <div class="col-12">
   <div id="grupos"> 
   
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
    <form action="CrearGrupo.php" method="POST">
          <input type="hidden" name="numero_grupos_php" id="numero_grupos_php" > 
          <input type="hidden" name="numero_estudiantes_php" id="numero_estudiantes_php" >    
          <input type="hidden" name="numrealestudiantes" id="numrealestudiantes" value="<?php echo $row_cnt4; ?>">       
          <input type="hidden" name="codUF" id="codUF" value="<?php echo $_GET["coduf"]; ?>">
          <input type="hidden" name="codigoNS" id="codigoNS" value="<?php echo $_GET["ns"]; ?>">
          <button type="submit"  class="btn btn-danger" id="btnCrearEquipos" name="btnCrearEquipos" style="visibility: hidden;font-family: Roboto;font-size: 12px;color:#fff;height: 40px;
          width: 160px;" > Crear equipos </button> 
  </form>
        </div>
         <div class="col-4">
          
        </div>
     </div>
  </div>

 </div>  
</div>
 
</div>
</div>


 



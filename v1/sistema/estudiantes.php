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


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script  src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<br>
		<div class="row" >
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >1. Registro de estudiantes</p>
		</div>
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;" >
			Estos estudiantes seran los que conformen tu Unidad de Formacion y seran las personas a las que les lleguen las actividades  a desarrollar  de las secuencias didacticas que hayas definido.
		</p>
		<p style="font-family: Roboto;font-size: 12px;color:#000;">
		 Puedes hacer el registro estudante por estudiante o en una carga masiva.
		</p>
		</div>
		</div>  

		<div class="row" >
		<div class="col-md-12">
		<p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >Lista de estudiantes que conforman esta unidad de formacion.</p>
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
			<table id="example"  class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Grado</th>
            <th>Correo electronico</th>
            <th>Grupo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
         <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                	<span class="oi oi-pencil"></span> 
                <td>
                	<span class="oi oi-trash"></span>
                </td>
            </tr>
      
    </tbody>
</table>
		</p>
		</div>
		</div>  

                              
 

 </div>
 <script>
 	$(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
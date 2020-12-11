 
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
      $ns =  $_GET['ns'];
      $COD_UF = $_GET['coduf'];


?>


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script  src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<br>
        <div class="row" >
       
        <div class="col-md-12">
        <p style="color: #000000; font-family: Roboto; font-size: 12px;  letter-spacing: 0;  line-height: 14px;" >
            Revisa, descarga y selecciona las actividades (secuencisa didácticas) para que los estudiantes las realicen. Posterior, da clic al botón Enviar actividades para que sean recibidas por tus estudiantes para su realización.
        </p>
        </div>

        <div class="col-md-12">
       
        <p style="
  color: #FF0505;
  font-family: Lato;
  font-size: 12px;
  letter-spacing: 0.75px;
  line-height: 15px;">
        
        </p>
        </div>
        </div>  

        <div class="row" >
        <div class="col-md-12">

<table class="table">
  <tbody>
    <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 1. Reconocimiento inicial de la problemática</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;">2. Preparando el diagnóstico</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 3. Situación deseable, definición de horizonte</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 4. Población afectada</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 5. Cuestionando el entorno</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 6. Análisis y síntesis de la información </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 7. Identificación del marco normativo </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 8. Acción pública y entidad de control</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 9. Gobierno y actores involucrados </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 10. Foda y situación posible </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 11. Propuesta de solución </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;">12. Comunicación para la incidencia </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>
      <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 13. Recursos Jurídicos</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 14. Estrategia</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;">15. El proyecto</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 16. Interlocución y negociación </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 17. Preparando la negociación</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 18. Desarrollo de la negociación </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 19. Post-negociación</td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

     <tr>
      <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
      <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"> 20. Auto evaluación y aprendizaje significativo </td>
      <td></td>
      <td> <i class="fas fa-share-alt fa-sm"></i> 
           <i class="fas fa-eye fa-sm"></i> 
            <i class="fas fa-download fa-sm"></i> </td>
    </tr>

    <?php
$QueryTema = "SELECT * FROM  recursos_didacticos  WHERE `CodUF` =  ".$COD_UF." AND CodUsu = ".$iduser." ";
      if($ResTema = $mysqli->query($QueryTema)) {
      
       $ExisteTema = mysqli_num_rows($ResTema);
       
        if(empty($ExisteTema)){
      
           }else{

           while($datos = mysqli_fetch_assoc($ResTema)){ 
              ?>
                 <tr>
        <th scope="row"> <input type="checkbox" aria-label="Checkbox for following text input"></th>
        <td style="color: #A31D24;font-family: Lato; font-size: 14px; font-weight: bold; letter-spacing: 0; line-height: 17px;"><?php echo $r = 20 +$datos["cod_recdid"]; ?>.- <?php echo $datos["Nombre"]; ?></td>
        <td></td>
        <td> <i class="fas fa-share-alt fa-sm"></i> 
    <a style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter<?php echo $datos["cod_recdid"]; ?>" ><i class="fas fa-eye fa-sm"></i></a> 
     <a href="RecursosDidacticos/<?php echo $datos["Archivo"]; ?>" ><i class="fas fa-download fa-sm"></i></a> </td>
        </tr>

        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $datos["cod_recdid"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $datos["Nombre"]; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <embed src="RecursosDidacticos/<?php echo $datos["Archivo"]; ?>" frameborder="0" width="100%" height="500px">
      </div>
    
    </div>
  </div>
</div>

              <?php
            }
         }
      } 
        ?>
  </tbody>
</table>
   
          

        
          <div class="row" >
    
      <div class="col-md-2">
        <a  data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger btn-sm" style="height: 40px; width: 197px; border-radius: 5px; background-color: #A31D24;color: #FFF;" > <i class="fa fa-plus fa-sm" aria-hidden="true"></i> Agregar recursos</a>

      </div>

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-12">
            <p>
                Como docente, puedes subir tus propios recursos para que los estudiantes realicen actividades en función de tu objetivo.
            </p>
          </div>

            <div class="col-12">
            <p>
               <strong> ¿Cómo subir recursos?</strong>
                <br>
Si tienes diferentes documentos que correspondan a la misma actividad/secuencia, deberás unirlo para crear un único archivo y subir este al repertorio.
            </p>
          </div>

            <div class="col-12">
            <p style="color: #4D4D4D; font-family: Roboto; font-size: 12px; letter-spacing: 0; line-height: 14px;">
             <label style="font-weight: bolder;">Caraterísticas</label><br>
Formato: PDF<br>
Tamaño máx: 10 MB
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <form action="addRecursosDid.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
          <label for="exampleFormControlInput1" style=" height: 15px; width: 290px;color: #A31D24;
  font-family: Roboto; font-size: 12px; letter-spacing: 0;line-height: 14px;">  Nombre del recurso didáctico</label>
          <input type="text" require class="form-control" style="  box-sizing: border-box;  height: 31px;  width: 271px;  border: 1px solid #B3B3B3;  border-radius: 5px;" name="nom_recursos" id="nom_recursos" placeholder="Nombre del recurso didáctico">
            <input type="hidden" name="idusr" id="idusr" value="<?php echo $iduser; ?>">
            <input type="hidden" name="coduf" id="coduf" value="<?php echo $COD_UF; ?>">
            <input type="hidden" name="codSD" id="codSD" value="<?php echo $ns; ?>">
          </div>      


           <div class="form-group">
           <div class="custom-file">
    <input require type="file" id="archivo" name="archivo" accept=".pdf" style="height: 41px; width: 150px;" class="custom-file-input" id="validatedCustomFile" onchange="validar_peso();" required>
    <label class="custom-file-label" for="validatedCustomFile">Elegir archivo</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
<br><br><br>
<script>
function validar_peso(){

  var imgsize = document.getElementsById("archivo")[0].files[0].size;

if(imgsize > 10000){
  alert('El archivo supera los 10 MB.');
}
}
  </script>

  <button class="btn btn-danger" style="height: 35px; width: 174px; border-radius: 5px; background-color: #A31D24;" type="submit"><i class="fa fa-plus fa-sm" aria-hidden="true"></i>Agregar recurso</button>
          </div>      


</form> 
          </div>
        </div>
    

 


      </div>
     
    </div>
  </div>
</div>

        <div class="col-md-8">
       
      </div>

       <div class="col-md-2">
        <a href="#" class="btn btn-outline-light btn-sm" style="color: #808080; font-family: Roboto;
  font-size: 12px; letter-spacing: 0; line-height: 14px; text-align: center;"> Enviar Actividades</a>

      </div>
      
    </div> 

        </div>
        </div>  


        <div class="row" >
        <div class="col-md-12">
        <p >
            
        </p>
        </div>
        </div>  


        <div class="row" >
        <div class="col-md-12" style="width: 100%;">
        <p style="font-family: Roboto;font-size: 12px;color:#000;text-transform: uppercase;font-weight: bolder;" >
            
        </p>
        </div>
        </div>  

 
  <div class="row" >
    <div class="col-md-12">
    <p >
      
    </p>
    </div>
    </div>                               
 

 </div>
  
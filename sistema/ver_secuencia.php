<?php
set_time_limit(0);
      require("../class/cnmysql.php");
      date_default_timezone_set('America/Mexico_City');
      $fecha_del_dia=date('Y-m-d');//fecha actual

$cods = $_GET["cods"];
$codUF = $_GET["codUF"];
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once("dompdf/dompdf_config.inc.php");
$impresion="
<meta http-equiv='Content-Type' content='text/html; charset=utf8' 
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'>
<style>
table{
  font-family:Futura Bk BT;
  font-size:.8em;
}
</style>
<div style='Futura Bk BT;'>
<table width='100%' >
";

  $ConsultaPrincipal = "SELECT a.Titulo,a.Proyeccion,a.EvaluacionD,a.Finalidad,a.Competencias,a.DisenioSD,b.Grado,b.Grupo,b.Asignaturas,b.NumeroAlumnos,b.NumeroHoras FROM euf as a INNER JOIN datosidentgrupo as b ON b.CodUF = a.CodUF  WHERE a.CodUF =  ".$codUF."  ";
  if($ResQry = $mysqli->query($ConsultaPrincipal)) {
 $data = mysqli_fetch_assoc($ResQry);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;'>Unidad de Formación :</label> <td></tr> ";
$impresion.="<tr><td><label style='color: #A31D24;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;padding-bottom: 20px;'> ".$data["Titulo"]."</label></td></tr> ";
$impresion.="<tr><td><hr></td></tr>";
$impresion.="<tr><td><label style='color: #666666;font-family: Roboto; font-size: 16px; letter-spacing: 0; line-height: 19px;'>Secuencia Didactica :</label> <td></tr> ";
$impresion.="<tr><td><label style='color: #A31D24;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Secuencia Didactica # ".$cods."</label></td></tr> ";
$impresion.="<tr><td><label style=' color: #A31D24; font-family: Roboto;font-size: 16px; font-weight: bold;
  letter-spacing: 0; line-height: 19px;'>Datos de identificación del grupo:</label> <td></tr> ";
$impresion.="<tr><td>
     Grado <br> ".$data["Grado"]."
    </td>
    <td>    
     Grupo <br> ".$data["Grupo"]."
</td></tr>";
$impresion.="<tr><td>
     Asignatura(s) / proyectos: <br> ".$data["Asignaturas"]."
</td></tr>";

$impresion.="<tr><td>
     <label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Numero de alumnos </label> <br> ".$data["NumeroAlumnos"]."
    </td><td>
     <label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Numero de horas </label> <br> ".$data["NumeroHoras"]."
</td></tr>";

$impresion.="<tr><td><label style='color: #A31D24;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Secuencia Didactica # ".$cods."</label></td></tr> ";


$ConsultaTema = "SELECT * FROM Tema as t  WHERE t.CodUF =  ".$codUF." AND t.NumSD = ".$cods." ";
  if($ResQryTema = $mysqli->query($ConsultaTema)) {
 $dataTema = mysqli_fetch_assoc($ResQryTema);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Tema </label></td></tr> ";


$impresion.="<tr><td>
     ".nl2br($dataTema["Tema"])."
</td></tr>";


$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Subtema </label></td></tr> ";


$impresion.="<tr><td>
     ".nl2br($dataTema["Subtema"])."
</td></tr>";


$ConsultaP = "SELECT * FROM problema_sig_contexto as p  WHERE p.CodUF =  ".$codUF." AND p.NumSD = ".$cods." ";
  if($ResQryP = $mysqli->query($ConsultaP)) {
 $dataP = mysqli_fetch_assoc($ResQryP);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Problema significativo del contexto </label></td></tr> ";

$impresion.="<tr><td>
     ".nl2br($dataP["Problematica"])."
</td></tr>";


$ConsultaCom = "SELECT * FROM competencias as c  WHERE c.CodUF =  ".$codUF." AND c.NumSD = ".$cods." ";
  if($ResQryCom = $mysqli->query($ConsultaCom)) {
 $dataC = mysqli_fetch_assoc($ResQryCom);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Competencias </label></td></tr> ";

$impresion.="<tr><td><table width='100%' ><tr><td>
    <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Cognitivo</label></strong><br>
     ".nl2br($dataC["Cognitivo"])."
</td>
<td>
 <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Metacognitivo </label></strong><br>
   ".nl2br($dataC["Metacognitivo"])."
</td>
<td>
   <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Nocognitivo </label></strong><br>
    ".nl2br($dataC["Nocognitivo"])."
</td>
</tr></table></td></tr>";

$ConsultaRec = "SELECT * FROM recursos as r  WHERE r.CodUF =  ".$codUF." AND r.NumSD = ".$cods." ";
  if($ResQryRec = $mysqli->query($ConsultaRec)) {
 $dataR = mysqli_fetch_assoc($ResQryRec);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Recursos </label></td></tr> ";

$impresion.="<tr><td>
     ".nl2br($dataR["Recurso"])."
</td></tr>";

$ConsultaDesarrollo = "SELECT * FROM desarrollo_sesiones as z  WHERE z.CodUF =  ".$codUF." AND z.NumDS = ".$cods." ";
  if($ResQryDesarrollo = $mysqli->query($ConsultaDesarrollo)) {
 $dataDesarrollo = mysqli_fetch_assoc($ResQryDesarrollo);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Desarrollo de las sesiones </label></td></tr> ";

$impresion.="<tr><td><table width='100%' ><tr><td>
    <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Actividad docentes</label></strong><br>
     ".nl2br($dataDesarrollo["Actividad_docentes"])."
</td>
<td>
 <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Actividad estudiantes </label></strong><br>
   ".nl2br($dataDesarrollo["Actividad_estudiantes"])."
</td>
<td>
   <strong><label style='color: #666666;font-family: Roboto;font-size: 14px; font-weight: bold; letter-spacing: 0;line-height: 16px;'>Criterios y evidencias </label></strong><br>
    ".nl2br($dataDesarrollo["Criterios_evidencias"])."
</td>
</tr></table></td></tr>";

$ConsultaMatriz = "SELECT * FROM matriz as m WHERE m.CodUF =  ".$codUF." AND m.NumSD = ".$cods." ";
  if($ResQryMatriz = $mysqli->query($ConsultaMatriz)) {
 $dataMatriz = mysqli_fetch_assoc($ResQryMatriz);

$impresion.="<tr><td><label style='color: #666666;font-family: Roboto;font-size: 20px; letter-spacing: 0;line-height: 24px;'> Matriz </label></td></tr> ";

 $impresion.="
 <tr><td>
<table width='100%'>
       
          <tr>
          <th scope='col'>COMPONENTE</th>
          <th scope='col' style='color:#a31d24;text-transform: capitalize;'>Inicial receptiva</th>
          <th scope='col' style='color:#a31d24;text-transform: capitalize;'>Basica</th>
          <th scope='col' style='color:#a31d24;text-transform: capitalize;'>Autonoma</th>
          <th scope='col' style='color:#a31d24;text-transform: capitalize;'>Estrategica</th>
          </tr>
          
          <tr>
          <th scope='row'>COGNITIVO</th>
          <td><label style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["IRCognitivo"])."</label> </td>
          <td><label id='cognitivo_basica' name='cognitivo_basica' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["BCognitivo"])."</label> </td>
          <td><label  style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["ACognitivo"])."</label> </td>
          <td><label style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["ECognitivo"])."</label> </td>
          </tr>


         <tr>
          <th scope='row'>NO COGNITIVO</th>
          <td><label id='nocognitivo_inicial' name='nocognitivo_inicial' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["IRnoCognitivo"])."</label> </td>
          <td><label id='nocognitivo_basica' name='nocognitivo_basica' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["BnoCognitivo"])."</label> </td>
          <td><label id='nocognitivo_autonoma' name='nocognitivo_autonoma' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["AnoCognitivo"])."</label> </td>
          <td><label id='nocognitivo_estrategica' name='nocognitivo_estrategica' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["EnoCognitivo"])."</label> </td>
          </tr>

           <tr>
          <th scope='row'>MECOGNITIVO</th>
          <td><label id='metacognitivo_inicial' name='metacognitivo_inicial' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["IRmeCognitivo"])."</label> </td>
          <td><label id='metacognitivo_basica' name='metacognitivo_basica' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["BmeCognitivo"])."</label> </td>
          <td><label id='metacognitivo_autonoma' name='metacognitivo_autonoma' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["AmeCognitivo"])."</label> </td>
          <td><label id='metacognitivo_estrategica' name='metacognitivo_estrategica' style='border: 0;outline: none;border: 0;background-color: #ccc' readonly rows='6'>".nl2br($dataMatriz["EmeCognitivo"])."</label> </td>
          </tr>

          
          </table>
 </td></tr>
 ";


           }

        }

       }

     } 

   } 

 }

}

$impresion .= "<tr></table></div>";
$code = stripslashes($impresion);
//se crea una nueva instancia al DOMPDF
$dompdf = new DOMPDF();
//se carga el codigo html
$dompdf->load_html($code);
$dompdf->set_paper('letter', 'portrait');
//aumentamos memoria del servidor si es necesario
ini_set("memory_limit","100M"); 
//lanzamos a render
$dompdf->render();
//guardamos a PDF
$dompdf->output();
$dompdf->stream("Secuencia".$_GET['cods']."_UF".$_GET['codUF'].".pdf",array('Attachment'=>0));

?>
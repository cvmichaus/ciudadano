<?php
$cods = $_GET["cods"];
$codUF = $_GET["codUF"];
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once("dompdf/dompdf_config.inc.php");

$impresion .= "Esto es una prueba";
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
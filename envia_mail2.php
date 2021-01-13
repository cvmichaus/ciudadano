<?php
$correo ="michusvalentin@gmail.com";
$password='Igwv2020$';

ini_set('display_errors',1);
error_reporting(E_ALL);
$from ="recursos.humanos@wri.org";
$to ="michusvalentin@gmail.com";
$subject="Alta en el Sistema de Solicitud de CCIUDADANO";
$message='¡Bienvenido! Favor de corroborar tu cuenta ingresando en el siguiente enlace:  http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"   ';
$headers ="From" . $from;
mail($to,$subject,$message,$headers);
echo 'se ha enviado mail ';
?>
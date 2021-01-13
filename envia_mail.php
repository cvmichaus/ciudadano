<?php
require("class/cnmysql.php");

$traerDMail = "SELECT port,host,username,password FROM `mailing`WHERE codMail = 1 ";

						if($ResDmail = $mysqli->query($traerDMail)) {
						   $DatosMail = $ResDmail->fetch_array();
							$puerto =  $DatosMail["port"];
							$host =  $DatosMail["host"];
							$username =  $DatosMail["username"];
							$passmail =  $DatosMail["password"];



$correo="michusvalentin@gmail.com";
$nombre="Carlos";
$password="12345";

//PHPMAILER
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");


$mail3 = new PHPMailer\PHPMailer\PHPMailer();
$mail3->IsSMTP();

$mail3->CharSet="UTF-8";
$mail3->Host = "smtp.office365.com";
//$mail3->SMTPDebug = 2;
$mail3->Port = 587; //465 or 587

$mail3->SMTPSecure = 'tls';
$mail3->SMTPAuth = true;
$mail3->IsHTML(true);
//Authentication
//registrociudadano@urbanistica.mx
$mail3->Username = "recursos.humanos@wri.org";
$mail3->Password = "WRIm3x1c086!";
//Set Params
$mail3->SetFrom($username);
//$mail3->AddAddress($CorreoEmpleado2);
$mail3->AddAddress($correo);



$mail3->Subject = "Alta en el Sistema de Solicitud de CCIUDADANO";
$mail3->isHTML(true);
$mail3->Body = '
<html>
<head>
<title>Bienvenido Usuario '.$nombre.'  </title>				  
</head>
<body>
<br>
<div class="row">
<div class="col-4">				
</div>
<div class="col-4">
<center><img src="http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/img/site_logo.png"></center>
</div>
<div class="col-4">				
</div>
</div>
<br>
<div class="row">
<div class="col-4">				
</div>
<div class="col-4">
<center>
<br><br>
<h1 style="font-family: Roboto;font-weight: bolder;text-align: center; vertical-align: middle;color:#000;font-size: 14px;">¡Bienvenido!<br>
</h1>
</div>
</center>
<div class="col-4">
<center><p style="font-family: Roboto;font-size:14px;color: #000;letter-spacing: 0;line-height: 17px;">Favor de corroborar tu cuenta dando clic en el botón Ingresar</p></center>
</div>
</div>

<div class="row">
<div class="col-4">				
</div>
<div class="col-4">
<center>
<br><br><br>
<a  href="http://www.urbanistica.mx/areaproyectos/sistema/cciudadano/validar.php?correo='.$correo.'&pass='.$password.'"  style="text-decoration: none; padding: 10px;font-weight: 200;  font-size: 14px; color: #ffffff; background-color: #a31d24;border-radius: 6px; border: 2px solid #a31d24;">Ingresar</a>
</center>
</div>
<div class="col-4">

</div>
</div>
<br><br><br>
<div class="row" style="background-color: #000;color:#FFF;">
<div class="col-4">				
</div>
<div class="col-4">
<p style="text-align: center;vertical-align: middle;font-size:14px;color:#fff;">
Contactanos
<br><br>
<strong style="text-align: center;vertical-align: middle;font-size:14px;font-weight:bolder;color:#fff;text-decoration:none">www.cciudadano.org.mx</strong>
<br><br><br><br>
</p>
</div>
<div class="col-4">

</div>
</div>
</body>
</html>
';

$mail3->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));

if(!$mail3->Send()) {
echo "Mailer Error: " . $mail3->ErrorInfo;
} else {
//header("Location: index.php");  
echo "se mando mail";
} 


/*
//FUNCION MAIL PARA EL SERVER
 ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "recursos.humanos@wri.org";
        $to = "alejandro.lopez@wri.org";
        $subject = "Alta en el Sistema de Solicitud de Vacaciones WRI 2";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($correo,$subject,$message, $headers);
        echo "The email message was sent.";
 */   

}

?>


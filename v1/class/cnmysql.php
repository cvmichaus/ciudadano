<?php

/*
$mysqli = new mysqli("localhost", "urbanis6_ciuda", "2pQj}byoU()w", "urbanis6_cciudadano");
*/
$mysqli = new mysqli("localhost", "root", "", "cciudadano");
if($mysqli->connect_errno) {
	echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
return $mysqli;

?>

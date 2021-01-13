<?php
 require("../class/cnmysql.php");
 
$html = '';
$key = $_POST['nombre'];
$cod_UF = $_POST['uf'];
 
$result = $mysqli->query(
    'SELECT * FROM estudiantes as e INNER JOIN detalle_usuario as d ON e.CodUsuario = d.codUsuario
    WHERE e.CodUF = '.$cod_UF.' AND e.CodGrupo=0 
    AND  d.Nombres LIKE "%'.strip_tags($key).'%"
    ORDER BY d.Nombres ASC LIMIT 0,5'
);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {                
        echo utf8_encode($row['Nombres']);  echo " "; echo utf8_encode($row['Apellidos']);
    }
}
echo $html;
?>
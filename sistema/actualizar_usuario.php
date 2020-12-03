<?php
date_default_timezone_set('America/Mexico_City');
$fecha_actual=date('Y-m-d');//fecha actual
setlocale(LC_TIME,"es_ES");
$hora_actual= strftime("%H:%M:%S"); 

require("../class/cnmysql.php");
  
            $nombre = $_POST["nombre"]; 
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];  
            $cedula = $_POST["cedula"]; 
    
            
            $tipo_escuela = $_POST["tipo_escuela"]; 
            $nombre_secundaria = $_POST["nombre_secundaria"];
            $clave_secundaria = $_POST["clave_secundaria"]; 
            
            $archivo = $_FILES['foto']['name']; 

            $codUsuario = $_POST["codUsuario"];

            //IMAGEN DEL USUARIO    
                $target_dir = "fotos/";
                $target_file = $target_dir . basename($_FILES["foto"]["name"]);

                if(empty($archivo)){
                $archivo = "avatar.png";
                }else{
                    $info = new SplFileInfo($archivo);
                    $extension= $info->getExtension();

                    if($extension  == 'png' OR $extension  == 'jpg' OR $extension  == 'JPG' ){

                        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {

                            $cons = "UPDATE  `detalle_usuario` SET  `Nombres`= '".$nombre."',`Apellidos`= '".$apellidos."',`cedula`= '".$cedula."',`avatar`= '".$archivo."' WHERE `CodUsuario` = '".$codUsuario."' ";

                                if($res = $mysqli->query($cons)) {

                                    $cons2 = "UPDATE  `usuarios` SET  `correo`= '".$correo."'  WHERE `Codusuario` = '".$codUsuario."' ";

                                    if($res2 = $mysqli->query($cons2)) {

                                            echo "exito...";

                                              ?>
                                              <!--
<script type="text/javascript">
    window.location.href='VerUsu.php?codUsu=<?php //echo $codUsuario;?>';
    </script>
-->
    <?php


                                    }else{ echo "error2";}

                                  
                                }else{ echo "error 1";}

                    }
            }

        }

?>
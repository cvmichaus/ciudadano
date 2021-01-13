<?php
require("class/cnmysql.php");
	  $loginPassword = $_GET["pass"]; 
	  $loginUser = $_GET["correo"]; 
//echo '<script language="javascript">alert(" Se obtienen los datos desde el enlace del correo ");</script>'; 
/**/
$consulta = "SELECT * FROM `usuarios` WHERE correo= '".$loginUser."'  AND Clave= '".$loginPassword."' and estatus = '0'";
      if($resultado = $mysqli->query($consulta)) {
      	//echo '<script language="javascript">alert(" si se ejecuto la consulta ");</script>'; 		  
		   $ExisteUsuario = mysqli_num_rows($resultado);		   
		    if(empty($ExisteUsuario)){
		    	//echo '<script language="javascript">alert(" no existes en el sistema ");</script>'; 
		    	//echo $consulta;
					?>
					<script type="text/javascript">
					window.location.href='index.php?novalidado=1';
					</script>				
					<?php
		    }else{
		    	//echo '<script language="javascript">alert(" si existe en el sistema ");</script>'; 
		    	$row = mysqli_fetch_assoc($resultado); 
					$userok = $row["correo"];        
					$passok = $row["Clave"];             
					$perfil = $row["Perfil"];           
					$codusuariook =  $row["CodUsuario"]; 
						if(isset($userok)){
							//echo '<script language="javascript">alert(" user ok ");</script>'; 
									$consulta2 = "UPDATE `usuarios`  SET `estatus`= 1 WHERE `CodUsuario` = '".$codusuariook."' ";
									if($resultado2 = $mysqli->query($consulta2)){
											?>
											<script type="text/javascript">
											window.location.href='index.php?validado=1';
											</script>				
											<?php								
									}else{
										?>
											<script type="text/javascript">
											window.location.href='index.php?novalidado=1';
											</script>				
											<?php	
									}
						}else{
										?>
										<script type="text/javascript">
										window.location.href='index.php?novalidado=1';
										</script>				
										<?php
						}
		    }
		}else{
			?>
			<script type="text/javascript">
			window.location.href='index.php?novalidado=1';
			</script>				
			<?php
		}
/**/
?>
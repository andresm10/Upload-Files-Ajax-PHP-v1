
<?php 				
			
			$nombre_archivo = $_FILES['userfile']['name']; 
			$tipo_archivo = $_FILES['userfile']['type']; 
			$tamano_archivo = $_FILES['userfile']['size'];
			$ruta="../archivos_subidos"."/".$nombre_archivo;
			//sleep(3);
			$subido=move_uploaded_file($_FILES['userfile']['tmp_name'], $ruta);
			$_SESSION["ruta"]=$ruta;		
			if($subido){								
				/*echo "<script>alert('Archivo Subido Exitosamente.');</script>";*/
				echo "<script>resultados.innerHTML = 'Archivo Subido Exitosamente';</script>";
			}else{					
					/*echo "<script>alert('Error al subir el archivo.');</script>";*/
			}
									
?>
	
<? 
$cadenatexto = $_GET["cadenatexto"]; 
$nombre_archivo = $cadenatexto .".jpg";
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) )) { 
    echo "La extensión de los archivos no es correcta. Se permiten archivos .png o .jpg"; 
}else{ 
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
 		echo "<div align=center>El archivo ha sido cargado correctamente.</div>"; 
	   	echo "<div align=center><a href=../../admin/galeria_proyecto.php?id=$_GET[id]&proyectos=$_GET[proyectos]>VOLVER</a></div>";
    }else{ 
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
    } 
} 
?> 
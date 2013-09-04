<?php
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE proyectos SET titulo ='".$_POST["titulo"]."',descripcion ='".$_POST["descripcion"]."',completa ='".$_POST["completa"]."' WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar: ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="proyectos.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>editar</title>
<meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../../favicon.ico"> 
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../imagenes/icon.png">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php 
$listado = "select * from  proyectos where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form id="form1" name="form1" method="post" action="editarproyectos.php?id=<?php echo $_GET["id"]; ?>">
  <table width="70%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>&nbsp;</p>
        <table width="81%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="29%" align="right" valign="top" class="textobox">&nbsp;</td>
            <td width="71%" valign="top" class="Letras1"><label for="titulo"></label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="texto"><h2 class="texto">
            <span class="texto_contenido2">Titulo</span>&nbsp;&nbsp;</td>
            <td valign="top" class="Letras1"><p>
              <input name="titulo" type="text" class="borde" id="titulo" value="<?php echo $rs["titulo"]; ?>" />
              </p>
            <p>&nbsp; </p></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="texto"><span class="texto_contenido2">descripcion</span>&nbsp;&nbsp; </div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="descripcion" cols="40" rows="5" class="borde" id="descripcion"><?php echo $rs["descripcion"]; ?></textarea>
            </span></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="texto"><span class="texto_contenido2">completa</span>&nbsp;&nbsp; </div></td>
            <td valign="top" class="Letras1"><span class="textobox">
              <textarea name="completa" cols="40" rows="5" class="borde" id="completa"><?php echo $rs["completa"]; ?></textarea>
            </span></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top"><div align="center">
        <label>
          <input name="Modificar" type="submit" class="boton5" id="Modificar" value="Modificar" />
        </label>
      </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>

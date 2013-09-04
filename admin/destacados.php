<?php
session_start();
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update destacados set destacado1  ='$_POST[destacado1]',contenido1  ='$_POST[contenido1]',destacado2  ='$_POST[destacado2]',contenido2  ='$_POST[contenido2]'
	
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
    <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../../favicon.ico"> 
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../imagenes/icon.png">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
<title>Destacados</title></head>

<body onLoad="MM_preloadImages('Botones/on/inicio_on.jpg','Botones/on/productos_on.jpg','Botones/on/mercado_on.jpg','Botones/on/certificaciones_on.jpg','Botones/on/demostraciones_on.jpg','Botones/on/distribuidores_on.jpg','Botones/on/quienes_somos_on.jpg','Botones/on/mision_vision_on.jpg','Botones/on/noticias_on.jpg','Botones/on/link_interes_on.jpg','Botones/on/contactenos_on.jpg','Botones/on/galeria_fotos_on.jpg')">
  <?php
	$listado = "select * from destacados";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$destacado1 = $rs["destacado1"];
		$contenido1 = $rs["contenido1"];
		$destacado2 = $rs["destacado2"];
		$contenido2 = $rs["contenido2"];
		
	}
	?>
  <form id="form1" name="form1" method="post" action="destacados.php">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="2"><div align="center" class="titulodestacado">
          <h2 class="titulocontenio2">Destacados Inferiores</h2>
        </div></td>
      </tr>
      <tr>
        <td height="12" colspan="2"></td>
      </tr>
      <tr>
        <td height="18" colspan="2" valign="top" class="Letras1">&nbsp;</td>
      </tr>
      <tr>
        <td width="19%" height="30" valign="top" class="Letras1"><div align="right" class="subtitulodestacado2"><span class="texto_contenido2">Titulo (Direccionado a servicios)</span><span class="texto">&nbsp;&nbsp;</span></div></td>
        <td width="31%" valign="top"><label>
          <input name="destacado1" type="text" class="borde" id="destacado1" value="<?php echo $destacado1; ?> " size="50">
        </label></td>
      </tr>
      <tr>
        <td height="135" valign="top" class="Letras1"><div align="right" class="subtitulodestacado2"><span class="texto_contenido2">Contenido (Direccionado a servicios) </span><span class="texto">&nbsp;&nbsp;</span></div></td>
        <td valign="top"><label>
          <textarea name="contenido1" cols="50" rows="8" class="borde" id="contenido1"><?php echo $contenido1; ?></textarea>
        </label></td>
      </tr>
      <tr>
        <td height="30" valign="top" class="Letras1"><div align="right" class="subtitulodestacado2"><span class="texto_contenido2">Titulo (Direccionado a proyectos)</span><span class="texto">&nbsp;&nbsp;</span></div></td>
        <td valign="top"><label>
          <input name="destacado2" type="text" class="borde" id="titulo3" value="<?php echo $destacado2; ?> " size="50">
        </label></td>
      </tr>
      <tr>
        <td height="135" valign="top" class="Letras1"><div align="right" class="subtitulodestacado2"><span class="texto_contenido2">Contenido (Direccionado a proyectos) </span><span class="texto">&nbsp;&nbsp;</span></div></td>
        <td valign="top"><label>
          <textarea name="contenido2" cols="50" rows="8" class="borde" id="descripcion3"><?php echo $contenido2; ?> </textarea>
        </label></td>
      </tr>
      
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="47" colspan="2"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="boton5" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto_contenido2">Volver</a></p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>

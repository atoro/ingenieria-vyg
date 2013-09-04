<?php
session_start();
include("../Conexion.php");
	if ($_GET["action"]=="eliminar"){
		$insertar = "delete from proyectos WHERE id  = '$_GET[id]' " ; 
		$sentencia=mysql_query($insertar,$conn)or die("Error al eliminar un link: ".mysql_error);
	}
	

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
<!-- 
function openWindow(url, name) {
popupWin = window.open(url, name, 'scrollbars,resizable,width=650,height=500')
}

// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="file:///Waldo/Users/waldopenatoro/Google Drive/Desarrollo web/Citroen/www/Letras.css" rel="stylesheet" type="text/css" />
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
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #333333}
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

<title>proyectos</title></head>

<body>
<div align="center">
  <p>
    <?php 
if ($_POST["Grabar"]){
	
		$insertar="INSERT INTO proyectos (titulo,descripcion,completa ) ";
		$insertar.= "VALUES( '$_POST[titulo]','$_POST[descripcion]','$_POST[completa]' )";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar: ".mysql_error);	
}

?>
    
</p>
<form action="proyectos.php" method="post" name="form1" id="form1" onSubmit="MM_validateForm('codigo','','R','nombre','','R','preciolista','','RisNum','preciomayorista','','RisNum','descripcion','','R');return document.MM_returnValue">
  <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="32" colspan="2"><div align="center" class="Subtitulo1">
        <h2><span class="texto_contenido2">Proyectos</span></h2>
      </div></td>
    </tr>
    <tr>
      <td width="44%" height="29" align="right" class="texto_info"><span class="texto_contenido2">Titulo</span><strong class="texto"> &nbsp;</strong></td>
      <td width="56%"><label for="titulo"></label>
        <input name="titulo" type="text" class="borde" id="titulo"></td>
    </tr>
    <tr>
      <td height="98" align="right" valign="top" class="texto_info"><span class="texto_contenido2">Descripci&oacute;n</span><strong> &nbsp;</strong></td>
      <td valign="top"><span class="textobox">
        <textarea name="descripcion" cols="45" rows="5" class="borde" id="descripcion"></textarea>
      </span></td>
    </tr>
    <tr>
      <td height="91" align="right" valign="top" class="texto_info"><span class="texto_contenido2">Descripci&oacute;n Completa</span><strong> &nbsp;</strong></td>
      <td><span class="textobox">
        <textarea name="completa" cols="45" rows="5" class="borde" id="completa"></textarea>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="Letras1">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <p>
          <label>
            <input name="Grabar" type="submit" class="boton5" id="Grabar" value="Grabar" />
          </label>
        </p>
        <p>&nbsp;</p>
      </div></td>
    </tr>
  </table>
</form>
<p><a href="sesion.php" class="texto_contenido2">Volver</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php 
$listado = "select * from  proyectos";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
</p>
<p>&nbsp;</p>
<table width="50%" cellpadding="0" cellspacing="0" class="boton2">
            <tr>
              <td height="265" class="margen"><table width="72%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="88%" valign="top"><table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="133" height="28" class="Letras1"><div align="left" class="Letras1"> <span class="textobox"><a href="proyectos.php?id=<?php echo $rs["id"] ?>&action=eliminar" onClick=" return confirm('¿Está Seguro que desea eliminar?');"><img src="b_drop.png" width="16" height="16" border="0" /></a></span> <span class="texto_f">&nbsp;</span><span class="texto_contenido2">Eliminar</span>                      </div></td>
                      <td class="textobox"><a href="javascript:openWindow('editarproyectos.php?id=<?php echo $rs["id"]; ?>')"javascript:openWindow('editarproyectos.php?id=<?php echo $rs["id"]; ?>')""><img src="Lapiz.png" width="16" height="16" border="0"></a>  &nbsp;<span class="texto_contenido2"><a href="javascript:openWindow('editarproyectos.php?id=<?php echo $rs["id"]; ?>')" class="texto_contenido2">Editar</a></a></span></td>
                    </tr>
                    <tr>
                      <td height="26" align="right" valign="top" class="Letras1"><p><span class="texto_info"><span class="texto_contenido2">Titulo</span> &nbsp; </span></p></td>
                      <td width="369" valign="top" class="texto"><?php $texto = str_replace("\r\n","<br>",$rs["titulo"]); echo $texto ?></td>
                    </tr>
                    <tr>
                      <td height="107" align="right" valign="top" class="Letras1"><div align="right" class="texto_info"><span class="texto_contenido2">Descripci&oacute;n</span> &nbsp; </div></td>
                      <td valign="top" class="texto"><?php $texto = str_replace("\r\n","<br>",$rs["descripcion"]); echo $texto ?></td>
                    </tr>
                    <tr>
                      <td height="107" align="right" valign="top" class="Letras1"><div align="right" class="texto_info"><span class="texto_contenido2">Descripci&oacute;n &nbsp; Completa</span> &nbsp; </div></td>
                      <td valign="top" class="texto"><?php $texto = str_replace("\r\n","<br>",$rs["completa"]); echo $texto ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" valign="top" class="Letras1"><p><a href="../imagenes/proyectos/Upload_foto.php?id=<?php echo $rs["id"]; ?>" class="texto_contenido2">Cambiar foto </a></p>                        <img src="../imagenes/proyectos/<?php echo $rs["id"]; ?>.jpg" width="418" height="114"></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" valign="top" class="Letras1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="23" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><p class="texto_contenido2"><a href="galeria_proyecto.php?proyectos=<?php echo $rs["id"] ?>" class="texto_contenido2">Editar Galeria de Fotos</a></p></td>
                    </tr>
                  </table></td>
                </tr>
                </table>
                <p>&nbsp;</p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" bgcolor="#333333"></td>
                  </tr>
                </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <?php } ?>
</div>
<div align="left"></div>
<div align="center"></div>
<p align="center"><a href="sesion.php" class="texto_contenido2">Volver</a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>

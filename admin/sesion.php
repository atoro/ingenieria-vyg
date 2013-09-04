<?php
session_start();
include("../Conexion.php");
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from 	usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>textoistrador</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
    <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../../favicon.ico"> 
	<link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../imagenes/icon.png">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center" class="titulodestacado">  
  <h2>&nbsp;</h2>
  <h2><strong><span class="textotituloscontenidos">
    <?php if ($_SESSION["$nusuario"] == "") { ?>
    </span></strong><span class="titulocontenio2"><strong>Inicie sesion para modificar el contenido</strong></span>
  </h2>
  <p>&nbsp;</p>
</div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="194" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="64" class="texto" ><p class="texto_contenido2">Usuario</p></td>
        <td width="130"><label>
          <input name="nusuario_txt" type="text" class="borde"  id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="15" colspan="2" ></td>
      </tr>
      <tr>
        <td class="texto" ><p class="texto"><span class="texto_contenido2">Password</span><span class="textocontenio2">&nbsp;</span>&nbsp;</p></td>
        <td valign="top"><input name="password_txt" type="password" class="borde"  id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="17" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label class="boton5">
            <input name="Entrar" type="submit" class="boton5" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>&nbsp;</p>
  <p class="textocontenio2">
    <?php } else  {

	
	?></p>
  <h2 class="titulos">&nbsp;</h2>
  <h2 class="titulos"><?php echo $_SESSION["$nusuario"]; ?></h2>
  <p>&nbsp;</p>
  <table width="225" border="1" cellpadding="0" cellspacing="1" class="borde">
    <tr>
      <td width="219"><table width="223" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="223" height="31" align="left" bgcolor="#E5301E"><div align="center" class="textocontenio">
            <h1>Menu Principal</h1>
          </div></td>
        </tr>
        
        <tr>
          <td height="5" align="left" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td height="15" align="left" bgcolor="#FFFFFF"  class="texto_contenido2">&nbsp;<a href="nosotros.php" class="texto_contenido2">Nosotros </a></td>
        </tr>
        <tr>
          <td height="15" align="left" bgcolor="#FFFFFF"  class="texto_contenido2">&nbsp;<a href="destacados.php" class="texto_contenido2">Destacados </a></td>
        </tr>
        <tr>
          <td height="15" align="left" bgcolor="#FFFFFF"  class="texto">&nbsp;<a href="servicios.php" class="texto_contenido2">Servicios</a></td>
        </tr>
        <tr>
          <td height="15" align="left" bgcolor="#FFFFFF"><span class="texto">&nbsp;<a href="proyectos.php" class="texto_contenido2">Proyectos</a></span></td>
        </tr>
        <tr>
          <td height="15" align="left" bgcolor="#FFFFFF"  class="texto">&nbsp;<a href="responsabilidad.php" class="texto_contenido2">Responsabilidad Social</a></td>
        </tr>
        <tr>
          <td height="7" align="left" bgcolor="#FFFFFF"  class="texto">&nbsp;<a href="post.php" class="texto_contenido2">Post Consulta</a></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF"  class="texto">&nbsp;</td>
        </tr>
        <tr>
          <td height="7" align="center" bgcolor="#FFFFFF"  class="texto"><span class="texto"><a href="cambiopassword.php" class="texto_contenido2" ><strong>Cambio de password</strong></a></span></td>
        </tr>
        <tr>
          <td height="7" align="center" bgcolor="#FFFFFF" class="titulodestacado" ><span class="texto"><a href="sesion.php?fun=cerrar" class="texto_contenido2" >Cerrar sesion</a></span></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>

<?php } ?>
</body>
</html>

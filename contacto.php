<?php include("Conexion.php"); 
if ($_POST["Enviar"]){
	include_once("securimage/securimage.php");
	$img = new securimage();
	$valido_captcha = $img->check($_POST['captchacode']);
if ($valido_captcha){
	$destinatario = "contacto@ingenieriavyg.cl";
	$nombre = $_POST["Nombre"];
	$telefono = $_POST["Telefono"];
	$mail = $_POST["Email"];
	$consulta = $_POST["Consulta"];
	$asunto = "Consulta sitio web"; 
	$cuerpo = "<table width=100% border=1 cellspacing=0 cellpadding=0><tr><td>NOMBRE: $nombre</td></tr><tr><td>TELEFONO: $telefono</td></tr><tr><td>MAIL: $mail</td></tr><tr><td>CONSULTA: $consulta</td></tr></table>";
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: $nombre <$mail>\r\n"; 
	mail($destinatario,$asunto,$cuerpo,$headers);
	header("location: postconsulta.php","_self");
}else{
   echo "Consulta no enviada, debe escribir correctamente el codigo de seguridad";
}

}

?>
<!doctype html><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>VyG ingeniería y construcción</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href="font/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagenes/icon.png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script5.js"></script>
</head>
<body>
<div id="linea_sup"></div>
<header>
	<div id="headerimgs">
	  	<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
  	<div id="nav-outer"><img src="images/logo.jpg" width="270" height="61"></div>
	<div class="botonera" id="headernav-outer">
		<div id="sep_izq"></div>
    	<div class="botonera" id="nosotros"><a href="index.php" class="botonera">NOSOTROS</a></div>
    	<div id="servicios"><a href="servicios.php" class="botonera">SERVICIOS</a></div>
    	<div id="proyectos"><a href="proyectos.php" class="botonera">PROYECTOS</a></div>
    	<div id="responsabilidad"><a href="responsabilidad.php" class="botonera">RESPONSABILIDAD SOCIAL</a></div>
    	<div id="contacto"><a href="contacto.php" class="botonera">CONTACTO</a></div>
    </div>
</header>
<div id="section"> 
	<div id="contenido_section">
	  <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="55">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="18" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td height="80" valign="top" class="texto_contenido"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td width="450" height="400" valign="top" class="text5"><form name="form1" method="post" action="contacto.php">
	                <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                  <tr>
	                    <td height="20" align="left" class="productos">Nombre</td>
	                    </tr>
	                  <tr>
	                    <td width="248" align="left"><label>
	                      <input name="Nombre" type="text" class="boton2" id="Nombre" size="75" />
	                      </label></td>
	                    </tr>
	                  <tr>
	                    <td height="5" align="left"></td>
	                    </tr>
	                  <tr>
	                    <td height="20" align="left" class="texto_b">Tel&eacute;fono</td>
	                    </tr>
	                  <tr>
	                    <td align="left"><input name="Telefono" type="text" class="boton2" id="Telefono" size="75" /></td>
	                    </tr>
	                  <tr>
	                    <td height="5" align="left"></td>
	                    </tr>
	                  <tr>
	                    <td height="20" align="left" class="texto_b">Mail</td>
	                    </tr>
	                  <tr>
	                    <td align="left"><input name="Email" type="text" class="boton2" id="Email" size="75" /></td>
	                    </tr>
	                  <tr>
	                    <td height="5" align="left"></td>
	                    </tr>
	                  <tr>
	                    <td height="20" align="left" class="texto_b">Consulta</td>
	                    </tr>
	                  <tr>
	                    <td align="left"><textarea name="Consulta" cols="75" rows="4" class="boton3" id="Consulta"></textarea></td>
	                    </tr>
	                  <tr>
	                    <td height="5" align="left"></td>
	                    </tr>
	                  <tr>
	                    <td align="left"><div align="left"><img src="/securimage/securimage_show.php" name="captcha" id="captcha" /></div></td>
	                    </tr>
	                  <tr>
	                    <td height="27" align="left"><div align="left"><a href="#" class="texto_contenido" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">Refrescar la imagen</a></div></td>
	                    </tr>
	                  <tr>
	                    <td align="left"><div align="center">
	                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
	                        <tr>
	                          <td width="33%" class="textossesion"><h2 class="texto_contenido">Codigo de seguridad</h2></td>
	                          <td width="67%"><div align="left">
	                            <input name="captchacode" type="text" id="captchacode" size="20" />
	                            </div></td>
	                          </tr>
	                        </table>
	                      </div></td>
	                    </tr>
	                  <tr>
	                    <td align="left">&nbsp;</td>
	                    </tr>
	                  <tr>
	                    <td align="left"><div align="left">
	                      <input name="Enviar" type="submit" class="boton5" id="Enviar" value="Enviar" />
	                      </div></td>
	                    </tr>
	                  </table>
	                </form></td>
	              <td width="450" valign="top">
                  <iframe width="475" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.cl/maps?sll=-33.83184313972536,-71.2935822&amp;sspn=1.6029527586805272,3.500149866202582&amp;t=m&amp;q=Rancagua,+Rancagua&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=Rancagua,+Provincia+de+Cachapoal,+Regi%C3%B3n+del+Libertador+General+Bernardo+O'Higgins&amp;ll=-34.168068,-70.738907&amp;spn=0.22725,0.32547&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /></td>
	              </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="55">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="18" valign="top">&nbsp;</td>
        </tr>
      </table>
	</div>
</div>
<footer>
  <div id="footer">
    <div id="redes_sociales">
      <div id="twitter"><a href="https://twitter.com/ingenieriavyg" target="new"><img src="imagenes/twitter.png" width="33" height="32"></a></div>
      <div id="facebook"><a href="https://www.facebook.com/ingenieria.vyg" target="new"><img src="imagenes/facebook.png" width="33" height="32"></a></div>
    </div>
    <div class="texto_pie" id="pie">todos los derechos reservados a ingenieriavyg -  contacto@ingenieriavyg.cl<br>
      sitio web desarrollado por emagenic.cl</div>
  </div>
</footer>
</body>
</html>
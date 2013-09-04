<?php include("Conexion.php"); 
$listado = "select * from  post";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	$descripcion = str_replace("\r\n","<br>",$rs["descripcion"]);
	
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
	                    <td width="248" height="20" align="left" valign="top" class="productos"><?php echo $descripcion; ?></p>
	                      <p>&nbsp;</p>
	                      <p>&nbsp;</p>
	                      <p><a href="contacto.php" class="texto_contenido">volver</a></p></td>
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
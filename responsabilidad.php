<?php include("Conexion.php"); 
$listado = "select * from  destacados";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	$destacado1 = str_replace("\r\n","<br>",$rs["destacado1"]);
	$contenido1 = str_replace("\r\n","<br>",$rs["contenido1"]);
	$destacado2 = str_replace("\r\n","<br>",$rs["destacado2"]);
	$contenido2 = str_replace("\r\n","<br>",$rs["contenido2"]);	
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
<script type="text/javascript" src="js/script4.js"></script>
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
	          <td width="70%" height="80" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="84" valign="top">
	                <iframe width="640" height="360" src="//www.youtube.com/embed/DC6j9iTDDZk?rel=0"  frameborder="0" allowfullscreen></iframe>
	                
	                <p>&nbsp;
	                  &nbsp;
	                  &nbsp;
                    </p>
	                <p>&nbsp;</p></td>
	              </tr>
              </table></td>
	          <td width="30%" valign="top" class="texto_contenido"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="35" valign="top"><h1>Links de Inter&eacute;s</h1></td>
	              </tr>
	            <tr>
	              <td valign="top" class="texto_contenido">
                  
                  
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <?php
		$listado = "select * from responsabilidad  ";
			$sentencia = mysql_query($listado,$conn);
			while($rs=mysql_fetch_array($sentencia,$mibase)){
		?> 
                      <tr>
                        <td><a  target="new" href="http://<?php echo str_replace("\r\n","<br>",$rs["links"]) ?>" class="texto_contenido"> <?php echo str_replace("\r\n","<br>",$rs["links"]) ?></a></td>
                      </tr>
                      <?php }?>
                    </table> 
                    
                    
                    </td>
                    
               </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
	</div>
</div>
<div id="section2"> 
  <div id="contenido_section2">
    <table width="950" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="55">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="18" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td width="50%" height="91" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="35" valign="top"><h2><?php echo $destacado1; ?></h2></td>
	              </tr>
	            <tr>
	              <td valign="top" class="texto_contenido2"><?php echo $contenido1; ?></td>
	              </tr>
	            <tr>
	              <td height="29" valign="bottom"><table width="20%" border="0" cellspacing="0" cellpadding="0">
	                <tr>
	                  <td align="center" valign="middle" bgcolor="#E7301D" class="texto_contenido"><a href="http://ingenieriavyg.cl/detalleservicio/themes/classic/detalleservicio.php?id=5" class="texto_contenido">ver mas</a></td>
	                  </tr>
	                </table></td>
	              </tr>
	            </table></td>
	          <td width="50%" valign="top"><table width="90%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="35" valign="top"><h2><?php echo $destacado2; ?></h2></td>
	              </tr>
	            <tr>
	              <td valign="top" class="texto_contenido2"><?php echo $contenido2; ?></td>
	              </tr>
	            <tr>
	              <td height="29" valign="bottom"><table width="20%" border="0" cellspacing="0" cellpadding="0">
	                <tr>
	                  <td align="center" valign="middle" bgcolor="#E7301D" class="texto_contenido"><a href="proyectos.php" class="texto_contenido">ver mas</a></td>
	                  </tr>
	                </table></td>
	              </tr>
	            </table></td>
            </tr>
          </table></td>
        </tr>
    </table>
    <p>&nbsp;</p>
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
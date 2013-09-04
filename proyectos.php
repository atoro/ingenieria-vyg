<?php include("Conexion.php"); ?>
<!doctype html><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>VyG ingeniería y construcción</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href="font/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="imagenes/icon.png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script3.js"></script>
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
	  
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="35">&nbsp;</td>
      </tr>
    </table>
<table width="950" border="0" cellspacing="0" cellpadding="0">
            
        
        
      <tr>
	      <td>
          
          <table width="950" border="0" cellspacing="0" cellpadding="0">
	        <?php
		$listado = "select * from proyectos  ";
			$sentencia = mysql_query($listado,$conn);
			while($rs=mysql_fetch_array($sentencia,$mibase)){?> <tr>
	          <td width="475" valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="84" valign="top"><img src="imagenes/proyectos/<?php echo $rs["id"]; ?>.jpg" width="418" height="114" /></td>
	              <td width="27">&nbsp;</td>
	              <td width="4" bgcolor="#E7301D">&nbsp;</td>
	              <td width="26">&nbsp;</td>
	              </tr>
	            <tr>
	              <td width="418" height="84" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	                <tr>
	                  <td>&nbsp;</td>
	                  </tr>
	                <tr>
	                  <td height="35" valign="top"><h1><?php echo str_replace("\r\n","<br>",$rs["titulo"]) ?></h1></td>
	                  </tr>
	                <tr>
	                  <td valign="top" class="texto_contenido"><?php echo str_replace("\r\n","<br>",$rs["descripcion"]) ?>
	                    <p>&nbsp;</p>
	                    <p>&nbsp;</p>
	                    <table width="27%" border="0" cellspacing="0" cellpadding="0">
	                      <tr>
	                        <td align="center" valign="middle" bgcolor="#E7301D"><a href="detalleservicio/themes/classic/detalleservicio.php?id=<?php echo $rs["id"]; ?>" class="texto_contenido">ver proyecto</a></td>
	                        </tr>
	                      </table>
	                    <p>&nbsp;</p>
	                    <p>&nbsp;</p></td>
	                  </tr>
	                </table></td>
	              <td colspan="3">&nbsp;</td>
	              </tr>
              </table></td>
             <?php if($rs=mysql_fetch_array($sentencia,$mibase)){ ?>
	          <td width="475" valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td height="84" valign="top"><img src="imagenes/proyectos/<?php echo $rs["id"]; ?>.jpg" width="418" height="114" /></td>
	              <td width="27">&nbsp;</td>
	              <td width="4" bgcolor="#E7301D">&nbsp;</td>
	              <td width="26">&nbsp;</td>
	              </tr>
	            <tr>
	              <td width="418" height="84" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	                <tr>
	                  <td>&nbsp;</td>
	                  </tr>
	                <tr>
	                  <td height="35" valign="top"><h1><?php echo str_replace("\r\n","<br>",$rs["titulo"]) ?></h1></td>
	                  </tr>
	                <tr>
	                  <td valign="top" class="texto_contenido"><?php echo str_replace("\r\n","<br>",$rs["descripcion"]) ?>
	                    <p>&nbsp;</p>
	                    <p>&nbsp;</p>
	                    <table width="27%" border="0" cellspacing="0" cellpadding="0">
	                      <tr>
	                        <td align="center" valign="middle" bgcolor="#E7301D"><a href="detalleservicio/themes/classic/detalleservicio.php?id=<?php echo $rs["id"]; ?>" class="texto_contenido">ver proyecto</a></td>
	                        </tr>
	                      </table>
	                    <p>&nbsp;</p>
	                    <p>&nbsp;</p></td>
	                  </tr>
	                </table></td>
	              <td colspan="3">&nbsp;</td>
	              </tr>
              </table></td>
            </tr>
            <?php }}?>
          </table>
          
          </td>
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
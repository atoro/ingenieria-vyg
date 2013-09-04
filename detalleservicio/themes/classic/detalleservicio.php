<?php include("../../../Conexion.php"); 
 $listado = "select * from proyectos where id = '$_GET[id]' ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$idproyectos= $rs["id"];
		$titulo = str_replace("\r\n","<br>",$rs["titulo"]); 
		$completa = str_replace("\r\n","<br>",$rs["completa"]); 
	
	}
	
?>
<!doctype html><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title>VyG ingeniería y construcción</title>
<link rel="stylesheet" type="text/css" href="../../../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../../../css/estilos.css"/>
<link href="../../../font/stylesheet.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="../../../imagenes/icon.png">

<style>

            /* Demo styles */
    html,body{}
    .content{
	width: 800px;
	font-family: "helvetica neue", arial, sans-serif;
	font-size: 12px;
	line-height: 1.4;
	
	
}

    p{margin:0 0 20px}
    .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
    #galleria{
	height: 500px;
	background-color: #000000;
}
        body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
        #detallecontenido {
	background-color: #000;
	background-image: url(../../../imagenes/bg.png);
	background-repeat: no-repeat;
}
        </style>
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        .texto1 {	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
	text-decoration: none;
	font-size: 12px;
}
        </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script3.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
    <script src="../../galleria-1.2.8.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
</head>
<body>
<div id="linea_sup"></div>
<header>
	<div id="headerimgs">
	  	<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
  	<div id="nav-outer"><img src="../../../images/logo.jpg" width="270" height="61"></div>
	<div class="botonera" id="headernav-outer">
		<div id="sep_izq"></div>
    	<div class="botonera" id="nosotros"><a href="../../../index.php" class="botonera">NOSOTROS</a></div>
    	<div id="servicios"><a href="../../../servicios.php" class="botonera">SERVICIOS</a></div>
    	<div id="proyectos"><a href="../../../proyectos.php" class="botonera">PROYECTOS</a></div>
    	<div id="responsabilidad"><a href="../../../responsabilidad.php" class="botonera">RESPONSABILIDAD SOCIAL</a></div>
    	<div id="contacto"><a href="../../../contacto.php" class="botonera">CONTACTO</a></div>
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
	      <td height="540"> 
              <div class="content"><!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div class="content" id="galleria">
  <?php 
$listado = "select * from  galeria_proyecto  where proyectos = '$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	if ($rs["Tipo"]=="imagen"){
?>
		<a href="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        <img data-title="" data-description="Galeria Multimedia" src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        </a>
<?php } else { ?>
         <a href="<?php echo $rs["url"]; ?>">
         <img data-title=""
         src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
<?php }} ?></div>

        <p class="cred"></p>
    </div>
    <script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
          
          </td>
      </tr>
	    
      </table>
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="35" valign="top"><h1><?php echo $titulo; ?></h1></td>
        </tr>
        <tr>
          <td height="70" valign="top" class="texto_contenido"><?php echo $completa; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
</div>
<footer> 
	<div id="footer">
   	  <div id="redes_sociales"> 
        	<div id="twitter"><a href="https://twitter.com/ingenieriavyg" target="new"><img src="../../../imagenes/twitter.png" width="33" height="32"></a></div>
            <div id="facebook"><a href="https://www.facebook.com/ingenieria.vyg" target="new"><img src="../../../imagenes/facebook.png" width="33" height="32"></a></div>
      </div>
      		<div class="texto_pie" id="pie">todos los derechos reservados a ingenieriavyg -  contacto@ingenieriavyg.cl<br>
sitio web desarrollado por emagenic.cl</div>
	  </div>
</footer>
</body>
</html>
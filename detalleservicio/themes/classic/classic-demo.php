<?php include("../../../Conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galleria Classic Theme</title>
        <style>

            /* Demo styles */
            html,body{}
            .content{
	width: 800px;
	font-family: "helvetica neue", arial, sans-serif;
	font-size: 12px;
	line-height: 1.4;
	height: 500px;
	margin-right: auto;
	margin-left: auto;
}
            h1{
	font-size: 12px;
	font-weight: normal;
	margin: 0;
}
            p{margin:0 0 20px}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{
	height: 500px;
	background-color: #43d1ff;
}

        body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
        </style>

        <!-- load jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

        <!-- load Galleria -->
        <script src="../../galleria-1.2.8.min.js"></script>

    </head>
<body>
<div class="content">
      <h1></h1>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
  <?php 
$listado = "select * from  galeria ";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
	if ($rs["Tipo"]=="imagen"){
?>
		<a href="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        <img data-title="" data-description="Kangoo Fitness" src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
        </a>
<?php } else { ?>
         <a href="<?php echo $rs["url"]; ?>">
         <img data-title=""
         src="../../galeria/<?php echo $rs["id"]; ?>.jpg">
<?php }} ?>           
        </div>

        <p class="cred"></p>
    </div>

<script>

    // Load the classic theme
    Galleria.loadTheme('galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
</body>
</html>
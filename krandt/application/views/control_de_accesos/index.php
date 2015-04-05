<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Krandt</title>
        <link href="/assets/sitio/css/general.css" rel="stylesheet" type="text/css">
        <link href="/assets/sitio/css/home.css" rel="stylesheet" type="text/css">
        <link href="/assets/sitio/css/contenido.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/assets/sitio/css/menu/core.css" type="text/css" media="screen">
<link rel="stylesheet" href="/assets/sitio/css/menu/styles/sgray.css" type="text/css" media="screen">
	<!--[if (gt IE 9)|!(IE)]><!-->
        <link rel="stylesheet" href="/assets/sitio/css/menu/effects/fade.css" type="text/css" media="screen">
        <link href="/assets/sitio/css/historia.css" rel="stylesheet" type="text/css">
	<!--<![endif]-->

	<!-- This piece of code, makes the CSS3 effects available for IE -->
	<!--[if lte IE 9]>
		<script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/menu.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8">
			$(function() {
				$("#menu").menu({'effect' : 'fade'});
			});
		</script>
	<![endif]-->
</head>
<div class="contenidoproductos">
<div class="header">
    <div class="logo"><a href="/home/"><img src="/assets/sitio/imagenes/logo.png" width="177" height="90" alt=""/></a></div>
    <div class="ingresar"><a href="downloads.html"><img src="/assets/sitio/imagenes/iconoingresar.jpg" width="66" height="21" alt="" border="0"></a></div>
<div class="contenedormenu">
<ul class="menu sgray fade" id="menu">
	
    <li><a href="/home/">HOME</a></li>
	<li><a href="/historia/">HISTORIA</a></li>
	<li class="hover"><a href="#">PRODUCTOS</a>
		<!-- start level 2 -->
		<ul>
			<li><a href="/control-de-accesos/">Control de accesos</a></li>
			<li><a href="/tiempo-y-asistencia/">Tiempo y asistencia</a></li>
			<li><a href="/visitas/">Visitas</a></li>
			<li><a href="/comedor/">Comedor</a></li>
			<li><a href="/video-ip/">Video IP</a></li>


		</ul>
		<!-- end level 2 -->
	</li>
	
	<li><a href="/clientes/">CLIENTES</a></li>
    	<li><a href="/downloads/">DOWNLOADS</a></li>

	<li><a href="/contacto/">CONTACTO</a></li>

</ul>
</div>
</div>
    <?=$control_de_accesos['texto']?>
    

<div class="footer">
  <div class="texto1footer">Thames 2192 3 Piso, (1425), Buenos Aires, Argentina<br>
    Tel.: (+54 11) 5218 - 7809</div>
  <div class="texto2footer">Copyright 2015 Krandt S.A.<br>
    Design by B.on Comunicacion </div>
</div>
</div>

</body>
</html>
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
	<!--<![endif]-->
        <link rel="stylesheet" href="/assets/sitio/css/craftyslide.css" />
          <!-- it works the same with all jquery version from 1.x to 2.x -->
          <script type="text/javascript" src="/assets/sitio/js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="/assets/sitio/js/jssor.js"></script>
    <script type="text/javascript" src="/assets/sitio/js/jssor.slider.js"></script>
<style type="text/css">
.footer1 {
	width: 100%;
	height: 20px;
	position: absolute;
	bottom: 0;
}
</style>
</head>
    <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(/assets/sitio/img/browser-icons.png);
        }
    </style>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="/assets/sitio//js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="/assets/sitio//js/jssor.js"></script>
    <script type="text/javascript" src="/assets/sitio//js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 5, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 3,                             //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 1,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 5,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 0,                            //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;

                    //keep the slider width no more than 600
                    sliderWidth = Math.min(sliderWidth, 860);

                    jssor_slider1.$ScaleWidth(sliderWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

      <style type="text/css">
      a:link {
	color: #18305E;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #18305E;
}
a:hover {
	text-decoration: none;
	color: #18305E;
}
a:active {
	text-decoration: none;
	color: #18305E;
}
      </style>

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
<div class="contenido">
<div class="header">
    <div class="logo"><a href="/home/"><img src="/assets/sitio/imagenes/logo.png" width="177" height="90" alt=""/></a></div>
    <div class="ingresar"><a href="/downloads/"><img src="/assets/sitio/imagenes/iconoingresar.jpg" width="66" height="21" alt=""/ border="0"></a></div>
<div class="contenedormenu">
<ul class="menu sgray fade" id="menu">
	
    <li class="hover" ><a href="/home/">HOME</a></li>
	<li><a href="/historia/">HISTORIA</a></li>
	<li><a href="#">PRODUCTOS</a>
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



<div class="slide">
  <div class="contenidoslide">
          <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 270px; background: #fff; overflow: hidden;">
        
        <!-- Slides Container -->
      <div u="slides" style="cursor: move; position: absolute; left: 0px; width: 860px; height: 250px; overflow: hidden; padding-top: 350px;">
            <div>
                <img src="/assets/sitio/imagenes/slide/1.jpg" width="860" height="270" />
                <div u="thumb">Control de accesos</div>
            </div>
            <div>
                <img src="/assets/sitio/imagenes/slide/2.jpg" />
                <div u="thumb">Tiempo y asistencia</div>
            </div>
            <div>
                <img src="/assets/sitio/imagenes/slide/3.jpg" />
                <div u="thumb">Visitas</div>
            </div>
            <div>
                <img src="/assets/sitio/imagenes/slide/4.jpg" />
                <div u="thumb">Comedor</div>
            </div>
            <div>
                <img src="/assets/sitio/imagenes/slide/5.jpg" />
                <div u="thumb">Video IP</div>
            </div>
        </div>
        <div class="footer1">
<!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort14" style="position: absolute; width: 600px; height: 20px; left:0px; top: 0px;background:#fff;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 14 css */
                /*
                .jssort14 .p            (normal)
                .jssort14 .p:hover      (normal mouseover)
                .jssort14 .pav          (active)
                .jssort14 .pav:hover    (active mouseover)
                .jssort14 .pdn          (mousedown)
                */
                .jssort14 .w, .jssort14 .phv .w
                {
                	cursor: pointer;
                	position: absolute;
                	WIDTH: 100%;
                	HEIGHT: 100%;
                	background-color: #c2b38f;
                }
                .jssort14 .pdn .w, .jssort14 .pav .w, .jssort14 .p:hover .w
                {
                	background-color: #422e2c;
                }
                .jssort14 .c
                {
                    color: #000;
                    font-size:10px;
                	background-color: #DBDBDB;                	
                	transition: background-color .6s;
                    -moz-transition: background-color .6s;
                    -webkit-transition: background-color .6s;
                    -o-transition: background-color .6s;
                }
                .jssort14 .p:hover .c, .jssort14 .phv .c, .jssort14 .pav:hover .c, .jssort14 .pav .c
                {
                	transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }
                .jssort14 .pav .c
                {
                	background-color:#C8CA2B;
                }
                .jssort14 .p:hover .c, .jssort14 .phv .c, .jssort14 .pav:hover .c
                {
                	background-color:#C8CA2B;
                }
            </style>
            <div u="slides" style="cursor: move; top:0px; left:0px;">
                <div u="prototype" class="p" style="POSITION: relative; WIDTH: 120px; HEIGHT: 27px; TOP: 0; LEFT: 0; padding: 0px; background: #fff; bottom: 0px;">
                    <div class=w><div u="thumbnailtemplate" class="c" style=" WIDTH: 100%; HEIGHT: 23px; position:absolute; TOP: 0; LEFT: 0; line-height:23px; text-align:center;"></div></div>
              </div>
          </div>
      </div>
      </div>
            <!-- Thumbnail Item Skin End -->
</div>

  
</div>
<div class="contenidocolumnas">
<div class="columna1">
    <div class="imagencolumna"><a href="/control-de-accesos/"><img src="/assets/sitio/imagenes/columna-controldeacceso.jpg" width="160" height="76" alt=""/></a></div>
  <div class="titulocolumnas"><a href="/control-de-accesos/">Control de accesos</a></div>
  <div class="textocolumnas">
    <p><strong>Krandt Accesos</strong> es la solución de control de accesos dentro de la suite de aplicaciones que provee Krandt.<br>
      <br>
      Diseñamos la mejor solución que se adapte a las necesidades del cliente.<br>
      <br>
      Disponemos de una amplia variedad de equipos para captura de fichadas los cuales se encuentran integrados a nuestra solución.</p>
  </div>
</div>
<div class="columna2">
    <div class="imagencolumna"><a href="/tiempo-y-asistencia/"><img src="/assets/sitio/imagenes/columna-tiempoyasistencia.jpg" width="160" height="76" alt=""/></a></div>
  <div class="titulocolumnas"><a href="/tiempo-y-asistencia/">Tiempo y asistencia</a></div>
  <div class="textocolumnas">
    <p><strong>Krandt T&amp;A </strong>es el software más sofisticado del mercado para el cálculo de tiempo y asistencia.</p>
    <p>Diseñado para medianas y grandes empresas realiza los cálculos en forma dinámica y configurable, utilizando un poderoso &quot;engine&quot; desarrollado con tecnología .Net <br>
      y stored procedures en bases de datos, permitiendo de esta forma la incorporación de nuevas claves de liquidación en forma simple y flexible.</p>
  </div>
</div>
<div class="columna3">
    <div class="imagencolumna"><a href="/visitas/"><img src="/assets/sitio/imagenes/columna-visitas.jpg" width="160" height="76" alt=""/></a></div>
  <div class="titulocolumnas"><a href="/visitas/">Visitas</a></div>
  <div class="textocolumnas">
    <p><strong>Krandt Visitas </strong>es el módulo de administracion de visitas de la suite de aplicaciones de Krandt.</p>
    <p>Se trata de un módulo muy ágil y completo, que le garantizará la tranquilidad de contar con completo control y registro de visitantes, sin por ello perder eficiencia ni rapidez para el ingreso a sus instalaciones. </p>
  </div>
</div>
<div class="columna4">
    <div class="imagencolumna"><a href="/comedor/"><img src="/assets/sitio/imagenes/columna-comedor.jpg" width="160" height="76" alt=""/></a></div>
  <div class="titulocolumnas"><a href="/comedor/">Comedor</a></div>
  <div class="textocolumnas">
    <p><strong>Krandt Comedor</strong> es el módulo de administracion de consumos de comedor de la suite de aplicaciones de Krandt.</p>
    <p>Utilizando kioscos con tecnología &quot;touch screen&quot; identifica al empleado a través de su tarjeta <br>
      o huella digital y luego accede a su cuenta personal habilitando el consumo. </p>
  </div>
</div>
<div class="columna5">
    <div class="imagencolumna"><a href="/video-ip/"><img src="/assets/sitio/imagenes/columna-videoip.jpg" width="158" height="75" alt=""/></a></div>
  <div class="titulocolumnas"><a href="/video-ip/">Video Ip</a></div>
  <div class="textocolumnas"><br>
    <strong>Video IP</strong> Proveemos e implementamos soluciones de Seguridad de Video utilizando algunas de las mejores marcas de mercado: Samsung, Avigilon, Pelco, Hikvision,  etc.<br>
     <br>
    Ofrecemos tanto soluciones estándar de Sistemas de Monitoreo, como también la posibilidad de asociar capturas, al momento de producirse fichadas inválidas o en áreas restringidas.</div>
</div>
</div>
<div class="footer">
  <div class="texto1footer">Thames 2192 3 Piso, (1425), Buenos Aires, Argentina<br>
    Tel.: (+54 11) 5218 - 7809</div>
      <div class="texto2footer">Copyright 2015 Krandt S.A.<br>
        Design by B.on Comunicacion
      </div>

</div>
</div>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
      <script src="js/craftyslide.min.js"></script>
      
      <script>
        $("#slideshow").craftyslide();
      </script> 

</body>
</html>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="ie ie9"> <!--<![endif]-->
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    
    <!-- Mobile Specific Metas
    +++++++++++++++++++++++++++ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="/assets/sitio/img/favicon1.ico">
    <title>KRANDT</title>
    
    <!-- Styles
    +++++++++++++ -->	
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/sitio/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/sitio/css/bootstrap-responsive.css">

    <link rel="stylesheet" type="text/css" href="/assets/sitio/css/theme.css">
    <link href="/assets/sitio/css/colors/color-yellowgreen.css" rel="stylesheet" type="text/css">
    <link href="/assets/sitio/css/foundation-icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/sitio/css/flaticon.css" rel="stylesheet" type="text/css">
	<!--<link rel="stylesheet" type="text/css" href="css/colors/color-default.css" id="theme_color">-->
    
    <!-- Scripts
    +++++++++++++ -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.2/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/sitio/js/jquery.onebyone.min.js" ></script>
    <script type="text/javascript" src="/assets/sitio/js/theme.js"></script>
    <!-- Demo Panel -->
</head>

<body>
	<!-- H E A D E R -->
	<header>
            <div class="header_wrapper container"> <a href="/home/" class="logo"><img src="/assets/sitio/img/logo.png" alt=""  width="115" height="91" class="logo_def"><img src="img/retina/logo.png" alt="" width="115" height="43" class="logo_retina"></a>
	    <div class="slogan"><span>Thames 2192 3 Piso BS. AS: ARGENTINA ph: (54 11) 5218-7809</span>
	      <hr>
        </div>
	    <nav>
                <ul class="menu">
                    <li class="current-menu-parent"><a href="/home/">Home</a></li>
                    <li><a href="/historia/">Historia</a></li>      
                    <li><a href="javascript:void(0)">Productos</a>
                        <ul class="sub-menu">
                            <li><a href="/control-de-accesos/">Control de accesos</a></li>
                            <li><a href="/tiempo-y-asistencia/">Tiempo y asistencia</a></li>
                            <li><a href="/visitas/">Visitas</a></li>
                            <li><a href="/comedor/">Comedor</a></li>
                            <li><a href="/video-ip/">Video IP</a></li>
                        </ul>
                    </li>
                    <li><a href="/clientes/">Clientes</a></li>               
                    <li><a href="/downloads/">Downloads</a></li>
                    <li><a href="/contacto/">Contacto</a></li>
                       
                    </li>
          </ul>
	      <!-- .menu -->
        </nav>
	    <nav class="mobile_header">
	      <select name="mobile_select" id="mobile_select">
          </select>
        </nav>
      </div>
	  <div class="clear"></div>
</header>
	<!-- C O N T E N T -->
    <div class="content_wrapper">
<div class="container">
            <div class="content_block no-sidebar row">
                <div class="fl-container span12">
                	<div class="row">
                        <div class="posts-block span12">
                            <div class="contentarea">
                                <div class="row-fluid">
                                  <!-- .row-fluid -->

                                <div class="row-fluid">
                                    <div class="span_full module_cont module_text_area">
                                        <h4 class="headInModule"><?=$comedor['titulo']?></h4>
                                        <p><?=$comedor['texto']?></p></div>								
                                </div><!-- .row-fluid -->
                                <div class="row-fluid">
                                  <div class="row-fluid">
                                    <div class="span12 module_cont module_accordion">
                                      <h4 class="headInModule"><a name="anchor1"></a></h4>
                                      <div class="shortcode_accordion_shortcode accordion">
                                        <h5 class="shortcode_accordion_item_title expanded_yes" data-count="1"> <?=$usuarios['titulo']?><span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"> <?=$usuarios['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="2"> <?=$menus['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$menus['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="3"> <?=$convenios['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$convenios['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="4"> <?=$habilitacion_de_consumo['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$habilitacion_de_consumo['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="5"> <?=$fichadas_de_consumo['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$fichadas_de_consumo['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="6"> <?=$alta_manual_de_consumos['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$alta_manual_de_consumos['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="7"> <?=$liquidacion_sueldos['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$liquidacion_sueldos['texto']?></div>
                                        </div>
                                        <h5 class="shortcode_accordion_item_title" data-count="8"> <?=$otras_caracteristicas['titulo']?> <span class="ico"></span> </h5>
                                        <div class="shortcode_accordion_item_body">
                                          <div class="ip"><?=$otras_caracteristicas['texto']?></div>
                                        </div>
                                      </div>
                                      <!--.accordion-->
                                    </div>
                                    <!-- .module_cont -->
                                  </div>
                                </div><!-- .row-fluid -->                                

                                <div class="row-fluid"></div><!-- .row-fluid -->                                

                                <hr class="light">
                                <div class="row-fluid"></div><!-- .row-fluid -->
                            </div><!-- .contentarea -->
                        </div>
                        <div class="left-sidebar-block span3">
                            <!-- Left Sidebar Text --> 	
                        </div><!-- .left-sidebar -->
                    </div>
                    <div class="clear"><!-- ClearFix --></div>
                </div><!-- .fl-container -->
                <div class="right-sidebar-block span3">
                    <aside class="sidebar">
                        //Sidebar Text
                    </aside>
                </div><!-- .right-sidebar -->
                <div class="clear"><!-- ClearFix --></div>
            </div>
        </div><!-- .container -->
    </div><!-- .content_wrapper -->
    <footer>
        <div class="footer_wrapper container">
          <div class="copyright"></div>
        <nav>
          <ul class="menu">
            <li class="current-menu-parent"></li>
          </ul>
          <!-- .menu -->
        </nav>
      </div>
    </footer>
</body>
</html>
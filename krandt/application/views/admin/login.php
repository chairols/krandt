<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>FlatApp - Premium, Responsive and Flat Bootstrap Admin Dashboard Template</title>

        <meta name="description" content="FlatApp is a Premium, Responsive and Flat Bootstrap Admin Dashboard Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/assets/flatapp/img/favicon.ico">
        <link rel="apple-touch-icon" href="/assets/flatapp/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/flatapp/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/flatapp/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/flatapp/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/flatapp/img/apple-touch-icon-precomposed.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- The roboto font is included from Google Web Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">

        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="/assets/flatapp/css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="/assets/flatapp/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="/assets/flatapp/css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of all the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements (must included last) -->
        <link rel="stylesheet" href="/assets/flatapp/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it) -->
        <script src="/assets/flatapp/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body class="login">

        <!-- Login Intro -->
        <a href="javascript:void(0)" class="login-btn themed-background-default">
            <span class="login-logo">
                <span class="square1 themed-border-default"></span>
                <span class="square2"></span>
                <span class="name">Krandt</span>
            </span>
        </a>
        <div class="left-door"></div>
        <div class="right-door"></div>
        <!-- END Login Intro -->

        <!-- Login Container -->
        <div id="login-container" class="hide">
            <!-- Login Block -->
            <div class="block-tabs block-themed themed-border-night">
                
                <div class="tab-content">
                    <div class="tab-pane active" id="login-form-tab">
                        

                        <!-- Login Form -->
                        <form method="post" id="login-form" class="form-inline">
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope-alt"></i></span>
                                        <input type="text" id="login-email" name="usuario" placeholder="Usuario" required>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-asterisk"></i></span>
                                        <input type="password" id="login-password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success remove-margin">Ingresar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Login Form -->
                    </div>
                    
                </div>
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->

        <!-- Jquery library from Google ... -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="/assets/flatapp/js/vendor/bootstrap.min.js"></script>

        <!--
        Include Google Maps API for global use.
        If you don't want to use the Google Maps API globally, just remove this line and the gmaps.js plugin from js/plugins.js (you can put it in a seperate file)
        Then iclude them both in the pages you would like to use the google maps functionality
        -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="/assets/flatapp/js/plugins.js"></script>
        <script src="/assets/flatapp/js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function() {
                var timeout = 0;

                // If our browser support transitions (class will be added with the help of modernizr library) add a timeout of 750ms
                // Nice fallback for our animation on older browser (such as IE8-9)
                if ($('html').hasClass('csstransitions'))
                    timeout = 750;

                // On button hover or touch reveal the login form
                $('.login-btn').mouseenter(function() {
                    $('.left-door, .right-door, .login-btn').addClass('login-animate');

                    setTimeout(function() {
                        $('#login-container').fadeIn(1500);
                        $('.login-btn .name').fadeOut(250, function() {
                            $('.login-btn .square1, .login-btn .square2').fadeIn(750);
                            $('#login-email').focus();
                        });
                    }, timeout);
                });
            });
        </script>
    </body>
</html>
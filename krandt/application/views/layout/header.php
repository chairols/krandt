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

    <!-- Body -->
    <!-- In the PHP version you can set the following options from the config file -->
    <!-- Add the class .hide-side-content to <body> to hide side content by default -->
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page -->
        <div id="page-container" class="full-width">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element! -->
            <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element! -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Navbar Inner -->
                <div class="navbar-inner">
                    <!-- div#row-fluid -->
                    <div class="row-fluid">
                        <!-- Sidebar Toggle Buttons (Desktop & Tablet) -->
                        <div class="span4 hidden-phone">
                            <ul class="nav pull-left">
                                <!-- Desktop Button (Visible only on desktop resolutions) -->
                                <li class="visible-desktop">
                                    <a href="javascript:void(0)" id="toggle-side-content">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Desktop Button -->

                                <!-- Tablet Button -->
                                <li class="visible-tablet">
                                    <!-- It is set to open and close the left sidebar on tablets. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Tablet Button -->

                                <!-- Divider -->
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                        </div>
                        <!-- END Sidebar Toggle Buttons -->

                        <!-- Brand and Search Section -->
                        <div class="span4 text-center">
                            <!-- Top search -->
                            <!--
                            <form id="top-search" class="pull-left" action="page_ready_search_results.html" method="post">
                                <input type="text" id="search-term" name="search-term" placeholder="Search..">
                            </form>
                            -->
                            <!-- END Top search -->

                            <!-- Logo -->
                            <a href="index.html" class="brand">
                                <!--<img src="/assets/flatapp/img/template/logo.png" alt="logo">-->
                                Krandt
                            </a>
                            <!-- END Logo -->

                            <!-- Loading Indicator, Used for demostrating how loading of notifications could happen, check main.js - uiDemo() -->
                            <div id="loading" class="hide"><i class="icon-spinner icon-spin"></i></div>
                        </div>
                        <!-- END Brand and Search Section -->

                        <!-- Header Nav Section -->
                        <div id="header-nav-section" class="span4 clearfix">
                            <!-- Header Nav -->
                            <ul class="nav pull-right">
                                <!-- Theme Options, functionality initialized at main.js - templateOptions() -->
                                <li class="dropdown dropdown-theme-options">
                                    <!--<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Theme Options</a>-->
                                    <ul class="dropdown-menu">
                                        <!-- Page Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-page-full">
                                                <input type="checkbox" id="theme-page-full" name="theme-page-full" class="input-themed">
                                                Full width page
                                            </label>
                                        </li>
                                        <!-- END Page Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Sidebar Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-sidebar-sticky">
                                                <input type="checkbox" id="theme-sidebar-sticky" name="theme-sidebar-sticky" class="input-themed">
                                                Sticky Sidebar
                                            </label>
                                        </li>
                                        <!-- END Sidebar Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Header Options -->
                                        <li class="theme-extra visible-desktop">
                                            <label for="theme-header-top">
                                                <input type="checkbox" id="theme-header-top" name="theme-header-top" class="input-themed">
                                                Top fixed header
                                            </label>
                                            <label for="theme-header-bottom">
                                                <input type="checkbox" id="theme-header-bottom" name="theme-header-bottom" class="input-themed">
                                                Bottom fixed header
                                            </label>
                                        </li>
                                        <!-- END Header Options -->

                                        <!-- Divider -->
                                        <li class="divider visible-desktop"></li>

                                        <!-- Color Themes -->
                                        <li>
                                            <ul class="theme-colors clearfix">
                                                <li class="active">
                                                    <a href="javascript:void(0)" class="img-circle themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-amethyst themed-border-amethyst" data-theme="/assets/flatapp/css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-army themed-border-army" data-theme="/assets/flatapp/css/themes/army.css" data-toggle="tooltip" title="Army"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-asphalt themed-border-asphalt" data-theme="/assets/flatapp/css/themes/asphalt.css" data-toggle="tooltip" title="Asphalt"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-autumn themed-border-autumn" data-theme="/assets/flatapp/css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-cherry themed-border-cherry" data-theme="/assets/flatapp/css/themes/cherry.css" data-toggle="tooltip" title="Cherry"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-city themed-border-city" data-theme="/assets/flatapp/css/themes/city.css" data-toggle="tooltip" title="City"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-dawn themed-border-dawn" data-theme="/assets/flatapp/css/themes/dawn.css" data-toggle="tooltip" title="Dawn"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-deepsea themed-border-deepsea" data-theme="/assets/flatapp/css/themes/deepsea.css" data-toggle="tooltip" title="Deepsea"></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="img-circle themed-background-diamond themed-border-diamond" data-theme="/assets/flatapp/css/themes/diamond.css" data-toggle="tooltip" title="Diamond"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-fire themed-border-fire" data-theme="/assets/flatapp/css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-grass themed-border-grass" data-theme="/assets/flatapp/css/themes/grass.css" data-toggle="tooltip" title="Grass"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-leaf themed-border-leaf" data-theme="/assets/flatapp/css/themes/leaf.css" data-toggle="tooltip" title="Leaf"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-night themed-border-night" data-theme="/assets/flatapp/css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-ocean themed-border-ocean" data-theme="/assets/flatapp/css/themes/ocean.css" data-toggle="tooltip" title="Ocean"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-oil themed-border-oil" data-theme="/assets/flatapp/css/themes/oil.css" data-toggle="tooltip" title="Oil"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-stone themed-border-stone" data-theme="/assets/flatapp/css/themes/stone.css" data-toggle="tooltip" title="Stone"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-sun themed-border-sun" data-theme="/assets/flatapp/css/themes/sun.css" data-toggle="tooltip" title="Sun"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-tulip themed-border-tulip" data-theme="/assets/flatapp/css/themes/tulip.css" data-toggle="tooltip" title="Tulip"></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="img-circle themed-background-wood themed-border-wood" data-theme="/assets/flatapp/css/themes/wood.css" data-toggle="tooltip" title="Wood"></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END Color Themes -->
                                    </ul>
                                </li>
                                <!-- END Theme Options -->

                                <!-- Divider -->
                                <li class="divider-vertical remove-margin"></li>

                                <!-- Notifications -->
                                <!--<li class="dropdown dropdown-notifications">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-warning-sign"></i>
                                        <span class="badge badge-neutral">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert">
                                                <i class="icon-bell"></i> <strong>App</strong> Please pay attention!
                                            </div>
                                            <div class="alert alert-error">
                                                <i class="icon-bell-alt"></i> <strong>App</strong> There was an error!
                                            </div>
                                            <div class="alert alert-info">
                                                <i class="icon-bolt"></i> <strong>App</strong> Info message!
                                            </div>
                                            <div class="alert alert-success">
                                                <i class="icon-bullhorn"></i> <strong>App</strong> Service restarted!
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="icon-warning-sign pull-right"></i>Notification Center</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <!-- END Notifications -->

                                <!-- Messages -->
                                <!--<li class="dropdown dropdown-messages">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-envelope-alt"></i>
                                        <span class="badge badge-neutral display-none"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="Newbie">
                                                    <img src="/assets/flatapp/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><span class="label label-success">1 min ago</span><a href="javascript:void(0)">Username</a></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="Pro">
                                                    <img src="/assets/flatapp/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><span class="label label-success">2 hours ago</span><a href="javascript:void(0)">Username</a></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="media">
                                                <a class="pull-left" href="javascript:void(0)" data-toggle="tooltip" title="VIP">
                                                    <img src="/assets/flatapp/img/placeholders/image_64x64_dark.png" alt="fakeimg" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading clearfix"><a href="javascript:void(0)">Username</a><span class="label label-success">3 days ago</span></h5>
                                                    <div class="media">Lorem ipsum dolor sit amet, consectetur..</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="page_comp_inbox.html"><i class="icon-envelope-alt pull-right"></i>Message Center</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <!-- END Messages -->
                            </ul>
                            <!-- END Header Nav -->

                            <!-- Mobile Navigation, Shows up on mobile -->
                            <ul class="nav pull-left visible-phone">
                                <li>
                                    <!-- It is set to open and close the main navigation on mobiles. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                            <!-- END Mobile Navigation, Shows up on mobile -->
                        </div>
                        <!-- END Header Nav Section -->
                    </div>
                    <!-- END div#row-fluid -->
                </div>
                <!-- END Navbar Inner -->
            </header>
            <!-- END Header -->
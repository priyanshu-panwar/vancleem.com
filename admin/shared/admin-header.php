<?php
if(!isset($page_title)) {$page_title = 'Admin Area';}
?>


<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>vanCleem Admin | <?php echo $page_title; ?></title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">        
        <link href="vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
        
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        
    </head>
    <body data-ma-header="blue">
        <header id="header" class="media">
            <div class="pull-left h-logo">
                <a href="index.php" class="hidden-xs">
                    vanCleem
                    <small>site admin</small>
                </a>
                
                <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                    <div class="mc-wrap">
                        <div class="mcw-line top palette-White bg"></div>
                        <div class="mcw-line center palette-White bg"></div>
                        <div class="mcw-line bottom palette-White bg"></div>
                    </div>
                </div>
            </div>

            <div class="media-body">
                <form class="p-relative">
                    <input type="text" class="hs-input" placeholder="Search the web...">
                    <i class="zmdi zmdi-google hs-reset" data-ma-action="search-clear"></i>
                </form>
            </div>
                                
        </header>
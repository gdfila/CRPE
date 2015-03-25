<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>(function(){document.documentElement.className='js'})();</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/index.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/centre.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/concours.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/anne.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.corr.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/crpe.css">


    <?php wp_head(); ?>
</head>

<body>

<!--NAV-->

    <!--header class="nav_header nav_header_fixed container-fluid"-->
    <header class="nav_header hidden-xs">
        <div class="top_nav">
            <div class="container">
                <a class="logo_nav" href="/galien_crpe/">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" />
                </a>
                <p>formation au concours de recrutement de professeur des écoles</p>
            </div>
        </div>
        <div class="content_nav">
            <div class="container">
                <nav>
                    <?php
                        wp_nav_menu([ 
                        'theme_location' => 'nav',
                        'container' => 'navbar-header', ]);
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <div id="action">
        <a href="/galien_crpe/contact/contact">Rappelez-moi</a>
        <a href="/galien_crpe/contact/contact">Contact</a>
        <a href="/galien_crpe/contact/brochure">Brochure</a>
        <a href="http://www.studius.fr">Studius</a>
    </div>
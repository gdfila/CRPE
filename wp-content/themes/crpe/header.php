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

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/index.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/crpe.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/centre.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/concours.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/anne.css">


    <?php wp_head(); ?>
</head>

<body>

<!--NAV-->

    <!--header class="nav_header nav_header_fixed container-fluid"-->
    <header class="nav_header container-fluid hidden-xs">

        <div class="row"> 
            <div class="col-sm-2">
                <a href="/galien_crpe/"><img class="img-responsive logo_galien_crpe hvr-pulse-shrink" src="<?php echo get_template_directory_uri() ?>/img/accueil/logo_galien.png" alt="" class="logo" /></a>
                </div>
             <div class="container">
                
                 <div class="col-sm-2">

                <div class="col-sm-7 col-sm-offset-1">
                     <nav class="navbar navbar-me">
                        <?php
                            wp_nav_menu([ 
                            'theme_location' => 'nav',
                            'container' => 'navbar-header', ]);
                        ?>
                     </nav>
                </div>
            </div>
         </div>
        
    </header>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        
        
        <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <?php wp_head(); ?> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="root">
            <header>
                <div class="wrapper">
                    <a href="index.html"><h1><?php bloginfo('name'); ?></h1></a>
                    <nav>
                        
                                
                            
                            <?php wp_nav_menu(array('menu'=>'Header Menu')); ?>
                        
                    </nav>
                </div>
            </header>
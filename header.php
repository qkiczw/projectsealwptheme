<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="pl"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
                <nav class="navbar navbar-expand-md navbar-light bg-faded">
                    <a class="navbar-brand" href="#"><img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_min.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                            <?php
                                wp_nav_menu([
                                'menu'            => 'main',
                                'theme_location'  => 'main',
                                'container'       => 'div',
                                'container_id'    => 'bs4navbar',
                                'container_class' => 'collapse navbar-collapse justify-content-end',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalker()
                                ]);
                            ?>
                </nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 header-text">
                            <div class="text-boarder">
                                <h1>Senior Education for Active Living</h1>
                            </div>
                            <div class="see-more-btn">
                                <a href="#about-us">Dowiedz się więcej...</a>
                            </div>
                        </div>
                    </div>
                </div>
         </header>
         <div class="container-fluid">  <!-- start - main div -->
            <div class="row">   <!-- start - main row -->
            

            <div class="col-sm-12">
                
             </div>

            
           
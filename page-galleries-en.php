<?php 

    /*
    Template Name: Galleries EN
    */

?>

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

        <header class="header-sub-page">
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
            <!-- New menu -->
            <!-- <nav class="main-menu">
                <a class="navbar-brand" href="#"><img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_min.png"></a>
                <?php wp_nav_menu(array('theme_location_'=>'main')); ?>
                <button class="hamburger">
                    <span class="hamburger__box">
                        <span class="hamburger__inner"></span>
                    </span>
                </button>
            </nav>  -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 hero-text">
                        <div class="hero-text-content">
                            <h1 class="hero-text-title">Results of the project</h1>
                            <a href="#main-content"><img class="header-arrows-icon" src="<?php echo get_template_directory_uri(); ?>/img/arrows-down.png"></a></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 header-social-icons">
                        <p>Find us here</p>
                        <p><a href="#"><img class="header-social-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/fb-icon.png"></a></p>
                        <p><a href="#"><img class="header-social-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/insta-icon.png"></a></p>
                    </div>
                </div>
            </div>
        </header>
          


<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>

    <main id="main-content">
        <section id="single-page" class="single-page"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 single-page-content"> 
                        <?php the_content(); ?>
                    </div>
                </div>
        </section>
    </main>
    
    <?php endwhile;
endif;
    
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 footer-col">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_white.png"></a>
                <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
            </div>
            <div class="col-md-6 col-lg-3 footer-col"> 
                <h5>MENU</h5>
                <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
            </div>
            <div class="col-md-6 col-lg-3 footer-col">
                <p>ADDRESS</p>
                <ul>
                    <li>
                        <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/place.png"> 
                        Centrum Kształcenia Ustawicznego
                        im. Bohaterów Wybrzeża w Sopocie <br />
                        81-704 Sopot<br />
                        ul. Tadeusza Kościuszki 22-24<br />
                    </li>
                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> phone: +48 58 550 33 65</li>
                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> phone: 791 983 610</li>
                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.png"> e-mail: <a href="mailto:cku-projekty@wp.pl">cku-projekty@wp.pl</a></li>
                </ul> 
            </div>
            <div class="col-md-6 col-lg-3 footer-col">
                <p>LINKS</p>
                <ul>
                    <li><a href="http://ckusopot.pl" target="_blank">CKU SOPOT</a></li>
                    <li><a href="http://kmaras.meb.gov.tr/" target="_blank">KMEM</a></li>
                    <li><a href="http://asprometeo.altervista.org/prometeo/Home.html" target="_blank">PROMETEO</li>
                    <li><a href="http://www.istitutosorditorino.org/" target="_blank">ISTUTO</a></li>
                    <li><a href="http://glafka.cz" target="_blank">GLAFKA</a></li>
                </ul>
            </div>      
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
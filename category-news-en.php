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
        <header class="header header__sub-page">
            <!-- New menu -->
            <nav class="main-menu">
                <div class="main-menu__brand">
                    <a class="navbar-brand" href="#"><img class="nav__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_min.png"></a>
                    <button class="hamburger">
                        <span class="hamburger__box">
                            <span class="hamburger__inner"></span>
                        </span>
                    </button>
                </div>
                <div class="main-menu__items">
                    <?php wp_nav_menu(array('theme_location_'=>'main')); ?>
                </div>
            </nav> 
            <div class="container-fluid">
                <div class="row hero">
                    <div class="col-lg-6 hero__text">
                        <div class="hero__text__content">
                            <h1 class="hero__text__title">Check what happened or will happen</h1>
                            <a href="#main-content"><img class="header__arrows-icon" src="<?php echo get_template_directory_uri(); ?>/img/arrows-down.png"></a></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 header__social-icons">
                        <p>Find us here <strong>&raquo</strong></p>
                        <p><a href="https://www.facebook.com/seal.erasmusproject"><img class="header-social-icons__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/fb-icon.png"></a></p>
                        <p><a href="#"><img class="header-social-icons__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/insta-icon.png"></a></p>
                    </div>
                </div>
            </div>
        </header>
    <?php 
    if( have_posts() ):
    while( have_posts() ): the_post(); ?>
    <main id="main-content">
        <div class="container posts__list">
            <div class="row post">
                <div class="col-sm-12 col-lg-3 post__thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="col-sm-12 col-lg-9 post__content">
                    <div class="post__title">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="post__content__short">
                        <p><?php the_excerpt() ?></p>
                    </div>
                    <div class="post__content_full-view">
                        <a href="<?php the_permalink() ?>" class="post__btn__more">More  &raquo</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <?php next_posts_link( 'Older Entries »', 0 ); ?>
                </div>
            </div>
        </div>
    </main>
    
    <?php endwhile; ?>
    <div class="container">
        <div class="row">
            <div class="col-6 pagination text-left">
                <?php next_posts_link('&#171; Older posts'); ?>
            </div>
            <div class="col-6 pagination text-right">
                <?php previous_posts_link('Newer posts &#187;'); ?> 
            </div>
        </div>
    </div>
<?php
endif;    
?>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container"> 
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content_item_title">
                                    Erasmus+
                                </div>
                                <div class="site-footer__content_item_desc">
                                    <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content__item">
                                    <div class="site-footer__content_item_title">
                                        Contact
                                    </div>
                                    <div class="site-footer__content_item_desc">
                                        <ul>
                                            <li>Centrum Kształcenia Ustawicznego im. Bohaterów Wybrzeża w Sopocie</li>
                                            <li>ul. Tadeusza Kościuszki 22-24</li>
                                            <li>81-704 Sopot</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> phone: +48 58 550 33 65</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> phone: 791 983 610</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/email.png"> e-mail: <a href="mailto:cku-projekty@wp.pl">cku-projekty@wp.pl</a></li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/fb-icon-w.png"> <a href="https://www.facebook.com/senioractiveliving/">Facebook</a></li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/insta-icon-w.png"> <a href="#">Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content_item_title">
                                    Partners
                                </div>
                                <div class="site-footer__content_item_desc">
                                    <ul>
                                        <li>&#187; <a href="http://ckusopot.pl" target="_blank">CKU SOPOT</a></li>
                                        <li>&#187; <a href="http://kmaras.meb.gov.tr/" target="_blank">KMEM</a></li>
                                        <li>&#187; <a href="http://asprometeo.altervista.org/prometeo/Home.html" target="_blank">PROMETEO</li>
                                        <li>&#187; <a href="http://www.istitutosorditorino.org/" target="_blank">ISTUTO</a></li>
                                        <li>&#187; <a href="http://glafka.cz" target="_blank">GLAFKA</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content_item_title">
                                    
                                </div>
                                <div class="site-footer__content_item_desc">
                                        <figure>
                                            <img class="site-footer__logo" src="<?php echo get_template_directory_uri(); ?>/img/seal_logo_white.png" alt="Project Seal Logo">
                                        </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__rights">
                <span>Copyright © 2018 Project Seal</span>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="cs"> <!--<![endif]-->
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
        <div class="wrapper">
        <header class="header header-subpage">
            <nav class="header__nav">
                <div class="header__nav__logo"><a href="https://sealproject.eu"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-logo-color.png" class="img-fluid header__nav__logo__image"></a></div>
                <div class="header__nav__items">
                    
                    <div class="header__nav__items__mobile">
                        <button class="hamburger">
                            <span class="hamburger__box">
                                <span class="hamburger__inner"></span>
                            </span>
                        </button>
                        <div class="header__nav__items__mobile__item">
                            <?php wp_nav_menu(array('theme_location_'=>'main')); ?>
                        </div>
                    </div>
                    <div class="header__nav__items__desktop">
                        <?php wp_nav_menu(array('theme_location_'=>'main')); ?>
                    </div>
                </div>                
            </nav>
            <div class="header__hero">
                <div class="header__hero__content">
                    <h1 class="header__hero__content__title">Fotografie z našich setkání a výletů</h1>
                    <div class="header__hero__content__arrow">
                        <a href="#main-content"><img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid"></a>
                    </div>
                </div>  
            </div>
            <div class="header__social-icons">
                <div class="header__social-icons__title">Najdete nás zde <strong>&raquo</strong></div>
                <div class="header__social-icons__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb-icon-w.png" class="img-fluid header__social-icons__icon__image">
                </div>
                <div class="header__social-icons__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/insta-icon-w.png" class="img-fluid header__social-icons__icon__image">
                </div>
            </div>
        </header>
        <!-- End of new test header -->
    <main id="main-content">
    <div class="container posts-gallery__list">
            <div class="row post-gallery__row">
                <?php 
                if( have_posts() ):
                while( have_posts() ): the_post(); ?>
                    <article class="col-sm-12 col-md-6 col-lg-3 post-gallery__item">
                        <div class="post-gallery__item__thumbnail">
                            <a href="<?php the_permalink() ?>"> 
                                <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid post-gallery__item__thumbnail')); ?>
                            </a>
                        </div>
                        <div class="post-gallery__item__link text-center">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </div>
                    </article>
                <?php endwhile; ?>             
            </div>
            <div class="row">
                <div class="col-6">
                    <?php next_posts_link( 'Older Entries »', 0 ); ?>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-6 pagination text-left">
                <?php next_posts_link('&#171; Starší galerie'); ?>
            </div>
            <div class="col-6 pagination text-right">
                <?php previous_posts_link('Novější galerie &#187;'); ?> 
            </div>
        </div>
    </div>
<?php
endif;    
?>
    </main>
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
                                    <p>Projekt SEAL je financován s podporou Evropské komise v rámci programu Erasmus+. Evropská komise však nenese odpovědnost za jakékoli použití informací v něm obsažených.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content__item">
                                    <div class="site-footer__content_item_title">
                                        Kontakt
                                    </div>
                                    <div class="site-footer__content_item_desc">
                                        <ul>
                                            <li>Centrum Kształcenia Ustawicznego im. Bohaterów Wybrzeża w Sopocie</li>
                                            <li>ul. Tadeusza Kościuszki 22-24</li>
                                            <li>81-704 Sopot</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> telefon: +48 58 550 33 65</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> telefon: 791 983 610</li>
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
                                    Partneři
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
                <span>Autorská práva © 2020 Project Seal</span>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>
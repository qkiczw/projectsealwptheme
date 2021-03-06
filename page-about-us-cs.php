<?php 

    /*
    Template Name: About Us CS
    */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="cs"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SEAL - Senior Education For Active Living</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="wrapper">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                    <h1 class="header__hero__content__title">Přečtěte si více o SEAL</h1>
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
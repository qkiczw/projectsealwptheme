<?php 

    /*
    Template Name: Front Page PL
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
                    <div class="col-lg-6 hero-text">
                        <div class="hero-text-content">
                            <h1 class="hero-text-title">SENIOR EDUCATION FOR ACTIVE LIVING</h1>
                            <h5 class="hero-text-slogan">
                            SEAL to międzynarodowy projekt, który ma na celu wypracowanie innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów.
                            </h5>
                            <a class="btn-grey" href="#fp-about-us-content">zobacz</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 header-social-icons">
                        <p>Znajdź nas tutaj</p>
                        <p><a href="#"><img class="header-social-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/fb-icon.png"></a></p>
                        <p><a href="#"><img class="header-social-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/insta-icon.png"></a></p>
                    </div>
                </div>
            </div>
        </header>
          

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>

    <main>
        <section id="about-us" class="about-us"> 
            <div class="container">
                <div class="triangle-left-side">
                    <!-- just for triangle -->
                </div>
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>O nas</h2>
                        </div>
                    </div>
                </div>
                <div class="row"> <!-- Section content  -->
                    <div class="col-lg-5">
                        <figure class=" about-us-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/seal_logo.png" class="img-fluid project-logo">
                        </figure>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-us-short-info">
                            <p>SEAL to międzynarodowy projekt, który ma na celu wypracowanie  innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów. W efekcie ma powstać międzynarodowy poradnik aktywizacji i edukacji seniorów. </p>
                            <a href="http://qki.cba.pl/seal/pl/o-nas/" class="btn-grey">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>Strona internetowa została zrealizowana przy wsparciu finansowym Komisji Europejskiej. Treść strony odzwierciedla jedynie stanowisko jej autorów i Komisja Europejska oraz Narodowa Agencja Programu Erasmus+ nie ponoszą odpowiedzialności za jej zawartość merytoryczną. </p>
                    </div>
                </div>
            </div> 
        </section>
        <section id="partners" class="partners"> <!-- Partners -->
            <div class="container">
                <div class="triangle-right-side">
                    <!-- just for triangle -->
                </div> 
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Partnerzy</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-ckusopot.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">cku sopot</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-glafka.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">galfka</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-istituto.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">istituto</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-prometeo.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">prometeo</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-kmem.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">kmem</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-erasmus.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">erasmus+</h3>
                            <p class="partners-partner-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae viverra lorem, ut eleifend magna. Phasellus egestas nisi non accumsan tristique. Maecenas in varius tortor, non fringilla leo. Suspendisse potenti. Duis efficitur fringilla interdum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fp-galleries-content" class="section-galleries"> 
        <div class="container">
             <div class="row"> <!-- Section title -->
                <div class="col-12"> 
                    <div class="section-title section-title-alternative"> 
                        <h2>Galerie</h2>
                    </div>
                </div>
            </div>
            <div class="row section-content fp-galleries-content"> <!-- Section content  -->
                <div class="col-12 col-md-4 section-gallery">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery01.jpg" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-4 section-gallery">   
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery02.jpg" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-4 section-gallery"> 
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery03.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="http://qki.cba.pl/seal/pl/galerie/" class="btn-see-more-galleries">Zobacz więcej galerii</a>
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
                            <p>Strona internetowa została zrealizowana przy wsparciu finansowym Komisji Europejskiej. Treść strony odzwierciedla jedynie stanowisko jej autorów i Komisja Europejska oraz Narodowa Agencja Programu Erasmus+ nie ponoszą odpowiedzialności za jej zawartość merytoryczną. </p>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col"> 
                            <h5>MENU</h5>
                            <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>ADRES</p>
                                <ul>
                                    <li>
                                        <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/place.png"> 
                                        Centrum Kształcenia Ustawicznego
                                        im. Bohaterów Wybrzeża w Sopocie <br />
                                        81-704 Sopot<br />
                                        ul. Tadeusza Kościuszki 22-24<br />
                                    </li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> tel: +48 58 550 33 65</li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> tel: 791 983 610</li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.png"> e-mail: <a href="mailto:cku-projekty@wp.pl">cku-projekty@wp.pl</a></li>
                                </ul> 
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>PRZYDATNE LINKI</p>
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
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
                        <div class="col-sm-6 header-text">
                            <div class="text-boarder">
                                <h1 class="slogan-biig">Przez edukację do aktywnego życia</h1>
                                <p class="slogan-little">Jakiś mały miły slogan</p>
                            </div>
                            <div class="see-more-btn">
                                <a href="http://qki.cba.pl/seal/pl/strona-startowa/#fp-about-us-content">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
         </header>
          

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>

    <main>
        <section id="fp-about-us-content" class="fp-about-us-content"> 
            <div class="container ">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h1>O nas</h1>
                        </div>
                    </div>
                </div>
                <div class="row"> <!-- Section content  -->
                    <div class="col-12">
                        <div class="row section-content"> 
                            <div class="col-md-5 col-lg-4 seal-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/seal_logo.png" class="img-fluid">
                            </div>
                            <div class="col-md-7 col-lg-8 seal-short-info">
                                <p>SEAL to międzynarodowy projekt, który ma na celu wypracowanie  innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów. W efekcie ma powstać międzynarodowy poradnik aktywizacji i edukacji seniorów. </p>
                                <a href="http://qki.cba.pl/seal/pl/o-nas/" class="btn-see-more">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer"> <!-- Disclaimer -->
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>Strona internetowa została zrealizowana przy wsparciu finansowym Komisji Europejskiej. Treść strony odzwierciedla jedynie stanowisko jej autorów i Komisja Europejska oraz Narodowa Agencja Programu Erasmus+ nie ponoszą odpowiedzialności za jej zawartość merytoryczną. </p>
                    </div>
                </div>
                <div class="row seal-partners-section">  <!-- Partners -->
                    <h3>Nasi partnerzy</h3>
                    <div class="col-12 seal-partners">
                        <div class="seal-partner">
                            <a href="http://ckusopot.pl" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-ckusopot.jpg" class="img-fluid seal-partner-logo"></a>
                        </div>
                        <div class="seal-partner">
                            <a href="http://glafka.cz" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-glafka.jpg" class="img-fluid seal-partner-logo"></a>
                        </div>
                        <div class="seal-partner">
                            <a href="http://www.istitutosorditorino.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-istituto.jpg" class="img-fluid seal-partner-logo"></a>
                        </div>
                        <div class="seal-partner">
                            <a href="http://asprometeo.altervista.org/prometeo/Home.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-prometeo.jpg" class="img-fluid seal-partner-logo"></a>    
                        </div>
                        <div class="seal-partner">
                            <a href="http://kmaras.meb.gov.tr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-kamramanmaras.jpg" class="img-fluid seal-partner-logo"></a>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section id="fp-galleries-content" class="section-galleries"> 
        <div class="container">
             <div class="row"> <!-- Section title -->
                <div class="col-12"> 
                    <div class="section-title"> 
                        <h1>Galerie</h1>
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
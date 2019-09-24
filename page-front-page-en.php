<?php 

    /*
    Template Name: Front Page EN
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
                            <h1 class="hero-text-title">SENIOR EDUCATION FOR ACTIVE LIVING</h1>
                            <h5 class="hero-text-slogan">
                                SEAL Project SEAL is international initiative aimed to develop innovative educational tools used for education and activation of seniors.
                            </h5>
                            <a class="btn-grey" href="#fp-about-us-content">Start Journey</a>
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

<main>
        <section id="about-us" class="about-us"> 
            <div class="container">
                <div class="triangle-left-side">
                    <!-- just for triangle -->
                </div>
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>About Us</h2>
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
                            <p>SEAL Project SEAL is international initiative aimed to develop innovative educational tools used for education and activation of seniors. An international guide of education and activation of seniors is going to be created at the project end.</p>
                            <a href="http://qki.cba.pl/seal/pl/o-nas/" class="btn-grey">More about Us</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
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
                            <h2>Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-kmem.png" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">KAHRAMANMARAS II MILLI EGITIM MUDURLUGU</h3>
                            <p class="partners-partner-description">
                                Public body which coordinates and supervises over 1084 schools. The employes from the research and development department are highly experienced in various types of projects (including Erasmus + projects). The institution is responsible for organizing the various courses for adults and for teachers in whole region. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-glafka.png" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">galfka</h3>
                            <p class="partners-partner-description">
                                Educational and training organisation which provides education and consulting in the area of lifelong learning and development of innovative educational methods. Provides coursses and support for groups experiencing social exclusion. Support is mainly focused on development of vocational skills of beneficiaries. Provides IT courses for seniors (aged 60 +) .  
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-istituto.png" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">istituto</h3>
                            <p class="partners-partner-description">
                                Non-governmental organisation founded in 1814 to provide support for people with sensory disabilities and to train their teacher. IST provides various types of support like: daily care, assisted housing, assisted learning, therapy workshops (painting, cooking, cinema, sport activities), VET education of disabled people and training for operator working in the sector. Highly experienced in Erasmus +projects.  
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-prometeo.png" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">prometeo</h3>
                            <p class="partners-partner-description">
                            is an non govermental organisation which provides educational offer and support for members of institutions working in the field of education of adults. Is involved in projects and programmes connected with: development of  vocational skills of students; tourism and social inclusion, integration of imigrants with local societies, education of elderly people; development of innovative educational tools. Organisation highly experienced in activities against rasism and working for imigrants; cooperates with the local goverment of Calabria region; has a wide experience in transnational projects, sincluding Erasmus + projects. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners-partner">
                            <figure class="partners-partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-ckusopot.png" class="img-fluid">
                            </figure>
                            <h3 class="partners-partner-name">cku sopot</h3>
                            <p class="partners-partner-description">
                                Centre for Continuing Education in Sopot is a public school  providing formal and informal education for adults; at this moment CKU Sopot provides VET courses in profesions such as: photographer, informatician, acountant, grafic designer. CKU Sopot provides also education and various activities for elderly people at Third Age University ( with approximately 950 students). CKU Sopot is in a close cooperation with Municipality of Sopot. Within CKU Sopot institutions there is also teacher training centre. CKU Sopot is highly experienced in transnational cooperation including Erasmus + projects.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                        <h2>Galleries</h2>
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
                <a href="http://qki.cba.pl/seal/pl/galerie/" class="btn-see-more-galleries">See more galleries</a>
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
                            <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein. </p>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col"> 
                            <h5>MENU</h5>
                            <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>ADRESS</p>
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
                            <p>Links</p>
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
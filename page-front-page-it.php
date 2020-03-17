<?php 

    /*
    Template Name: Front Page IT
    */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="it"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SEAL - Senior Education For Active Living</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- New test Header -->
        <div class="wrapper">
        <header class="header">
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
                    <h1 class="header__hero__content__title">SENIOR EDUCATION FOR ACTIVE LIVING</h1>
                    <h3 class="header__hero__content__slogan">Il progetto SEAL è un'iniziativa internazionale volta a sviluppare strumenti educativi innovativi usati per l'educazione e l'attivazione degli anziani. </h3>
                    <div class="header__hero__content__btn-area">
                        <a href="#about-us"><button class="header__hero__content__btn-area__btn">leggi di più</button></a>
                    </div>
                    <div class="header__hero__content__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid">
                    </div>
                </div>  
            </div>
            <div class="header__social-icons">
                <div class="header__social-icons__title">Trovaci qui <strong>&raquo</strong></div>
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

<main>
        <section id="about-us" class="about-us"> 
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Riguardo a noi</h2>
                        </div>
                    </div>
                </div>
                <div class="row about-us__content"> <!-- Section content  -->
                    <div class="col-md-5">
                        <figure class=" about-us__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/seal_logo.png" class="img-fluid project-logo">
                        </figure>
                    </div>
                    <div class="col-md-7">
                        <div class="about-us__short-info">
                            <p>Il progetto SEAL è un'iniziativa internazionale volta a sviluppare strumenti educativi innovativi usati per l'educazione e l'attivazione degli anziani. Alla fine del progetto verrà creata una guida internazionale per l'educazione e l'attivazione degli anziani.</p>
                            <a href="https://sealproject.eu/about-us-en/" class=" btn--blue">Maggiori informazioni su di noi</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>Il progetto SEAL è stato finanziato con il sostegno della Commissione europea nell'ambito del programma Erasmus +. Tuttavia, la Commissione europea non può essere ritenuta responsabile per qualsiasi uso che possa essere fatto delle informazioni in essa contenute.</p>
                    </div>
                </div>
            </div> 
        </section>
        <section id="partners" class="partners"> <!-- Partners -->
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Partner</h2>
                        </div>
                    </div>
                </div>
                <div class="row partners__row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/kmem.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">kmem</h3>
                            <p class="partners__row__partner__description">
                                KMEM è un ente pubblico che coordina e supervisiona oltre 1084 scuole. I dipendenti del dipartimento di ricerca e sviluppo hanno una grande esperienza in vari tipi di progetti (inclusi i progetti Erasmus +). L'istituzione è responsabile dell'organizzazione dei vari corsi per adulti e insegnanti in tutta la regione. Supporta l'acquisizione e lo sviluppo delle competenze richieste nel mercato del lavoro; ottenere qualifiche per integrare l'istruzione.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="http://kmaras.meb.gov.tr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/glafka.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">glafka</h3>
                            <p class="partners__row__partner__description">
                                GLAFKA è un'organizzazione educativa e formativa che fornisce istruzione e consulenza nell'area dell'apprendimento permanente e dello sviluppo di metodi educativi innovativi, competenze professionali dei beneficiari. Fornisce corsi e supporto per i gruppi che vivono l'esclusione sociale. Offre corsi di informatica per gli anziani (dai 60 anni in su). GLAFKA ha una vasta esperienza in progetti transnazionali tra cui Erasmus +.  
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="http://glafka.cz/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/ist.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">ist</h3>
                            <p class="partners__row__partner__description">
                                L'IST è un'organizzazione non governativa fondata nel 1814 per fornire supporto alle persone con disabilità sensoriali e per formare il loro insegnante. L'IST offre vari tipi di supporto come: assistenza quotidiana, alloggio assistito, apprendimento assistito, seminari di terapia (pittura, cucina, cinema, attività sportive), istruzione IFP per disabili e formazione per operatori che lavorano nel settore. Molto esperto in progetti Erasmus +.  
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="http://www.istitutosorditorino.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-prometeo.png" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">prometeo</h3>
                            <p class="partners__row__partner__description">
                                PROMETEO è un'organizzazione non governativa che offre offerta educativa e supporto ai membri delle istituzioni che lavorano nel campo dell'educazione degli adulti. È coinvolto in progetti e programmi connessi a: sviluppo delle capacità professionali degli studenti; turismo; inclusione sociale degli immigrati e attività contro il rasismo; educazione degli anziani; sviluppo di strumenti educativi innovativi. PROMETEO ha una vasta esperienza nella cooperazione transnazionale, inclusi i progetti Erasmus +. 
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="http://asprometeo.altervista.org/prometeo/Home.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/cku.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">cku sopot</h3>
                            <p class="partners__row__partner__description">
                                CKU Sopot è una scuola pubblica che fornisce istruzione formale e informale per adulti; in questo momento offre corsi di IFP in professioni come: fotografo, informatico, contabile, progettista grafico. La CKU Sopot organizza vari seminari per gli anziani all'Università della Terza Età (con circa 950 studenti). All'interno della CKU Sopot c'è anche un centro di formazione per insegnanti. CKU Sopot ha una grande esperienza nella cooperazione transnazionale, inclusi i progetti Erasmus +.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="http://ckusopot.pl" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/erasmus.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">erasmus+</h3>
                            <p class="partners__row__partner__description">
                                Erasmus+ is the EU's programme to support education, training, youth and sport in Europe. Its budget of €14.7 billion will provide opportunities for over 4 million Europeans to study, train, and gain experience abroad.Set to last until 2020, Erasmus+ doesn't just have opportunities for students. Merging seven prior programmes, it has opportunities for a wide variety of individuals and organisations.Detailed information on these opportunities, including eligibility criteria, is available in the Erasmus+ Programme Guide. An indicative funding guide for some centralised opportunities is also available.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Links</div>
                                <div class="partners__row_partner__link-area__icons">
                                    <div class="partners__row_partner__link-area__icons__icon"><a href="https://ec.europa.eu/programmes/erasmus-plus/about_en" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-www.png" class="img-fluid"></a></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-facebook.png" class="img-fluid"></div>
                                    <div class="partners__row_partner__link-area__icons__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/partner-social-icon-instagram.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fp-galleries-content" class="fp-galleries"> 
        <div class="container">
             <div class="row"> <!-- Section title -->
                <div class="col-12"> 
                    <div class="section-title section-title--alternative"> 
                        <h2>Gallerie</h2>
                    </div>
                </div>
            </div>
            <div class="row section-content fp-galleries__content"> <!-- Section content  -->
                <!-- Gallery Item -->
                <div class="col-12 col-md-6 col-lg-4 fp-galleries__content__items">
                    <div class="fp-galleries__content__items__item">
                        <div class="fp-galleries__content__items__item__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery01.jpg" class="img-fluid">
                        </div>
                        <div class="fp-galleries__content__items__item__desc">
                            <div class="fp-galleries__content__items__item__desc__title text-center">Meeting in Sopot</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">We met in Sopot on 28-29 January 2019 for the first time.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">
                                <a href="https://sealproject.eu/en/2020/02/22/meeting-nr-01/">Accedere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="col-12 col-md-6 col-lg-4 fp-galleries__content__items">
                    <div class="fp-galleries__content__items__item">
                        <div class="fp-galleries__content__items__item__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery02.jpg" class="img-fluid">
                        </div>
                        <div class="fp-galleries__content__items__item__desc">
                            <div class="fp-galleries__content__items__item__desc__title  text-center">Meeting in Turin</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">On 18-19 July 2019 the second meeting of the SEAL project partnerss took place. </div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-02/">Accedere</a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="col-12 col-md-6 col-lg-4 fp-galleries__content__items">
                    <div class="fp-galleries__content__items__item">
                        <div class="fp-galleries__content__items__item__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fp_gallery03.jpg" class="img-fluid">
                        </div>
                        <div class="fp-galleries__content__items__item__desc">
                            <div class="fp-galleries__content__items__item__desc__title text-center">Meeting in Kahramanmaras</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">On 26-27.09.2019 in Turkey third meeting of partners of the international project SEAL took place.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-03/">Accedere</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="https://sealproject.eu/en/category/galleries-en/" class="btn--white">Vedi più gallerie</a>
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
                                    <p>Il progetto SEAL è stato finanziato con il sostegno della Commissione europea nell'ambito del programma Erasmus +. Tuttavia, la Commissione europea non può essere ritenuta responsabile per qualsiasi uso che possa essere fatto delle informazioni in essa contenute.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content__item">
                                    <div class="site-footer__content_item_title">
                                        Contatto
                                    </div>
                                    <div class="site-footer__content_item_desc">
                                        <ul>
                                            <li>Centrum Kształcenia Ustawicznego im. Bohaterów Wybrzeża w Sopocie</li>
                                            <li>ul. Tadeusza Kościuszki 22-24</li>
                                            <li>81-704 Sopot</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> telefono: +48 58 550 33 65</li>
                                            <li><img class="site-footer__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> telefono: 791 983 610</li>
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
                                    Partner
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
                <span>Copyright © 2020 Project Seal</span>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>
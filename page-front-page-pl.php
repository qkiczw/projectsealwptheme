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
                    <h3 class="header__hero__content__slogan">SEAL to międzynarodowy projekt, który ma na celu wypracowanie innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów.</h3>
                    <div class="header__hero__content__btn-area">
                        <a href="#about-us"><button class="header__hero__content__btn-area__btn">więcej</button></a>
                    </div>
                    <div class="header__hero__content__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid">
                    </div>
                </div>  
            </div>
            <div class="header__social-icons">
                <div class="header__social-icons__title">Znajdź nas tutaj <strong>&raquo</strong></div>
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
                            <h2>O nas</h2>
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
                            <p>SEAL to międzynarodowy projekt, który ma na celu wypracowanie innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów. W efekcie ma powstać międzynarodowy poradnik aktywizacji i edukacji seniorów.</p>
                            <a href="https://sealproject.eu/about-us-pl/" class=" btn--blue">Więcej o nas</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>Strona internetowa została zrealizowana przy wsparciu finansowym Komisji Europejskiej. Treść strony odzwierciedla jedynie stanowisko jej autorów i Komisja Europejska oraz Narodowa Agencja Programu Erasmus+ nie ponoszą odpowiedzialności za jej zawartość merytoryczną.</p>
                    </div>
                </div>
            </div> 
        </section>
        <section id="partners" class="partners"> <!-- Partners -->
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Partnerzy</h2>
                        </div>
                    </div>
                </div>
                <div class="row partners__row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-kmem.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">kmem</h3>
                            <p class="partners__row__partner__description">
                            KMEM jest instytucją publiczną, która koordynuje i nadzoruje ponad 1084 szkoły. Pracownicy działu badań i rozwoju mają duże doświadczenie w realizacji różnego rodzaju projektów, w tym projektów we współpracy międzynarodowej (m.in. w ramach programu Erasmus +). Instytucja ta jest odpowiedzialna za organizację różnych kursów dla osób dorosłych i dla nauczycieli w całym regionie. Wspiera nabywanie i rozwój kompetencji wymaganych na rynku pracy; pozyskanie kwalifikacji celem uzupełnienia wykształcenia.   
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-glafka.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">glafka</h3>
                            <p class="partners__row__partner__description">
                            GLAFKA jest organizacją edukacyjno-szkoleniową świadczącą usługi edukacyjne i doradcze w zakresie kształcenia ustawicznego ( w tym zawodowego) oraz rozwoju innowacyjnych metod edukacyjnych. Podejmuje działania w obszarze wspierania grup doświadczających wykluczenia społecznego. Prowadzi kursy informatyczne dla seniorów (w wieku 60+).  GLAFKA posiada znaczne doświadczenie w realizacji projektów międzynarodowych, w tym w ramach programu Erasmus+.  
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-ist.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">ist</h3>
                            <p class="partners__row__partner__description">
                                IST jest organizacją pozarządową założoną w celu udzielania wsparcia osobom z niepełnosprawnością sensoryczną oraz prowadzenia szkoleń dla osób z nimi pracujących. Oferta IST obejmuje:  opiekę dzienną, mieszkalnictwo chronione, naukę wspomaganą, warsztaty terapeutyczne (malowanie, gotowani, zajęcia sportowe), edukację zawodową osób niepełnosprawnych oraz szkolenia dla terapeutów/opiekunów. Posiada duże doświadczenie w realizacji projektów w ramach programu Erasmus+.  
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-prometeo.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">prometeo</h3>
                            <p class="partners__row__partner__description">
                                PROMETEO jest organizacją pozarządową oferującą wsparcie edukacyjne dla przedstawicieli instytucji działających w obszarze edukacji dorosłych. Organizacja zaangażowana w projekty i programy związane z: rozwojem umiejętności zawodowych uczniów; turystyką; włączeniem społecznym imigrantów i przeciwdziałanie rasizmowi; edukacją osób starszych; rozwojem innowacyjnych narzędzi edukacyjnych. PROMETEO posiada wieloletnie doświadczenie we współpracy międzynarodowej, w tym w projektach programu Erasmus+. 
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-cku.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">cku sopot</h3>
                            <p class="partners__row__partner__description">
                                CKU Sopot jest szkołą publiczną prowadzącą edukację formalną i nieformalną dla dorosłych; obecnie prowadzi kursy zawodowe z zakresu: fotografii, technik informatyk, , grafiki komputerowej, kadry i płace. CKU Sopot prowadzi różnorodne warsztaty dla osób starszych w ramach Uniwersytetu Trzeciego Wieku (około 950 studentów).W strukturach CKU Sopot znajduje się również centrum kształcenia nauczycieli. CKU Sopot posiada wieloletnie doświadczenie w realizacji projektów międzynarodowych, w tym w ramach programu Erasmus+.
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-erasmus.jpg" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">erasmus+</h3>
                            <p class="partners__row__partner__description">
                                Erasmus+ to program Unii Europejskiej w dziedzinie edukacji, szkoleń, młodzieży i sportu na lata 2014-2020. Jego całkowity budżet wynosi 14,7 mld euro. Erasmus+ opiera się na osiągnięciach europejskich programów edukacyjnych, które funkcjonowały przez 25 lat, i jest wynikiem połączenia następujących europejskich inicjatyw realizowanych przez Komisję Europejską w latach 2007-2013: programu „Uczenie się przez całe życie”, programu „Młodzież w działaniu”, Erasmus Mundus, Tempus, Alfa, Edulink, oraz programów współpracy z krajami uprzemysłowionymi w dziedzinie szkolnictwa wyższego.
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
                        <h2>Galerie</h2>
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
                            <div class="fp-galleries__content__items__item__desc__title text-center">Spotkanie w Sopocie</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">W dniach 28-29 stycznia 2019 r. odbyło się spotkanie w Sopocie.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">
                                <a href="https://sealproject.eu/2020/02/22/spotkanie-nr-01/">Zobacz</a>
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
                            <div class="fp-galleries__content__items__item__desc__title  text-center">Spotkanie w Turynie</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">W dniach 18-19 lipca 2019 r. odbyło się drugie spotkanie partnerów projektu SEAL.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/2020/02/22/spotkanie-nr-02/">Zobacz</a></div>
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
                            <div class="fp-galleries__content__items__item__desc__title text-center">Spotkanie w Kahramanmaras</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">W dniach 26-27 września 2019 w tureckiej miejscowości Kahramanmaras odbyło się trzecie spotkanie.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/2020/02/22/spotkanie-nr-03/">Zobacz</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="https://sealproject.eu/category/galleries-pl/" class="btn--white">Więcej galerii</a>
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
                                    <p>Strona internetowa została zrealizowana przy wsparciu finansowym Komisji Europejskiej. Treść strony odzwierciedla jedynie stanowisko jej autorów i Komisja Europejska oraz Narodowa Agencja Programu Erasmus+ nie ponoszą odpowiedzialności za jej zawartość merytoryczną.</p>
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
                                    Partnerzy
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
        </div>
    </body>
</html>
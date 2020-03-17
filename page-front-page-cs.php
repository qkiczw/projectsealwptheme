<?php 

    /*
    Template Name: Front Page CS
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
                    <h1 class="header__hero__content__title">Vzdělávání seniorů k aktivnímu životu</h1>
                    <h3 class="header__hero__content__slogan">Projekt SEAL je mezinárodní iniciativou zaměřenou na vývoj inovativních vzdělávacích nástrojů pro vzdělávání a aktivaci seniorů.</h3>
                    <div class="header__hero__content__btn-area">
                        <a href="#about-us"><button class="header__hero__content__btn-area__btn">Přečtěte si více</button></a>
                    </div>
                    <div class="header__hero__content__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid">
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

<main>
        <section id="about-us" class="about-us"> 
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>O nás</h2>
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
                            <p>Projekt SEAL je mezinárodní iniciativou zaměřenou na vývoj inovativních vzdělávacích nástrojů pro vzdělávání a aktivaci seniorů. Cílem tohoto projektu se vytvořit mezinárodního průvodce vzděláváním a aktivací seniorů.</p>
                            <a href="https://sealproject.eu/about-us-en/" class=" btn--blue">Více o nás</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>Projekt SEAL je financován s podporou Evropské komise v rámci programu Erasmus+. Evropská komise však nenese odpovědnost za jakékoli použití informací v něm obsažených.</p>
                    </div>
                </div>
            </div> 
        </section>
        <section id="partners" class="partners"> <!-- Partners -->
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Partneři</h2>
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
                                KMEM je veřejná instituce, která koordinuje a dohlíží na více než 1084 škol. Zaměstnanci z oddělení výzkumu a vývoje mají bohaté zkušenosti s různými typy projektů (včetně projektů programu Erasmus +). Tato instituce pořádá různé kurzy pro dospělé a pro učitele v celém regionu. 
                                Podporuje získávání a rozvoj kompetencí požadovaných na trhu práce, jakož i získání kvalifikace k doplnění vzdělání.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                                GLAFKA je vzdělávací a školící organizace poskytující vzdělávání a poradenství v oblasti celoživotního vzdělávání a rozvoje inovativních vzdělávacích metod, odborných dovedností příjemců. Poskytuje kurzy a podporu skupinám, které zažívají sociální vyloučení. 
                                Dále pořádá IT kurzy pro seniory (ve věku 60+). GLAFKA má bohaté zkušenosti s nadnárodními projekty včetně Erasmu +. 
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                                IST je nevládní organizace, která byla založena v roce 1814 s cílem poskytovat podporu lidem se smyslovým postižením a školit jejich učitele. IST poskytuje různé druhy podpory, jako jsou: denní péče, asistované bydlení, asistované učení, terapeutické dílny (malování, vaření, kino, sportovní aktivity), odborné vzdělávání osob se zdravotním postižením a školení provozovatelů pracujících v tomto odvětví.
                                Má rozsáhlé zkušenosti s projekty programu Erasmus +.
  
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                                PROMETEO je nevládní organizace poskytující vzdělávání a podporu členům institucí působících v oblasti vzdělávání dospělých. Podílí se na projektech a programech souvisejících s: rozvojem odborných dovedností studentů; cestovním ruchem; sociálním začleněním přistěhovalců a činnostmi proti rasismu; vzděláváním starších lidí; vývojem inovativních vzdělávacích nástrojů. PROMETEO má bohaté zkušenosti s nadnárodní spoluprací, včetně projektů programu Erasmus +. 
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                                CKU Sopot je veřejná škola poskytující formální i neformální vzdělávání pro dospělé; v současné době poskytuje kurzy odborného vzdělávání a přípravy v oborech, jako je: fotograf, informatik, účetní či grafik. Tato škola pořádá také různé semináře pro starší lidi na Univerzitě třetího věku (s přibližně 950 studenty). 
                                Dále se v CKU Sopot nachází také školicí středisko pro učitele. Tato škola má bohaté zkušenosti s nadnárodní spoluprací, včetně projektů programu Erasmus +.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                                Erasmus + je program EU na podporu vzdělávání, odborné přípravy, mládeže a sportu v Evropě. Její rozpočet ve výši 14,7 miliardy EUR poskytne příležitost pro více než 4 miliony Evropanů studovat, školit a získávat zkušenosti v zahraničí. Erasmus + nebude mít jen do roku 2020 příležitosti, ale nebude mít pouze příležitosti pro studenty. Sloučení sedmi předchozích programů má příležitosti pro širokou škálu jednotlivců a organizací. 
                                Podrobné informace o těchto příležitostech, včetně kritérií způsobilosti, jsou k dispozici v Průvodci programem Erasmus +. K dispozici je také orientační finanční průvodce pro některé centralizované příležitosti.
                            </p>
                            <div class="partners__row_partner__link-area">
                                <div class="partners__row_partner__link-area_title">Odkazy</div>
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
                            <div class="fp-galleries__content__items__item__desc__title text-center">Setkání v Sopot</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">We met in Sopot on 28-29 January 2019 for the first time.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">
                                <a href="https://sealproject.eu/en/2020/02/22/meeting-nr-01/">Vstoupit</a>
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
                            <div class="fp-galleries__content__items__item__desc__title  text-center">Setkání v Turin</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">On 18-19 July 2019 the second meeting of the SEAL project partnerss took place. </div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-02/">Vstoupit</a></div>
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
                            <div class="fp-galleries__content__items__item__desc__title text-center">Setkání v Kahramanmaras</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">On 26-27.09.2019 in Turkey third meeting of partners of the international project SEAL took place.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-03/">Vstoupit</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="https://sealproject.eu/en/category/galleries-en/" class="btn--white">Zobrazit více galerií</a>
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
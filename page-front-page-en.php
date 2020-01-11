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
<html class="no-js" lang="en"> <!--<![endif]-->
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
                    <h3 class="header__hero__content__slogan">SEAL Project SEAL is international initiative aimed to develop innovative educational tools used for education and activation of seniors.</h3>
                    <div class="header__hero__content__btn-area">
                        <a href="#about-us"><button class="header__hero__content__btn-area__btn">read more</button></a>
                    </div>
                    <div class="header__hero__content__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid">
                    </div>
                </div>  
            </div>
            <div class="header__social-icons">
                <div class="header__social-icons__title">Find us here <strong>&raquo</strong></div>
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
                            <h2>About Us</h2>
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
                            <p>SEAL Project SEAL is international initiative aimed to develop innovative educational tools used for education and activation of seniors. An international guide of education and activation of seniors is going to be created at the project end.</p>
                            <a href="#" class=" btn--blue">More about Us</a>
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
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row partners__row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="partners__row__partner">
                            <figure class="partners__row__partner_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-kmem.png" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">kmem</h3>
                            <p class="partners__row__partner__description">
                                KMEM is a public body which coordinates and supervises over 1084 schools. The employes from the research and development department are highly experienced in various types of projects (including Erasmus + projects). The institution is responsible for organizing the various courses for adults and for teachers in whole region. It supports the acquisition and development of competences required in the labour market; obtaining qualifications to supplement education.
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-glafka.png" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">glafka</h3>
                            <p class="partners__row__partner__description">
                                GLAFKA is an educational and training organisation providing education and consulting in the area of lifelong learning and development of innovative educational methods, vocational skills of beneficiaries. Provides coursses and support for groups experiencing social exclusion. Provides IT courses for seniors (aged 60 +) .  GLAFKA has a  various experience in transnational projects including Erasmus +.  
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-istituto.png" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">ist</h3>
                            <p class="partners__row__partner__description">
                                IST is a non-governmental organisation founded in 1814 to provide support for people with sensory disabilities and to train their teacher. IST provides various types of support like: daily care, assisted housing, assisted learning, therapy workshops (painting, cooking, cinema, sport activities), VET education of disabled people and training for operator working in the sector. Highly experienced in Erasmus +projects.  
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
                                PROMETEO is an non govermental organisation providing educational offer and support for members of institutions working in the field of education of adults. Is involved in projects and programmes connected with: development of  vocational skills of students; tourism; social inclusion of imigrants and activities against rasism; education of elderly people; development of innovative educational tools. PROMETEO has a wide experience in transnational cooperation including Erasmus + projects. 
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-ckusopot.png" class="img-fluid">
                            </figure>
                            <h3 class="partners__row__partner__name">cku sopot</h3>
                            <p class="partners__row__partner__description">
                                CKU Sopot is a public school  providing formal and informal education for adults; at this moment provides VET courses in profesions such as: photographer, informatician, acountant, grafic designer. CKU Sopot provides various workshops for elderly people at Third Age University ( with approximately 950 students). Within CKU Sopot  there is also teacher training centre. CKU Sopot is highly experienced in transnational cooperation including Erasmus + projects.
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partner-logo-erasmus.png" class="img-fluid">
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
                        <h2>Galleries</h2>
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
                            <div class="fp-galleries__content__items__item__desc__title">title</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">This is a hort info about one of the project galleries. The gallery is from the tour to Paris.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">link</div>
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
                            <div class="fp-galleries__content__items__item__desc__title">title</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">This is a hort info about one of the project galleries. The gallery is from the tour to Paris.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">link</div>
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
                            <div class="fp-galleries__content__items__item__desc__title">title</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__short-info">This is a hort info about one of the project galleries. The gallery is from the tour to Paris.</div>
                            <hr />
                            <div class="fp-galleries__content__items__item__desc__link">link</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="https://sealproject.eu/galleries-en/" class="btn--white">See more galleries</a>
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
                <span>Copyright © 2020 Project Seal</span>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>
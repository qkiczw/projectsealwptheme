<?php 

    /*
    Template Name: Front Page TR
    */

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="tr"> <!--<![endif]-->
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
                    <h1 class="header__hero__content__title">Aktif Yaşam İçin Yaşlı Eğitimi</h1>
                    <h3 class="header__hero__content__slogan">SEAL Projesi, yaşlıların eğitimi ve etkinleştirilmesi için kullanılan yenilikçi eğitim araçları geliştirmeyi amaçlayan uluslararası bir girişimdir.</h3>
                    <div class="header__hero__content__btn-area">
                        <a href="#about-us"><button class="header__hero__content__btn-area__btn">Daha fazla oku</button></a>
                    </div>
                    <div class="header__hero__content__arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrows-down-w.png" class="img-fluid">
                    </div>
                </div>  
            </div>
            <div class="header__social-icons">
                <div class="header__social-icons__title">Bizi burada bulun <strong>&raquo</strong></div>
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
                            <h2>Hakkımızda</h2>
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
                            <p>SEAL Projesi, yaşlıların eğitimi ve etkinleştirilmesi için kullanılan yenilikçi eğitim araçları geliştirmeyi amaçlayan uluslararası bir girişimdir. Proje sonunda yaşlılar için uluslararası bir eğitim ve etkinleştirme kılavuzu oluşturulacak.</p>
                            <a href="https://sealproject.eu/tr/about-us-tr/" class=" btn--blue">Hakkımızda daha fazlası</a>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer">
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>SEAL projesi, Erasmus+ Programı kapsamında Avrupa Komisyonu'nun desteği ile finanse edilmiştir. Ancak Avrupa Komisyonu, burada yer alan bilgilerin kullanımından sorumlu tutulamaz.</p>
                    </div>
                </div>
            </div> 
        </section>
        <section id="partners" class="partners"> <!-- Partners -->
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h2>Ortaklar</h2>
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
                                KMEM, 1084'ün üzerinde okulu koordine eden ve denetleyen bir kamu kuruluşudur. Araştırma ve Geliştirme Birimi çalışanları Erasmus + projeleri de dahil olmak üzere uluslararası işbirliği konusunda son derece deneyimlidir. Kurum, yetişkinler ve bölgesindeki öğretmenler için çeşitli kurslar düzenlemeden de sorumludur. İşgücü piyasasında ihtiyaç duyulan yetkinliklerin kazanılmasını ve geliştirilmesini ve eğitime tamamlayıcı etki eden yeterliliklerin kazanılmasını destekler.
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
                                GLAFKA, yaşam boyu öğrenme ve yenilikçi eğitim yöntemlerinin geliştirilmesi, yararlanıcıların mesleki becerileri alanında eğitim ve danışmanlık hizmeti veren bir eğitim ve öğretim kuruluşudur. Toplumsal dışlanma yaşayan gruplar için kurslar ve destek sağlar. (60 yaş üzeri) yaşlılar için Bilişim Teknolojileri kursları sağlar. GLAFKA, Erasmus + projeleri de dahil olmak üzere uluslararası işbirliği konusunda son derece deneyimlidir.
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
                                IST, duyusal engellilere destek sağlamak ve bu kişilerin eğitmenlerini eğitmek amacıyla 1814 yılında kurulmuş bir sivil toplum kuruluşudur. IST, günlük bakım, destekli barınma, yardımlı öğrenme, terapi atölyeleri (resim, yemek pişirme, sinema, spor aktiviteleri), engelli eğitimi ve sektörde çalışanlara yönelik eğitim gibi çeşitli destekler sunmaktadır. Erasmus + projeleri de dahil olmak üzere uluslararası işbirliği konusunda son derece deneyimlidir.
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
                                PROMETEO, yetişkin eğitimi alanında hizmet veren kurumlara eğitimler sunan ve destek sağlayan bir sivil toplum kuruluşudur. Öğrencilerin mesleki becerilerinin geliştirilmesi, turizm; göçmenler, sosyal içerme ve ırkçılığa karşı faaliyetlerin, yaşlı eğitimi, yenilikçi eğitim araçlarının geliştirilmesi gibi konular üzerinde çalışır. PROMETEO, Erasmus + projeleri de dahil olmak üzere uluslararası işbirliği konusunda son derece deneyimlidir.
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
                            CKU Sopot yetişkinler için örgün ve resmi olmayan eğitim veren bir devlet okuludur. Şu meslek alanlarında Mesleki Eğitim kursları sağlar: fotoğrafçılık, enformatik, muhasebecilik, grafik tasarım. CKU Sopot, (yaklaşık 950 öğrencili) Üçüncü Çağ Üniversitesi'nde yaşlılar için çeşitli atölye çalışmaları sunmaktadır. CKU Sopot bünyesinde öğretmen eğitim merkezi de bulunmaktadır. CKU Sopot, Erasmus + projeleri de dahil olmak üzere uluslararası işbirliği konusunda son derece deneyimlidir.
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
                            Erasmus +, AB'nin Avrupa'da eğitim, öğretim, gençlik ve sporu destekleme programıdır. 14,7 milyar avroluk bütçesi, 4 milyondan fazla Avrupalıya yurtdışında eğitim, eğitim ve deneyim kazanma fırsatı sağlayacak. 2020'ye kadar sürecek olan Erasmus + sadece öğrenciler için fırsatlara sahip değil. Önceden yedi program birleştirildiğinde, çok çeşitli kişi ve kuruluşlar için fırsatları vardır. Uygunluk kriterleri de dahil olmak üzere bu fırsatlar hakkında ayrıntılı bilgi Erasmus + Program Kılavuzu'nda mevcuttur. Bazı merkezi fırsatlar için gösterge niteliğinde bir fon rehberi de mevcuttur.
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
                        <h2>Galeri</h2>
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
                                <a href="https://sealproject.eu/en/2020/02/22/meeting-nr-01/">Giriş</a>
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
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-02/">Giriş</a></div>
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
                            <div class="fp-galleries__content__items__item__desc__link"><a href="https://sealproject.eu/en/2020/02/22/meeting-nr-03/">Giriş</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row see-more-galleries">
                <a href="https://sealproject.eu/tr/category/galleries-tr/" class="btn--white">Daha fazla galeri görün</a>
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
                                    <p>SEAL projesi, Erasmus+ Programı kapsamında Avrupa Komisyonu'nun desteği ile finanse edilmiştir. Ancak Avrupa Komisyonu, burada yer alan bilgilerin kullanımından sorumlu tutulamaz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 site-footer__container">  
                        <div class="site__footer__content">
                            <div class="site-footer__content__item">
                                <div class="site-footer__content__item">
                                    <div class="site-footer__content_item_title">
                                        İletişim
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
                                    Ortaklar 
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
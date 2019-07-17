<?php 

    /*
    Template Name: Front Page PL
    */

?>

<?php get_header(); ?>

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

<?php get_footer(); ?>
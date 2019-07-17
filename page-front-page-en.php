<?php 

    /*
    Template Name: Front Page EN
    */

?>

<?php get_header(); ?>

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>

    <main>
        <section id="fp-about-us-content" class="fp-about-us-content"> 
            <div class="container">
                <div class="row"> <!-- Section title -->
                    <div class="col-12"> 
                        <div class="section-title"> 
                            <h1>About Us</h1>
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
                                <p>SEAL Project SEAL is international initiative aimed to develop innovative educational tools used for education and activation of seniors. An international guide of education and activation of seniors is going to be created at the project end.</p>
                                <a href="http://qki.cba.pl/seal/o-nas-en/" class="btn-see-more">Read more</a>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row disclaimer"> <!-- Disclaimer -->
                    <div class="col-md-5 col-lg-4 order-md-last disclaimer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_color.png" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-lg-8 order-md-first disclaimer-info">
                        <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein.</p>
                    </div>
                </div>
                <div class="row seal-partners-section">  <!-- Partners -->
                <h3>Our Partners</h3>
                    <div class="col-12 seal-partners">
                        <div class="seal-partner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-ckusopot.jpg" class="img-fluid">
                        </div>
                        <div class="seal-partner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-glafka.jpg" class="img-fluid">
                        </div>
                        <div class="seal-partner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-istituto.jpg" class="img-fluid">
                        </div>
                        <div class="seal-partner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-prometeo.jpg" class="img-fluid">
                        </div>
                        <div class="seal-partner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/partner-logo-kamramanmaras.jpg" class="img-fluid">
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
                        <h1>Galleries</h1>
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
                <a href="#" class="btn-see-more-galleries">See more galleries</a>
            </div> 
        </div> 
        </section> 
    </main>
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
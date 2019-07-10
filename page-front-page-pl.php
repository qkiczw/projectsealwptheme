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
            <div class="container">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/seal_logo.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-7 col-lg-8 seal-short-info">
                                <p>SEAL to międzynarodowy projekt, który ma na celu wypracowanie  innowacyjnych narzędzi edukacyjnych, mających zastosowanie w kształceniu i aktywizacji seniorów. W efekcie ma powstać międzynarodowy poradnik aktywizacji i edukacji seniorów. </p>
                                <div class="btn-see-more">Dowiedz się więcej</div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section id="fp-galleries-content" class="section-galleries"> 
            <div class="container">
                <div class="row">
                    <div class="col-4">lewa</div>
                    <div class="col-4">środkowa</div>
                    <div class="col-4">prawa</div>
                </div>
            </div> 
        </section>
        <section id="fp-contact-content"> 
            <div class="container">
                <div class="row">
                    <div class="col-6">lewa</div>
                    <div class="col-6">prawa</div>
                </div>
            </div> 
        </section>        
    </main>
    

    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
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
        <section id="fp-about-us-content"> 
            <div class="container">
                <div class="row">
                    <div class="col-6">lewa</div>
                    <div class="col-6">prawa</div>
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
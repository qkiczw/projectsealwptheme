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
    <div class="container">
        <section class="about-us">
            <div class="row">
                <div class="col-sm-12">
                    Tu coś o nas
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="row">
                <div class="col-sm-12">
                    Tu galerie
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="row">
                <div class="col-sm-12">
                    Tu kontakt
                </div>
            </div>
        </section>
            
        
        <?php the_content(); ?>
        <p>To jest template do polskiego fronte pagea</p>
    </div>
    </main>
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
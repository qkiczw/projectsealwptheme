<?php 

    /*
    Template Name: Basic Single Page
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
                        <?php the_content(); ?>
                    </div>
                </div>
        </section>
    </main>
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
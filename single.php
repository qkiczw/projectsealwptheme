<?php get_header(); ?>

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 post-full">
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </article>    
                    </div>
                </div>
            </div>
        
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
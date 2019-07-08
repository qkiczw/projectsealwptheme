<?php get_header(); ?>

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-title">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="post-content">
                    <p><?php the_content();  ?></p>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
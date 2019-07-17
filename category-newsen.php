<?php get_header(); ?>

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>
    <div class="container posts-list">
        <div class="row">
            <div class="col-lg-12 post">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <div>
                    <div class="post-title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="post-content-short">
                        <p><?php the_excerpt() ?></p>
                    </div>
                    <div class="view-full-contnet">
                        <a href="<?php the_permalink() ?>" class="AktuZobacz">More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
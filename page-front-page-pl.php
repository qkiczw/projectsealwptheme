<?php 

    /*
    Template Name: Front Page PL
    */

?>

<?php get_header(); ?>

<?php 
if( have_posts() ):
    while( have_posts() ): the_post(); ?>
    
    <div class="container">
        <main>
        <section class="about-us">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h1>o nas</h1>
                    </div>
                    <div class="container about-us">
                        <div class="row">
                            <div class="seal-logo col-lg-4">
                                <img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/img/seal_logo.jpg">
                            </div>
                            <div class="about-us-short-info col-lg-8">tu coś o nas czyli krotkie info.</div>
                        </div>
                    </div>
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
        </main>
            
        <?php the_content(); ?>
        <p>To jest template do polskiego fronte pagea</p>
    </div>

    
    <?php endwhile;
endif;
    
?>

<?php get_footer(); ?>
                </div>  <!-- .row -->
            </div> <!-- .container-fluid -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/seal_logo_white.png">
                        </div>
                        <div class="col-lg-3"> 
                            <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
                        </div>
                        <div class="col-lg-3">
                            col03
                        </div>
                        <div class="col-lg-3">
                            col04
                        </div>
                    </div>
                </div>
            </footer>
             <?php wp_footer(); ?>
         </body>
     </html>
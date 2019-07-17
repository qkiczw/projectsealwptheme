            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 footer-col">
                            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_white.png"></a>
                            <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein. </p>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col"> 
                            <h5>Menu</h5>
                            <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>Skontaktuj się z nami</p>
                            <p>
                                <ul>
                                    <li>
                                        Centrum Kształcenia Ustawicznego
                                        im. Bohaterów Wybrzeża w Sopocie <br />
                                        81-704 Sopot<br />
                                        ul. Tadeusza Kościuszki 22-24<br />
                                    </li>
                                    <li>tel: 58 551 17 13</li>
                                    <li>tel/fax: 58 551 00 11</li>
                                    <li>e-mail: projekty@gmail.com</li>
                                </ul> 
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>Przydatne linki</p>
                            <p>
                                <ul>
                                    <li>CKU Sopot</li>
                                    <li>Kahramanmaras</li>
                                    <li>PROMETEO</li>
                                    <li>ISTUTO</li>
                                    <li>GLAFKA</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
             <?php wp_footer(); ?>
         </body>
     </html>
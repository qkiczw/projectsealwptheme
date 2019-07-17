            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 footer-col">
                            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/erasmus_logo_white.png"></a>
                            <p>SEAL project has been funded with support from the European Commission within Erasmus+ Programme. However European Commission cannot be held responsible for any use which may be made of the information contained therein. </p>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col"> 
                            <h5>MENU</h5>
                            <?php wp_nav_menu(array('theme_location_'=>'footer')); ?>
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>ADRES</p>
                                <ul>
                                    <li>
                                        <img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/place.png"> 
                                        Centrum Kształcenia Ustawicznego
                                        im. Bohaterów Wybrzeża w Sopocie <br />
                                        81-704 Sopot<br />
                                        ul. Tadeusza Kościuszki 22-24<br />
                                    </li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> tel: +48 58 550 33 65</li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.png"> tel: 791 983 610</li>
                                    <li><img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.png"> e-mail: <a href="mailto:cku-projekty@wp.pl">cku-projekty@wp.pl</a></li>
                                </ul> 
                        </div>
                        <div class="col-md-6 col-lg-3 footer-col">
                            <p>PRZYDATNE LINKI</p>
                                <ul>
                                    <li><a href="http://ckusopot.pl" target="_blank">CKU SOPOT</a></li>
                                    <li><a href="http://kmaras.meb.gov.tr/" target="_blank">KMEM</a></li>
                                    <li><a href="http://asprometeo.altervista.org/prometeo/Home.html" target="_blank">PROMETEO</li>
                                    <li><a href="http://www.istitutosorditorino.org/" target="_blank">ISTUTO</a></li>
                                    <li><a href="http://glafka.cz" target="_blank">GLAFKA</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </footer>
             <?php wp_footer(); ?>
         </body>
     </html>
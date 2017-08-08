<?php
/**
 * Template Name: Contact Us Template
 */
get_header();
?>

    <!-- - - - - - - - - - SECTION - - - - - - - - - -->
    <div class="pi-section-w pi-section-white piICheck piStylishSelect piSocials">
        <div class="pi-section">

            <div class="pi-row">
                <div class="pi-col-sm-8">
                    <h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
                        Get In Touch
                    </h2>

                    <!-- Contact form -->
                    <?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1" html_class="pi-contact-form"]') ?>
                    <!-- End contact form -->

                </div>
                <div class="pi-col-sm-4">

                    <h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
                        Contact Us
                    </h2>

                    <ul class="pi-list-with-icons pi-list-big-margins pi-padding-bottom-10">

                        <li><span class="pi-bullet-icon"><i class="icon-mail"></i></span><a href="#"><?php echo get_option( 'admin_email' ); ?></a>
                            <!--<br><a href="#">hello@mail.com</a>--></li>

                        <li><span class="pi-bullet-icon"><i class="icon-phone"></i></span>+374 <strong>99 80 82 94</strong><!--, <br>
                            +1 (330) <strong>995-445</strong>--></li>
                    </ul>
                    <ul class="pi-social-icons pi-small pi-jump pi-colored-bg pi-round pi-padding-bottom-10">
                        <li><a href="https://www.facebook.com/AramazdPetrosyanFineArt/" target="_blank" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/aramazdpetrosyan/" target="_blank" class="pi-social-icon-instagram"><i class="icon-instagram"></i></a></li>
                        <!--<li><a href="#" target="_blank" class="pi-social-icon-dribbble"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#" target="_blank" class="pi-social-icon-tumblr"><i class="icon-tumblr"></i></a></li>
                        <li><a href="#" target="_blank" class="pi-social-icon-vimeo"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#" target="_blank" class="pi-social-icon-rss"><i class="icon-rss"></i></a></li>-->
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>

<!-- Footer -->

<?php get_footer(); ?>
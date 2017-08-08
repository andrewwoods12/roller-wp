<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * Roller
 * ==================================================
 * This is the footer file - footer.php
 *
 */
?>

<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar( 'standart' ); ?>

            <!--<div class="link">
                <h3>CONTACT</h3>
                <a href="#">6/25-27 MANDURAH TERRACE</a>
                <a href="#">BOOKINGS ROLLERCOASTERMANDURAH.COM</a>
                <a href="#">HELLO ROLLERCOASTERMANDURAH.COM</a>
            </div>-->
            <div class="cent">
                <img src="<?php bloginfo('template_url') ?>/images/green10.png">
            </div>
            <div class="icons">

                <?php
                    if ( get_theme_mod( 'facebook_url_field_id' ) and !empty( 'facebook_url_field_id' ) ) :
                        echo '<a target="_blank" href="' . esc_url( get_theme_mod( 'facebook_url_field_id' ) ) . '"><div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i><p>FACEBOOK</p></div></a>';
                    else:
                        echo '<a href="#"><div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i><p>FACEBOOK</p></div></a>';
                    endif;

                    if ( get_theme_mod( 'instagram_url_field_id' ) and !empty( 'instagram_url_field_id' ) ) :
                        echo '<a target="_blank" href="' . esc_url( get_theme_mod( 'instagram_url_field_id' ) ) . '"><div class="icon"><i class="fa fa-instagram" aria-hidden="true"></i><p>INSTA</p></div></a>';
                    else:
                        echo '<a href="#"><div class="icon"><i class="fa fa-instagram" aria-hidden="true"></i><p>INSTA</p></div></a>';
                    endif;
                ?>

            </div>
        </div>
    </div>
</div>
<div class="color"></div>
<!-- Footer End -->

<!-- Js -->
<script type="text/javascript">
    /**
     * Mobile Menu Button Effect
     */
    var anchor = document.querySelectorAll('.navbar-toggle');

    [].forEach.call(anchor, function(anchor){
        var open = false;
        anchor.onclick = function(event){
            event.preventDefault();
            if(!open){
                this.classList.add('close');
                open = true;
            }
            else{
                this.classList.remove('close');
                open = false;
            }
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
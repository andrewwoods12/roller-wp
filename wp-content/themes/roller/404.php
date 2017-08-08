<?php
/**
 * Roller
 * ==================================================
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
?>

    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 error-404 text-center">
        <h1>404</h1>
        <p class="strong"><?php _e( 'Oh dear, like the page you are looking for is not available!' ); ?></p>
        <p><?php _e( 'Lets get back on track...' ); ?></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 action-bar text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></a>
            </div>
            <div class="col-sm-6 action-bar text-center">
                <?php $contact = get_the_permalink(25); ?>
				    <a href="<?php echo $contact; ?>"><i class="fa fa-envelope"></i></a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_footer(); ?>
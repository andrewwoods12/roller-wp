<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Roller
 * ==================================================
 * This is the template to show normal pages
 *
 */
get_header( );
?>

<!-- Content Top Start -->
<div class="wrap">
    <div id="primary" class="container content">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-md-12 col-sm-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="shows">
                            <h3 class="entry-title"><?php the_title(); ?></h3>
                        </div>

                    </div>

                    <div class="name">
                        <p><?php the_content(); ?></p>
                    </div>

                </div>

                <?php endwhile; ?>
                <!-- post navigation -->
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
<!-- Content Bottom End -->

<!-- Footer Start -->
<?php get_footer(); ?>




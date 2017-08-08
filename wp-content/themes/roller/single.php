<?php
/**
 * The template for displaying all single posts
 *
 * Roller
 * ==================================================
 * This is the template to show normal pages
 *
 */
get_header();
?>

<div class="wrap">
    <div id="primary" class="container">
        <main id="main" class="site-main" role="main">

            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post(); ?>

                <div class="col-md-10 no-padd">
                    <h2 class="case-title">
                        <?php the_title(); ?>
                    </h2>
                </div>
                <div class="col-md-2 no-padd">
                    <h2 class="case-date">
                        <?php the_date('j F Y'); ?>
                    </h2>
                </div>

                <div class="case-image">
                    <?php the_post_thumbnail('', array('class' => 'img-responsive post-image case-img')); ?>
                </div>
                <?php
                    the_content();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                    the_post_navigation( array(
                        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                    ) );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>



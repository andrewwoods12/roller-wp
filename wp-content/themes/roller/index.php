<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * Roller
 * ==================================================
 * This is the default index file for blog, archive and ...
 *
 */
get_header();

?>

<!-- Header Content Start -->
<div class="header-content header-content-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home">
                    <h1>MANDURAH'S HOME OF MUSIC</h1>
                    <img src="<?php bloginfo('template_url') ?>/images/Vector-Smart-Object1.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Content End -->

<!-- Content Top Start -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="shows">
                    <h3><?php _e( 'UPCOMING SHOWS' ); ?></h3>
                </div>
            </div>


            <!-- tickets item -->
            <?php
                $args = array(
                    'post_type'      => 'Tickets',
                    'post_status'    => 'publish',
                    'posts_per_page' => 9,
                );
                query_posts($args);
            ?>

            <?php if (have_posts()) : while (have_posts()) : the_post();
                $thumbnail = get_the_post_thumbnail_url(); ?>
                <!-- tickets item -->
                    <div class="col-md-4 col-sm-6">
                        <div class="name">
                            <img src="<?php echo $thumbnail; ?>" <?php the_title(); ?>>
                            <h3><?php the_title(); ?></h3>
                            <h4><?php the_excerpt(); ?></h4>
                            <p><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e( 'GET TICKETS' ); ?></a>
                        </div>
                    </div>
                <!-- End tickets item -->

            <?php endwhile; ?>
            <!-- End post -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
            
        </div>
    </div>
</div>
<!-- Content Top End -->

<!-- Content Bottom Start -->
<div class="content-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input">
                    <img src="<?php bloginfo('template_url') ?>/images/gic.png">
                    <h2><?php _e( 'STAY IN THE LOOP!' ); ?> </h2>
                    <p><?php _e( 'WITH SUPPORT FROM AND ANY DETAILS ETCETERA TWO OR THREE LINE MAXIMUM' ); ?></p>

                    <?php echo do_shortcode( '[contact-form-7 id="20" title="Contact form 1"]' ) ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Bottom End -->

<!-- Footer Start -->
<?php get_footer(); ?>
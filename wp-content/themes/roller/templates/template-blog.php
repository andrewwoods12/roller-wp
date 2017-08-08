<?php
/**
 * Template Name: Blog Template
 */
get_header();
?>

    <!-- - - - - - - - - - SECTION - - - - - - - - - -->
    <div class="pi-section-w pi-section-white">
        <div class="pi-section pi-padding-bottom-10">

            <div class="pi-row">

                <div class="pi-col-sm-9">

                    <!-- Post -->

                    <?php $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'paged'          => $paged,
                    );
                    query_posts($args); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- Post thumbnail -->
                        <div class="pi-img-w pi-img-round-corners pi-img-shadow-light pi-margin-bottom-25">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <span class="pi-img-overlay pi-no-padding pi-img-overlay-dark">
							<span class="pi-caption-centered">
								<span>
									<span class="pi-caption-icon pi-caption-scale icon-plus"></span>
								</span>
							</span>
						</span>
                            </a>
                        </div>
                        <!-- End post thumbnail -->

                        <!-- Post content -->
                        <h2 class="h3">
                            <a href="<?php the_permalink(); ?>" class="pi-link-dark"><?php the_title(); ?></a>
                        </h2>
                        <!--<ul class="pi-meta">
                            <li><i class="icon-user"></i>by <a href="#">Admin</a></li>
                            <li><i class="icon-clock"></i>May 23, 2014</li>
                            <li><i class="icon-comment"></i><a href="#">2 Comments</a></li>
                        </ul>-->
                        <p><?php the_content(); ?></p>
                        <!--<p>
                            <a href="<?php /*the_permalink(); */?>" class="btn pi-btn-base">
                                Read
                            </a>
                        </p>-->
                        <!-- End post content -->


                    <?php endwhile; ?>
                        <!-- End post -->
                        <hr class="pi-divider pi-divider-dashed pi-divider-big">

                        <div class="pi-pagenav pi-padding-bottom-40">
                            <?php wpbeginner_numeric_posts_nav($paged); ?>
                        </div>
                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>

                </div>

                <div class="pi-sidebar pi-col-sm-3">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- Footer -->
<?php get_footer(); ?>
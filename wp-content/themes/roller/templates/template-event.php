<?php
/**
 * Template Name: Event Template
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
                        <h3><?php _e( 'UPCOMING EVENTS' ); ?></h3>
                    </div>
                </div>

                <!-- tickets item -->
                <?php

                    $url = "https://events.ticketbooth.com.au/events/25410.json";

                    $json = file_get_contents($url);
                    $data = json_decode($json, TRUE);

                    foreach ($data as $key => $value) {
                        foreach ($value as $k => $v) {
                            foreach ($v as $k1 => $v1) {
                                foreach ($v1 as $k2 => $v2) {
                                    foreach ($v2 as $k3 => $v3) {
                                        echo '<div class="col-md-4 col-sm-6 height-class">';
                                        echo '<div class="name">';
                                        if ($v3['image_url'] == null){
                                            echo '<img src="http://zavmar.testar.testforhost.com/roller-wp/wp-content/uploads/2017/08/CXA_noimg2.jpg" width="300" height="300">';
                                        }else {
                                        echo '<img src="'. $v3['image_url'] . '" width="300" height="300">';
                                        }
                                        echo '<h3>' . $v3['title'] . '</h3>';
                                        echo '<h4>' . $v3['date_title'] . '</h4>';
                                        echo '<p>' . $v3['event_id'] . '</p>';
                                        echo '<a href="' . $v3['listing_url'] . '" class="btn btn-default">GET TICKETS</a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                }
                            }
                        }
                    }

                ?>

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
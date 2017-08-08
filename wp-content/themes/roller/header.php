<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div class="header-menu">
 * Roller
 * ==================================================
 * This is the main header file - header.php
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>

    <?php  wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Menu Start -->
<div class="header-menu">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle lines-button x" data-toggle="collapse" data-target="#myNavbar">
                    <span class="lines"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                    <?php
                        if (get_theme_mod('ap_logo-small')) :
                            echo '<img src="' . esc_url(get_theme_mod('ap_logo-small')) . ' ">';
                        else:
                            echo '<img src="' . esc_url(get_theme_mod('ap_logo-small')) . ' ">';
                        endif;

                        if (get_theme_mod('ap_logo')) :
                            echo '<img src="' . esc_url(get_theme_mod('ap_logo')) . '">';
                        else:
                            echo '<img src="' . esc_url(get_theme_mod('ap_logo')) . '">';
                        endif;
                    ?>

                </a>
            </div>
            <div class="navigation collapse navbar-collapse" id="myNavbar">
                    <!-- Menu -->
                    <?php wp_nav_menu(array(
                            'theme_location'  => 'header_menu',
                            'menu'            => 'Header Menu',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'main-nav',
                            'menu_id'         => 'main-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s"><li>%3$s</li></ul>',
                            'depth'           => 1,
                            )
                        );
                    ?>

                <ul class="nav navbar-nav">
                    <li>
                        <!-- Social Icons on Menu -->

                        <?php
                            if ( get_theme_mod( 'facebook_url_field_id' ) and !empty( 'facebook_url_field_id' ) ) :
                                echo '<a target="_blank" href="' . esc_url( get_theme_mod( 'facebook_url_field_id' ) ) . '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
                            else:
                                echo '<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
                            endif;

                            if ( get_theme_mod( 'instagram_url_field_id' ) and !empty( 'instagram_url_field_id' ) ) :
                                echo '<a target="_blank" href="' . esc_url( get_theme_mod( 'instagram_url_field_id' ) ) . '"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
                            else:
                                echo '<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
                            endif;
                        ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Header Menu End -->
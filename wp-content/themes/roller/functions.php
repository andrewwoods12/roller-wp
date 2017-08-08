<?php
/**
 * Roller
 * ==================================================
 * This is the main function file - functions.php
 *
 */

/** Include fields.
/* ====================================================================== */
require_once( TEMPLATEPATH . '/includes/scripts-styles.php' );
require_once( TEMPLATEPATH . '/includes/menu.php' );
require_once( TEMPLATEPATH . '/includes/customizer.php' );
require_once( TEMPLATEPATH . '/includes/widgets.php' );
require_once( TEMPLATEPATH . '/includes/custom-posts.php' );
require_once( TEMPLATEPATH . '/includes/hide-title.php' );
//require_once( TEMPLATEPATH . '/nectar/nectar-vc-addons/nectar-addons.php' );

/*
require_once( TEMPLATEPATH . '/includes/custom-posts.php' );
require_once( TEMPLATEPATH . '/includes/breadcrumb.php' );
require_once( TEMPLATEPATH . '/includes/pagination.php' );
*/

/** Thumbnail support
/* ====================================================================== */
add_theme_support('post-thumbnails');

/** Disable auto-format in the full post
/* ====================================================================== */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('widget_text_content', 'wpautop' );
define( 'WPCF7_AUTOP', false );

/** images size
/* ====================================================================== */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('small-thumb', 100, 'auto', true);
    add_image_size('partner-thumb', 243, 211, true);
    /*add_image_size('medium-thumb', 690, 600, true);
    add_image_size('single-thumb', 800, 600, true);
    add_image_size('large-thumb', 1035, 900, true);*/
}


/** Enable support for Post Formats.
/* ====================================================================== */
add_theme_support( 'post-formats', array(
    'image',
    'video',
    'gallery',
    'audio',
) );

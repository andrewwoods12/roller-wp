<?php
/** Downloadable scripts and styles
/* ====================================================================== */
function load_style_script(){
    /*Stiles*/

    wp_enqueue_style( 'style-bootstrap.min',    get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-font-awesome',     get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'style-style',            get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'style',                  get_template_directory_uri() . '/style.css' );

    /*Scripts*/
    wp_enqueue_script('jquery-jquery.min',get_template_directory_uri() . '/js/jquery.min.js', '', '', true );
    wp_enqueue_script('jquery-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true );
}

/** Load scripts and styles
/* ====================================================================== */
add_action('wp_enqueue_scripts', 'load_style_script');
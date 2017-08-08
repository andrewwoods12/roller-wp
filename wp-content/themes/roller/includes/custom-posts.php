<?php
/** Slider for Home page
/* ====================================================================== */
/*function slider_custom(){
    $labels = array(
        'name'                  => 'Revolution Slider',
        'singular_name'         => 'Slider',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Slide',
        'edit_item'             => 'Edit Slide',
        'new_item'              => 'New Slide',
        'view_item'             => 'View Slide',
        'search_items'          => 'Search Slide',
        'not_found'             => 'Slide not found',
        'not_found_in_trash'    => 'Slide not found in trash',
        'parent_item_colon'     => '',
        'menu_name'             => 'Revolution Slider'
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-update',
        'supports'              => array( 'title', 'thumbnail'),
    );

    register_post_type('slider', $args);
}

add_action( 'init', 'slider_custom' );*/


/** Custom Post For Portfolio Item
/* ====================================================================== */
function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Tickets', 'Post Type General Name', 'roller' ),
        'singular_name'       => _x( 'Tickets', 'Post Type Singular Name', 'roller' ),
        'menu_name'           => __( 'Tickets', 'roller' ),
        'parent_item_colon'   => __( 'Parent Ticket', 'roller' ),
        'all_items'           => __( 'All Tickets', 'roller' ),
        'view_item'           => __( 'View Tickets', 'roller' ),
        'add_new_item'        => __( 'Add New Ticket', 'roller' ),
        'add_new'             => __( 'Add New', 'roller' ),
        'edit_item'           => __( 'Edit Ticket', 'roller' ),
        'update_item'         => __( 'Update Ticket', 'roller' ),
        'search_items'        => __( 'Search Ticket', 'roller' ),
        'not_found'           => __( 'Not Found', 'roller' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'roller' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Tickets', 'roller' ),
        'description'         => __( 'Tickets news and reviews', 'roller' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-tickets-alt',
       // 'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'Tickets', $args );

}

add_action( 'init', 'custom_post_type', 0 );



/** Custom Post For Events
/* ====================================================================== */
/*function custom_post_type_event() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'roller' ),
        'singular_name'       => _x( 'Events', 'Post Type Singular Name', 'roller' ),
        'menu_name'           => __( 'Events', 'roller' ),
        'parent_item_colon'   => __( 'Parent Event', 'roller' ),
        'all_items'           => __( 'All Events', 'roller' ),
        'view_item'           => __( 'View Events', 'roller' ),
        'add_new_item'        => __( 'Add New Event', 'roller' ),
        'add_new'             => __( 'Add New', 'roller' ),
        'edit_item'           => __( 'Edit Event', 'roller' ),
        'update_item'         => __( 'Update Event', 'roller' ),
        'search_items'        => __( 'Search Event', 'roller' ),
        'not_found'           => __( 'Not Found', 'roller' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'roller' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'Events', 'roller' ),
        'description'         => __( 'Events news and reviews', 'roller' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'           => 'dashicons-calendar-alt',
        // 'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'Events', $args );

}

add_action( 'init', 'custom_post_type_event', 0 );*/
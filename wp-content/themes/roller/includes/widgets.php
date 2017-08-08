<?php
/** Widgets for Roller theme
/* ====================================================================== */

/** Widgets for Footer
/* ====================================================================== */
add_action( 'widgets_init', 'ap_widgets_init' );

function ap_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Standart Sidebar', 'ap' ),
        'id'            => 'standart',
        'description'   => __( 'Widgets in this area will be shown Sidebar', 'ap' ),
        'before_widget' => '<div class="link">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar-header">',
        'after_title'   => '</h3>',
    ) );
}

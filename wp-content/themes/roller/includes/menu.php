<?php
/** Register menus
/* ====================================================================== */
add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'header_menu'   => 'Header Menu',

    ));
});

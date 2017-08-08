<?php
/** Add logo upload function
/* ====================================================================== */
function ap_theme_customizer( $wp_customize ) {

    $wp_customize->add_section( 'ap_logo_section' , array(
        'title'       => __( 'Upload Logo', 'ap' ),
        'priority'    => 30,
        'description' => 'Upload a logo for this theme',
    ) );

    /* Header Logo */
    $wp_customize->add_setting( 'ap_logo', array(
        'default' => get_bloginfo('template_directory') . '/images/logo.png',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ap_logo', array(

        'label'    => __( 'Logo', 'ap' ),
        'section'  => 'ap_logo_section',
        'settings' => 'ap_logo',
    ) ) );

    /* Small Logo */
    $wp_customize->add_setting( 'ap_logo-small', array(
        'default' => get_bloginfo('template_directory') . '/images/logo-small.png',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ap_logo-small', array(

        'label'    => __( 'Small logo', 'ap' ),
        'section'  => 'ap_logo_section',
        'settings' => 'ap_logo-small',
    ) ) );

    /* Social Icons */
    /* ====================================================================== */
    $wp_customize->add_section( 'social_url', array(
        'priority'          => 50,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Social Icons', 'ap' ),
        'description'       => '',
    ) );

        /* Facebook */
        $wp_customize->add_setting( 'facebook_url_field_id', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'transport'         => '',
            'sanitize_callback' => 'esc_url',
        ) );

        $wp_customize->add_control( 'facebook_url_field_id', array(
            'type'              => 'url',
            'priority'          => 10,
            'section'           => 'social_url',
            'label'             => __( 'Facebook URL', 'ap' ),
            'description'       => '',
        ) );

        /* Instagram URL */
        $wp_customize->add_setting( 'instagram_url_field_id', array(
            'default'           => '',
            'type'              => 'theme_mod',
            'capability'        => 'edit_theme_options',
            'transport'         => '',
            'sanitize_callback' => 'esc_url',
        ) );

        $wp_customize->add_control( 'instagram_url_field_id', array(
            'type'              => 'url',
            'priority'          => 10,
            'section'           => 'social_url',
            'label'             => __( 'Instagram URL', 'ap' ),
            'description'       => '',
        ) );

}

add_action('customize_register', 'ap_theme_customizer');
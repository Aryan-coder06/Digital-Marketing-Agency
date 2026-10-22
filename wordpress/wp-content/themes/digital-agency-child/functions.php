<?php
/**
 * Basic theme setup for the NovaReach Digital portfolio demo.
 */

// WordPress calls this function when frontend styles and scripts should load.
function digital_agency_enqueue_assets() {
    // Load the parent theme stylesheet. Hello Elementor provides the base styles.
    wp_enqueue_style(
        'hello-elementor-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( 'hello-elementor' )->get( 'Version' )
    );

    // Load this child theme's custom CSS after the parent stylesheet.
    wp_enqueue_style(
        'digital-agency-custom-style',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array( 'hello-elementor-parent-style' ),
        '1.0.0'
    );

    // Load a small vanilla JavaScript file in the footer.
    wp_enqueue_script(
        'digital-agency-custom-script',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array(),
        '1.0.0',
        true
    );
}

add_action( 'wp_enqueue_scripts', 'digital_agency_enqueue_assets' );

// Register one menu location. Assign the main menu to it in Appearance > Menus.
function digital_agency_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'digital-agency-child' ),
        )
    );
}

add_action( 'after_setup_theme', 'digital_agency_register_menus' );

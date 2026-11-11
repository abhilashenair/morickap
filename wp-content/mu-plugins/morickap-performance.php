<?php
/**
 * Plugin Name: Morickap Performance
 * Description: Skip Swing countdown assets when the theme countdown screen is disabled.
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_enqueue_scripts', function () {
    if ( is_admin() || 'swing' !== get_template() ) {
        return;
    }

    // Match the condition in Swing's header.php that displays countdown.php.
    if ( get_theme_mod( 'swing_enable_ctdown_page', '' ) ) {
        return;
    }

    wp_dequeue_style( 'jquery-classycountdown' );
    wp_dequeue_script( 'jquery-classycountdown' );
    wp_dequeue_script( 'jquery-knob' );
    wp_dequeue_script( 'jquery-throttle' );
}, 100 );

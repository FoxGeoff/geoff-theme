<?php
    add_theme_support('title-tag');

/**
 * Enqueue scripts and styles.
 */
    function geoff_theme_scripts() {
        wp_enqueue_style( 'geoff-theme-styles',get_stylesheet_uri() );
    }

    add_action( 'wp_enqueue_scripts', 'geoff_theme_scripts' );
?>

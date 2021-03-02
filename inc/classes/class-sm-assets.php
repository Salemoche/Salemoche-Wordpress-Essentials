<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

class SalemocheAssets {

    function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'add_assets']);
    }

    public function add_assets ( ) {
        
        wp_register_script( 'main', SALEMOCHE_ESSENTIALS_JS_URL . '/main.js', [ 'jquery' ], false, false );
        wp_enqueue_script( 'main' );

        wp_register_style( 'slick-css', SALEMOCHE_ESSENTIALS_CSS_URL . '/slick.css', [], false, 'all' );
        wp_enqueue_style('slick-css');
        
        wp_register_script( 'slick-js', SALEMOCHE_ESSENTIALS_JS_URL . '/slick.js', [ 'jquery' ], false, true );
        wp_enqueue_script('slick-js');

    }
}

new SalemocheAssets();
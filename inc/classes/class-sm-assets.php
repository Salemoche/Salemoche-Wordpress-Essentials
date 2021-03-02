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

        wp_register_style( 'slick-css', UZHxUNIGE_BUILD_CSS_URI . '/slick.css', [], filemtime( UZHxUNIGE_BUILD_CSS_DIR_PATH . '/slick.css'), 'all' );
        wp_enqueue_style('slick-css');
        
        wp_register_script( 'slick-js', UZHxUNIGE_BUILD_JS_URI . '/slick.js', [ 'jquery' ], filemtime( UZHxUNIGE_BUILD_JS_DIR_PATH . '/slick.js'), true );
        wp_enqueue_script('slick-js');

    }
}

new SalemocheAssets();
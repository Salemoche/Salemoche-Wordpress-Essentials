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
    }
}

new SalemocheAssets();
<?php

/**
 * Add Assets
 * 
 * @package Bachstein
 */

class BachsteinAssets {

    function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'add_assets']);
    }

    public function add_assets ( ) {
        
        // wp_register_script( 'sm-main-js', SALEMOCHE_ESSENTIALS_JS_URL . '/main.js', [ 'jquery' ], false, false );
        // wp_enqueue_script( 'sm-main-js' );

        // wp_register_style( 'sm-slick-css', SALEMOCHE_ESSENTIALS_CSS_URL . '/slick.css', [], false, 'all' );
        // wp_enqueue_style('sm-slick-css');
        
        // wp_register_script( 'sm-slick-js', SALEMOCHE_ESSENTIALS_JS_URL . '/slick.js', [ 'jquery' ], false, true );
        // wp_enqueue_script('sm-slick-js');

    }
}

new BachsteinAssets();
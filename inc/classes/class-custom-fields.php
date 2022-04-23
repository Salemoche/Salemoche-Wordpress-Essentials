<?php

/**
 * Add Assets
 * 
 * @package Bachstein
 */

class BachsteinCustomFields {

    function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'add_assets']);
    }

    public function add_assets ( ) {
        
        

    }
}

new BachsteinCustomFields();
<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

namespace SALEMOCHE\classes;

class SalemocheUtilities {

    function __construct() {

        // add_action('wp_enqueue_scripts', [$this, 'add_assets']);
    }

    public function add_testimonial_post_type ( ) {
        
        function salemoche_custom_post_type() {
            register_post_type('salemoche_product',
                array(
                    'labels'      => array(
                        'name'          => __('Products', 'textdomain'),
                        'singular_name' => __('Product', 'textdomain'),
                    ),
                        'public'      => true,
                        'has_archive' => true,
                )
            );
        }

        add_action('init', 'salemoche_custom_post_type');
    }
}
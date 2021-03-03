<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

namespace SALEMOCHE\classes;

class SalemocheUtilities {

    function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'add_assets']);
    }

    public function add_testimonial_post_type ( ) {
        
        function wporg_custom_post_type() {
            register_post_type('wporg_product',
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
        add_action('init', 'wporg_custom_post_type');
    }
}
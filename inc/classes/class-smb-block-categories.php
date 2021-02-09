<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

class SMBBlockCategories {

    function __construct() {

        add_action('block_categories', [$this, 'add_block_categories']);
    }

    public function add_block_categories ( $categories ) {
        
        $category_slugs = wp_list_pluck( $categories, 'slug' );

        return in_array( 'salemoche', $category_slugs, true) ? $categories : 
            array_merge ([
                    [
                        'slug' => 'salemoche',
                        'title' => __( 'Salemoche Blocks', 'salemoche' ),
                        'icon' => 'table-row-after'
                    ]
                ], 
                $categories
            );
    }
}

new SMBBlockCategories();
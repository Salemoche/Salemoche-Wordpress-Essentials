<?php

/**
 * Register Block Class
 * 
 * @package Bachstein
 */

class BachsteinBlocks {

    function __construct() {

        add_action('block_categories_all', [$this, 'add_block_categories']);
        add_action('acf/init', [$this, 'register_blocks']);
        // add_action('acf/init', [$this, 'add_field_groups']);
        // add_action( 'acf/init', array( $this, 'create_group' ) );

        add_filter( 'allowed_block_types_all', [$this, 'allowed_block_types'], 10, 2 );


        // $this->create_form('some-form');
    }

    
    /**========================
    *	Register Block Categories
    *========================*/

    public function add_block_categories ( $categories ) {
        
        $category_slugs = wp_list_pluck( $categories, 'slug' );

        return in_array( 'bachstein', $category_slugs, true) ? $categories : 
            array_merge ([
                    [
                        'slug' => 'bachstein',
                        'title' => __( 'Bachstein Blocks', 'bachstein' ),
                        'icon' => 'table-row-after'
                    ]
                ], 
                $categories
            );
    }

    
    /**========================
    *	Register Blocks
    *========================*/

    public function register_blocks () {
        if( function_exists('acf_register_block_type') ) {

            // acf_register_block_type(array(
            //     'name'              => 'test',
            //     'title'             => __('Test Block'),
            //     'description'       => __('A custom Jenny from the Block'),
            //     'render_template'   => BACHSTEIN_BLOCK_TEMPLATE_DIR . '/test.php',
            //     'category'          => 'bachstein',
            //     'mode'              => 'auto',
            //     // 'align'             => 'full',
            //     'icon'              => 'admin-comments',
            //     'keywords'          => array( 'block'),
            //     // 'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            // ));

            acf_register_block_type(array(
                'name'              => 'slider',
                'title'             => __('Slider'),
                'description'       => __('A custom Block for a Slider / Carousel'),
                'render_template'   => BACHSTEIN_BLOCK_TEMPLATE_DIR . '/slider.php',
                'category'          => 'bachstein',
                'mode'              => 'auto',
                // 'align'             => 'full',
                'icon'              => 'slides',
                'keywords'          => array( 'block'),
                // 'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            ));

            acf_register_block_type(array(
                'name'              => 'gallery',
                'title'             => __('Gallery'),
                'description'       => __('A custom Block for a Gallery'),
                'render_template'   => BACHSTEIN_BLOCK_TEMPLATE_DIR . '/gallery.php',
                'category'          => 'bachstein',
                'mode'              => 'auto',
                // 'align'             => 'full',
                'icon'              => 'format-gallery',
                'keywords'          => array( 'block'),
                // 'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            ));
        }
    }

    
    /**========================
    *	Add ACF Field Groups
    *========================*/

    // public function add_field_groups () {
	
    //     acf_add_local_field_group(array(
    //         'key' => 'group_1',
    //         'title' => 'My Group',
    //         'fields' => array (
    //             array (
    //                 'key' => 'field_1',
    //                 'label' => 'Sub Title',
    //                 'name' => 'sub_title',
    //                 'type' => 'text',
    //             )
    //         ),
    //         'location' => array (
    //             array (
    //                 array (
    //                     'param' => 'post_type',
    //                     'operator' => '==',
    //                     'value' => 'post',
    //                 ),
    //             ),
    //         ),
    //     ));
        
    // }
    
    // public function create_group( $group_name ) {
    
    //     acf_add_local_field_group( array(
    //         'key'      => 'group_1',
    //         'title'    => 'My Group',
    //         'fields'   => array(
    //             array(
    //                 'key'   => 'field_1',
    //                 'label' => 'Sub Title',
    //                 'name'  => 'sub_title',
    //                 'type'  => 'text',
    //             )
    //         ),
    //         'location' => array(
    //             array(
    //                 array(
    //                     'param'    => 'post_type',
    //                     'operator' => '==',
    //                     'value'    => 'post',
    //                 ),
    //             ),
    //         ),
    //     ) );
    
    //     return true;
    // }

    
    /**========================
    *	Allow Block Types
    *========================*/

    public function allowed_block_types ( $block_editor_context, $editor_context ) {
        if ( ! empty( $editor_context->post ) ) {
            return array(

                'core/paragraph',
                'core/heading',
                'core/list',
                'core/quote',
                'core/code',
                'core/table',
                'core/spacer',
                'core/paragraph',
                'core/preformatted',
                'core/pullquote',
                'core/list',
                'core/image',
                'core/html',
                'core/audio',
                'core/button',
                'core/column',
                'core/columns',
                'core/file',
                'core/freeform',
                'core/heading',
                'core/separator',
                
                // 'core/coverImage',
                // 'core/gallery',
                // 'core/reusableBlock',
                // 'core/embed',
                // 'core/subhead',
                // 'core/textColumns',
                // 'core/verse',
                // 'core/video',

                // Custom ACF Block Types
                // 'acf/test',
                'acf/gallery',
                'acf/slider',
            );
        }

        echo ('geronimow');
    
        return $block_editor_context;
    }

    public function enqueue_assets () {
        // wp_enqueue_script( 'block-testimonial', SALEMOCHE_ESSENTIALS_JS_URL . '/main.js', ['jquery'], false, true );
        // wp_enqueue_style( 'block-testimonial', SALEMOCHE_ESSENTIALS_CSS_URL . '/main.css');
    }
}

new BachsteinBlocks();
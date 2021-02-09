<?php

/**
 * Register Block Class
 * 
 * @package Salemoche Blocks
 */

class SMBRegisterBlocks {

    function __construct() {

        add_action('acf/init', [$this, 'register_lead_block']);
        add_action('acf/init', [$this, 'register_wysiwyg_block']);
    }

    public function register_lead_block () {
        if( function_exists('acf_register_block_type') ) {

            acf_register_block_type(array(
                'name'              => 'lead',
                'title'             => __('Lead'),
                'description'       => __('A custom lead block.'),
                'render_template'   => SALEMOCHE_ESSENTIALS_BLOCK_TEMPLATE_DIR . '/post-lead.php',
                'category'          => 'salemoche',
                'mode'              => 'auto',
                // 'align'             => 'full',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'lead' ),
                'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            ));
        }
    }

    public function register_wysiwyg_block () {
        if( function_exists('acf_register_block_type') ) {

            acf_register_block_type(array(
                'name'              => 'wysiwyg',
                'title'             => __('Variable Text'),
                'description'       => __('A custom block for variable content'),
                'render_template'   => SALEMOCHE_ESSENTIALS_BLOCK_TEMPLATE_DIR . '/wysiwyg.php',
                'category'          => 'salemoche',
                'mode'              => 'auto',
                // 'align'             => 'full',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'wysiwyg' ),
                'enqueue_assets'    => [ $this, 'enqueue_assets' ],
            ));
        }
    }

    public function enqueue_assets () {
        // wp_enqueue_script( 'block-testimonial', SALEMOCHE_ESSENTIALS_JS_URL . '/main.js', ['jquery'], false, true );
        wp_enqueue_style( 'block-testimonial', SALEMOCHE_ESSENTIALS_CSS_URL . '/main.css');
    }
}

new SMBRegisterBlocks();
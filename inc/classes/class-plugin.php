<?php

/**
 * Base Plugin
 * 
 * @package Bachstein
 */

class BachsteinPlugin {

    function __construct() {

        add_filter('theme_page_templates', [$this, 'add_page_template']);
        add_filter('page_template', [$this, 'redirect_page_template']);
        $this->add_image_sizes();

    }

    
    /**========================
    *	Custom Image Size
    *========================*/
    public function add_image_sizes () {
        add_image_size( 'blur', 15, 10 );
    }

    
    /**========================
    *	Add Templates from Plugin
    *========================*/

    public function add_page_template ($templates) {
        $templates['archive-template.php'] = 'Archive';
        return $templates;
    }

    public function redirect_page_template ($template) {
        $post = get_post(); 
        $page_template = get_post_meta( $post->ID, '_wp_page_template', true ); 
        
        if ('archive-template.php' == basename ($page_template ))
            $template = BACHSTEIN_TEMPLATE_DIR . 'archive-template.php';
        return $template;
    }

}

new BachsteinPlugin();
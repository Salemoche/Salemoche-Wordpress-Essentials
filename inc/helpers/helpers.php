<?php
function salemoche_post_ids_from_acf_page_link ($posts) {

    $post_ids = [];

    if ( is_array($posts) && !empty($posts) ) {
        foreach ( $posts as $post_url ) {
            array_push( $post_ids, url_to_postid( $post_url ) );
        }
    }
    
    return $post_ids;
}

function salemoche_get_categories( $the_post_id = '',  $string = false ) {

    if ($the_post_id == '') {
        $the_post_id = get_the_ID();
    }

    $category_ids = wp_get_post_categories( $the_post_id );
    
    if ($string) {
        
        $categories = "";
        foreach ( $category_ids as $category_id ) {
            $category = get_category( $category_id );
            $categories .= $category->slug;
        }

    } else {

        $categories = [];
        foreach ( $category_ids as $category_id ) {
            $category = get_category( $category_id );
            array_push( $categories, $category );
        }
        
    }

    return $categories;
}

function salemoche_get_tags( $the_post_id = '',  $string = false ) {

    if ($the_post_id == '') {
        $the_post_id = get_the_ID();
    }

    $tag_ids = wp_get_post_tags( $the_post_id );

    foreach ( $tag_ids as $tag_id ) {
        $tag = get_tag( $tag_id );
        array_push( $tags, $tag );
    }

    
    if ($string) {
        
        $tags = "";
        foreach ( $tag_ids as $tag_id ) {
            $tag = get_tag( $tag_id );
            $tags .= $tag->slug;
        }

    } else {

        $tags = [];
        foreach ( $tag_ids as $tag_id ) {
            $tag = get_tag( $tag_id );
            array_push( $tags, $tag );
        }
        
    }
    return $tags;
}

function salemoche_get_block($block_name) {
    $blocks = parse_blocks(get_post()->post_content);

    foreach ($blocks as $block) {

        if (isset($inner_block['blockName']) && $inner_block['blockName'] == $block_name) {
            return $inner_block['attrs'];
        } else {
            foreach ($block['innerBlocks'] as $inner_block) {
                if (isset($inner_block['blockName']) && $inner_block['blockName'] == $block_name) {
                    return $inner_block['attrs'];
                }
            }
        }
    }

    return false;
}

function salemoche_kses_wysiwyg( $string ) {
    return wp_kses( $string , [
        'p' => [],
        'a' => [
            'href' => [],
            'download' => []
        ],
        'h2' => [],
        'h3' => [],
        'h4' => [],
        'ul' => [],
        'ol' => [],
        'li' => [],
    ] );
}

function salemoche_get_link($link, $classes = '') {

    if (!isset($link) || empty($link)) return;
    $url = $link['url'] ?: '';
    $target = $link['target'] ?: '';
    $title = $link['title'] ?: '';

    return '<a href="' . $url .  '" target="' . $target .  '" class="'. $classes . '"> '
                . $title .  
            '</a>';
}
?>
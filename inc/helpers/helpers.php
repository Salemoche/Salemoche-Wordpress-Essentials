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

function salemoche_get_categories( $the_post_id ) {
    $category_ids = wp_get_post_categories( $the_post_id );
    $categories = [];

    foreach ( $category_ids as $category_id ) {
        $category = get_category( $category_id );
        array_push( $categories, $category );
    }

    return $categories;
}

function salemoche_get_tags( $the_post_id ) {
    $tag_ids = wp_get_post_tags( $the_post_id );
    $tags = [];

    foreach ( $tag_ids as $tag_id ) {
        $category = get_category( $tag_id );
        array_push( $tags, $category );
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
?>
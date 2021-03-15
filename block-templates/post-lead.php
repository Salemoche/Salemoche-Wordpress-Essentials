<?php

/**
 * Lead block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
// $id = 'testimonial-' . $block['id'];
// if( !empty($block['anchor']) ) {
//     $id = $block['anchor'];
// }

// Create class attribute allowing for custom "className" and "align" values.
// $className = 'testimonial';
// if( !empty($block['className']) ) {
//     $className .= ' ' . $block['className'];
// }
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

// Load values and assign defaults.
$text = get_field('post_lead') ?: 'Your post lead here...';
$small = esc_html( ' sm-small-' . get_field('block_alignment_small') ) ?: '';
$medium = esc_html( ' sm-medium-' . get_field('block_alignment_medium') ) ?: '';
$large = esc_html( ' sm-large-' . get_field('block_alignment_large') ) ?: '';
$classes = 'scientifica-post-lead sm-col' . $small . $medium . $large;

?>
<div class="<?php echo $classes ?>">
    <h2><?php echo esc_html( $text ); ?></h2>
</div>
<?php

/**
 * Lead block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$content = get_field('wysiwyg') ?: 'Add Text';
$small = esc_html( ' sm-small-' . get_field('block_alignment_small') ) ?: '6';
$medium = esc_html( ' sm-medium-' . get_field('block_alignment_medium') ) ?: '5';
$large = esc_html( ' sm-large-' . get_field('block_alignment_large') ) ?: '5';
$classes = 'sm-wysiwyg sm-col' . $small . $medium . $large;

?>
<div class="<?php echo $classes ?>">
    <?php echo $content; ?>
</div>
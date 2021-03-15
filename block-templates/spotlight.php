<?php

/** =============================================
*
*   Spotlight block
*   
* ============================================= */

// Load values and assign defaults.
$title = get_field('block_spotlight_title') ?: 'Add a title';
$lead = get_field('block_spotlight_lead') ?: 'Add a lead';
$posts = get_field('block_spotlight_posts') ?: [];
$post_ids = salemoche_post_ids_from_acf_page_link($posts);
$post_1 = $post_ids[0];
$post_2 = $post_ids[1];

$classes = 'scientifica-spotlight scientifica-section sm-block';

?>

<div class="<?php echo $classes ?>">
    <div class="scientifica-spotlight__intro sm-col sm-large-5 sm-small-6">
        <h2 class="scientifica-section-header scientifica-spotlight__intro__header"><?php echo esc_html( $title ); ?></h2>
        <div class="scientifica-section-lead scientifica-spotlight__intro__lead"><?php echo esc_html( $lead ); ?></div>
        <?php if ( !empty( $post_1) ): ?>
            <a class="scientifica-spotlight__intro__tile" href="<?php echo get_the_permalink($post_1); ?>">
                <?php echo get_the_title($post_1); ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="scientifica-spotlight__large-tile sm-col sm-large-6 sm-small-6">
        <?php if ( !empty( $post_2) ): ?>
            <a class="scientifica-spotlight__intro__tile" href="<?php echo get_the_permalink($post_2); ?>">
                <?php echo get_the_title($post_2); ?>
            </a>
        <?php endif; ?>
    </div>
</div>
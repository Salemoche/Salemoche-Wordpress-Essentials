<?php

/**
 * Test block template.
 */

// Load values and assign defaults.
$title = get_field('title') ?: 'Your title here...';

?>
<div class="bs-test-block">
    <h2><?php echo esc_html( $title ); ?></h2>
</div>
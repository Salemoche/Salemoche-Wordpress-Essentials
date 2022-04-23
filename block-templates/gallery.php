<?php

/**
 * Test block template.
 */

// Load values and assign defaults.
$images = get_field('images');

echo '<h3>Gallery Placeholder</h3>';
echo '<div style="display: none">';

echo '{\"images\":';
foreach ($images as $image) {
    echo '\"' . $image . '\"';
};
echo '}';

echo '</div>';

?>
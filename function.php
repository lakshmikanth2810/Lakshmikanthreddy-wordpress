<?php
function mytheme_setup() {
    add_theme_support('block-editor-styles');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'mytheme_setup');

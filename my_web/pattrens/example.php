<?php
register_block_pattern(
    'mytheme/example',
    array(
        'title'       => __('Example Pattern', 'mytheme'),
        'description' => __('A custom pattern example.'),
        'content'     => '<!-- wp:paragraph --><p>This is a custom pattern block.</p><!-- /wp:paragraph -->'
    )
);

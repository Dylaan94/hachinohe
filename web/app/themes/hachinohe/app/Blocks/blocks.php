<?php

// Register Blocks 
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register a test block.
        acf_register_block_type(array(
            'name'              => 'test',
            'title'             => __('test'),
            'description'       => __('A custom test block.'),
            'render_template'   => 'resources/views/blocks/test.blade.php',
            'category'          => 'formatting',
        ));
    }
}

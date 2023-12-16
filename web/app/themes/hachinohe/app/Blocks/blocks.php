<?php

// Register Blocks 
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Block: Hero Slider
        acf_register_block_type(array(
            'name'              => 'hero-slider',
            'title'             => __('Hero Slider'),
            'description'       => __('A block for showing the hero slider.'),
            'render_callback' => function ($block) {
                echo view('blocks/hero-slider', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));
    }
}

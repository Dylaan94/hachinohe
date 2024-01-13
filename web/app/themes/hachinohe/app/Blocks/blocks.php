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

        // Block: Stores 
        acf_register_block_type(array(
            'name'              => 'content-panel',
            'title'             => __('Content Panel'),
            'description'       => __('A block for showing content panels.'),
            'render_callback' => function ($block) {
                echo view('blocks/content-panel', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Stores 
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A block for showing plain hero.'),
            'render_callback' => function ($block) {
                echo view('blocks/hero', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Summary
        acf_register_block_type(array(
            'name'              => 'summary',
            'title'             => __('Summary'),
            'description'       => __('A block for showing summary.'),
            'render_callback' => function ($block) {
                echo view('blocks/summary', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Google Maps
        acf_register_block_type(array(
            'name'              => 'google-maps',
            'title'             => __('Google Maps'),
            'description'       => __('A block for showing google maps.'),
            'render_callback' => function ($block) {
                echo view('blocks/google-maps', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Showcase Panel
        acf_register_block_type(array(
            'name'              => 'showcase-panel',
            'title'             => __('Showcase Panel'),
            'description'       => __('A block for showing showcase panels.'),
            'render_callback' => function ($block) {
                echo view('blocks/showcase-panel', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Gallery
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Gallery'),
            'description'       => __('A block for showing gallery.'),
            'render_callback' => function ($block) {
                echo view('blocks/gallery', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Text Panel
        acf_register_block_type(array(
            'name'              => 'text-panel',
            'title'             => __('Text Panel'),
            'description'       => __('A block for showing text panels.'),
            'render_callback' => function ($block) {
                echo view('blocks/text-panel', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));

        // Block: Text Cards
        acf_register_block_type(array(
            'name'              => 'text-cards',
            'title'             => __('Text Cards'),
            'description'       => __('A block for showing text cards.'),
            'render_callback' => function ($block) {
                echo view('blocks/text-cards', ['block' => $block]);
            },
            'category'          => 'formatting',
        ));
    }
}

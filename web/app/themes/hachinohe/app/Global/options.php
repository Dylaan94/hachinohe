<?php

add_action('acf/init', 'my_acf_options_init');
function my_acf_options_init()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => __('Global Settings'),
            'menu_title' => __('Global Settings'),
            'menu_slug' => 'global-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
}

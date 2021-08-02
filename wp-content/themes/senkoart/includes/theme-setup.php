<?php

function slavonik_cream_scripts()
{
    wp_enqueue_style('senkoart-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('senkoart-style', 'rtl', 'replace');

    wp_enqueue_script('senkoart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'slavonik_cream_scripts');

add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
    add_image_size('gallery-thumb', 700, 500);
    add_theme_support('post-thumbnails');
}

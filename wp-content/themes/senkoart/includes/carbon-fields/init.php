<?php
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once(get_template_directory() . '/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'crb_init_fields');
function crb_init_fields()
{
    require "blocks/Gallery.php";
    require "blocks/Container.php";
    require "blocks/Page-title-block.php";
    require "blocks/Page-title-slider.php";
    require "blocks/Services-block.php";
    require "blocks/Price.php";
    require "blocks/Text-block.php";
    require "blocks/Our-specialists.php";
    require "blocks/Reviews.php";
    require "blocks/Advantages.php";
    require "blocks/Links-list.php";
    require "blocks/Partners.php";
    require "blocks/Portfolio-posts.php";

    require "fields/theme-options.php";
}

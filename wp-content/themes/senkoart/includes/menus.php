<?php

function menu_setup()
{
    register_nav_menus(
        array(
            'main-menu' => 'Main menu',
        )
    );
}

add_action('after_setup_theme', 'menu_setup');

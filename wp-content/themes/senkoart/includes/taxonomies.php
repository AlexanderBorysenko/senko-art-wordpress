<?php
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
    register_taxonomy('portfolio-category', ['portfolio'], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории портфолио',
            'singular_name'     => 'Категория портфолио',
            'search_items'      => 'Искать категорию портфолио',
            'all_items'         => 'Все категории портфолио',
            'view_item '        => 'Показать категорию портфолио',
            'parent_item'       => 'Родительская категория портфолио',
            'parent_item_colon' => 'Родительская категория портфолио:',
            'edit_item'         => 'Редактировать категорию портфолио',
            'update_item'       => 'Обновить категорию портфолио',
            'add_new_item'      => 'Добавить новую категорию портфолио',
            'new_item_name'     => 'Новое имя категории портфолио',
            'menu_name'         => 'Категории портфолио',
        ],
        'public'                => true,
        'hierarchical'          => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_in_rest'          => true, // добавить в REST API
    ]);

    register_taxonomy('blog-category', ['blog'], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории блога',
            'singular_name'     => 'Категория блога',
            'search_items'      => 'Искать категорию блога',
            'all_items'         => 'Все категории блога',
            'view_item '        => 'Показать категорию блога',
            'parent_item'       => 'Родительская категория блога',
            'parent_item_colon' => 'Родительская категория блога:',
            'edit_item'         => 'Редактировать категорию блога',
            'update_item'       => 'Обновить категорию блога',
            'add_new_item'      => 'Добавить новую категорию блога',
            'new_item_name'     => 'Новое имя категории блога',
            'menu_name'         => 'Категории блога',
        ],
        'public'                => true,
        'hierarchical'          => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_in_rest'          => true, // добавить в REST API
    ]);
}

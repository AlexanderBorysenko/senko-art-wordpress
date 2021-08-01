<?php

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('portfolio', [
        'label'  => null,
        'labels' => [
            'name'               => 'Портфолио', // основное название для типа записи
            'singular_name'      => 'Проект в портфолио', // название для одной записи этого типа
            'add_new'            => 'Добавить проект', // для добавления новой записи
            'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать проект', // для редактирования типа записи
            'new_item'           => 'Новый проект', // текст новой записи
            'view_item'          => 'Показать проект', // для просмотра записи этого типа.
            'search_items'       => 'Искать проект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Порфолио', // название меню
        ],
        'public'              => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-index-card',
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies'          => ['portfolio-category'],
        'has_archive'         => true,
    ]);

    register_post_type('blog', [
        'label'  => null,
        'labels' => [
            'name'               => 'Блог', // основное название для типа записи
            'singular_name'      => 'Запись в блоге', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать запись', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Показать запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено записей', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено записей', // если не было найдено в корзине
            'menu_name'          => 'Блог', // название меню
        ],
        'public'              => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-edit',
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies'          => ['blog-category'],
        'has_archive'         => true,
    ]);
}

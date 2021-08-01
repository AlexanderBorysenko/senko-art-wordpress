<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-portfolio-posts', 'Посты портфолио')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Записи портфолио'),
        Field::make('text', 'title', 'Заголовок')->set_default_value('Portfolio'),
        Field::make('association', 'posts')
            ->set_types(array(
                array(
                    'type' => 'post',
                    'post_type' => 'portfolio',
                )
            ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $posts_list = array();
        foreach ($fields['posts'] as $post_data) :
            $post = get_post($post_data['id']);
            $post->image = get_the_post_thumbnail_url($post_data['id'], 'full');
            $posts_list[] = $post;
        endforeach;

        $fields['posts'] = $posts_list;
?>
    <script type="application/json" class="portfolio-posts">
        <?= json_encode($fields) ?>
    </script>

<?php
    });

<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-page-title-slider', 'Заголовок страници (Слайдер)')
    ->add_fields(array(
        Field::make('complex', 'slides', 'Слайды')->add_fields(array(
            Field::make('text', 'title', 'Заголовок'),
            Field::make('rich_text', 'text', 'Текст'),
            Field::make('text', 'link', 'Ссылка'),
            Field::make('text', 'linktext', 'Текст ссылки'),
            Field::make('image', 'image', 'Картинка')->set_value_type('url'),
        ))

    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>
    <script type="application/json" class="page-title-slider">
        <?= json_encode($fields) ?>
    </script>
<?php
    });

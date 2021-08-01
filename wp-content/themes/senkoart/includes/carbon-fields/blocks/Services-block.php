<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-services', 'Услуги')
    ->add_fields(array(
        Field::make('complex', 'services', 'Услуги')->add_fields(array(
            Field::make('text', 'title', 'Заголовок'),
            Field::make('rich_text', 'text', 'Текст / Описание'),
            Field::make('text', 'link', 'Ссылка'),
            Field::make('image', 'image', 'Картинка')->set_value_type('url'),
            Field::make('text', 'colspan', 'Занимать колонок')->set_default_value(1),
            Field::make('text', 'rowspan', 'Занимать строк')->set_default_value(1),
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="services">
        <?= json_encode($fields) ?>
    </script>

<?php
    });

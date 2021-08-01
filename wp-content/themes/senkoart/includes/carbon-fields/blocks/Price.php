<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-price', 'Цены')
    ->add_fields(array(
        Field::make('complex', 'prices', 'Цены')->add_fields(array(
            Field::make('text', 'title', 'Заголовок'),
            Field::make('text', 'price', 'Цена'),
            Field::make('text', 'pricedescription', 'Примечание к цене'),
            Field::make('rich_text', 'text', 'Описание'),
            Field::make('complex', 'links', 'Дополнительные ссылки')->add_fields(array(
                Field::make('text', 'link', 'Ссылка'),
                Field::make('text', 'linktext', 'Текст ссылки'),
            ))
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="prices">
        <?= json_encode($fields) ?>
    </script>

<?php
    });

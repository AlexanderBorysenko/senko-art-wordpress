<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-partners', 'Партнёры (ссылки)')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Партнёры'),
        Field::make('complex', 'items', 'Items')->add_fields('item', 'Картинки', array(
            Field::make('image', 'image', 'Картинка')->set_value_type('url')->set_width(25),
            Field::make('text', 'link', 'Ссылка')->set_width(75),
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>
    <script type="application/json" class="partners">
        <?= json_encode($fields['items']) ?>
    </script>
<?php
    });

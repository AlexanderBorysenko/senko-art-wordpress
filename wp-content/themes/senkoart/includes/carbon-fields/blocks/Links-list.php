<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-links-list', 'Список ссылок')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Список ссылок'),
        Field::make('complex', 'items', 'Items')->add_fields('item', 'Ссылка', array(
            Field::make('text', 'text', 'Текст')->set_width(50),
            Field::make('text', 'link', 'Ссылка')->set_width(50),
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="links-list">
        <?= json_encode($fields['items']) ?>
    </script>

<?php
    });

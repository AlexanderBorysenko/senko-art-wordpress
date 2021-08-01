<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-advantages', 'Преимущества')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Преимущества'),
        Field::make('complex', 'items', 'Items')->add_fields('item', 'Преимущество', array(
            Field::make('textarea', 'icon', 'Icon (SVG)'),
            Field::make('text', 'title', 'Tile'),
            Field::make('textarea', 'text', 'Text'),
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="advantages">
        <?= json_encode($fields['items']) ?>
    </script>

<?php
    });

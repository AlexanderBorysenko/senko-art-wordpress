<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-title', 'Заголовок')
    ->add_fields(array(
        Field::make('text', 'title', 'Заголовок'),
    ))->set_inner_blocks(true)
    ->set_inner_blocks_position('below')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="title">
        <?= json_encode($fields) ?>
    </script>

<?php
    });

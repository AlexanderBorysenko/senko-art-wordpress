<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-specialists', 'Персонал')
    ->add_fields(array(
        Field::make('complex', 'specialists', 'Специалисты')->add_fields(array(
            Field::make('image', 'image', 'Фото')->set_value_type('url'),
            Field::make('text', 'name', 'Имя'),
            Field::make('text', 'role', 'Роль'),
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <script type="application/json" class="specialists">
        <?= json_encode($fields) ?>
    </script>

<?php
    });

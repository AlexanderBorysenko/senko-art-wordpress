<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-container', 'Контейнер')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Контейнер'),
        Field::make('select', 'type', __('Choose Options'))
            ->set_options(array(
                '' => 'Ограничить 1200px',
                'wide-' => 'На всю страничку с внутренним отступом 20px',
            ))
    ))->set_inner_blocks(true)
    ->set_inner_blocks_position('below')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <div class='<?= $fields['type'] ?>container' style="padding: 20px 0">
        <?= $inner_blocks ?>
    </div>

<?php
    });

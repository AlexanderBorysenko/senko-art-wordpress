<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-text-block', 'Блок для текста и типографики')
    ->add_fields(array(
        Field::make('separator', 'separator', 'Текстовый блок'),
    ))
    ->set_inner_blocks(true)
    ->set_inner_blocks_position('below')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>
    <section class="text-block">
        <?= $inner_blocks ?>
    </section>

<?php
    });

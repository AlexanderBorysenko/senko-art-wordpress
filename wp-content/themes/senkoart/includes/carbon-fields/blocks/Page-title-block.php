<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-page-title-block', 'Заголовок страници')
    ->add_fields(array(
        Field::make('text', 'title', 'Заголовок'),
        Field::make('rich_text', 'text', 'Текст'),
        Field::make('image', 'image', 'Картинка')->set_value_type('url'),
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $props = array();
        $props['title'] = $fields['title'];
        $props['text'] = $fields['text'];
        $props['image'] = $fields['image'];
        $json_props = json_encode($props);
?>
    <script type="application/json" class="page-title-block">
        <?= $json_props ?>
    </script>
<?php
    });

<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-gallery', 'Галлерея')
    ->add_fields(array(
        Field::make('media_gallery', 'images')
            ->set_type(array('image')),
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {

        $images = array();
        foreach ($fields['images'] as $image) {
            $images[] = [
                'id' => $image,
                'full' => wp_get_attachment_url($image),
                'thumbnail' => wp_get_attachment_image_src($image, 'gallery-thumb')[0],
                'alt' => get_post_meta($image, '_wp_attachment_image_alt', TRUE)
            ];
        }
?>
    <script type="application/json" class="gallery">
        <?= json_encode($images) ?>
    </script>
<?php
    });

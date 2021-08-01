<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-gallery', 'Галлерея')
    ->add_fields(array(
        Field::make('complex', 'images', 'Картинки')->add_fields(array(
            Field::make('image', 'image', 'Картинка')
        ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>
    <section class="gallery">
        <?php
        foreach ($fields['images'] as $image) :
        ?>
            <div class="gallery-item">
                <img class="full" data-id="<?= $image['image'] ?>" src="<?= wp_get_attachment_url($image['image']) ?>" alt="">
                <img class="thumb" src="<?= wp_get_attachment_image_src($image['image'], 'gallery-thumb')[0] ?>" alt="">
            </div>
        <?php
        endforeach;
        ?>
    </section>
<?php
    });

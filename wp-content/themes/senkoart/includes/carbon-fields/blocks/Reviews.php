<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('crb-reviews', 'Reviews')
    ->add_fields(array(
        Field::make('image', 'image', 'Photo')->set_value_type('url'),
    ))
    ->set_render_callback(function ($fields) {
?>
    <!-- $fields looks like ['image': 'value...'] -->
    <script type="application/json" class="reviews">
        <?= json_encode($fields) ?>
    </script>
<?php
    });

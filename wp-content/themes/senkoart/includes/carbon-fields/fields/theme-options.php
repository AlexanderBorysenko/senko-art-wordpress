<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'crb_contacts', 'Контакты и информация')
    ->add_fields(array(
        Field::make('text', 'crb_firma', 'Firma'),
        Field::make('text', 'crb_adress', 'Adres'),
        Field::make('text', 'crb_nip', 'Nip'),
        Field::make('text', 'crb_telefon', 'Telefon'),
        Field::make('text', 'crb_email', 'Email'),
        Field::make('text', 'crb_facebook', 'Facebook'),
        Field::make('text', 'crb_instagram', 'Instagram'),
        Field::make('text', 'crb_number_konta_firmowego', 'Numer konta firmowego'),
    ));

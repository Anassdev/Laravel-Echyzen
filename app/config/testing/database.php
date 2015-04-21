<?php

/*
|--------------------------------------------------------------------------
| Mise en place DB pour les test
|--------------------------------------------------------------------------
|
| En mode testing la base MySQL est ignorée
| et c’est une base sqlite qui sera créée en mémoire vive.
|
*/
return array(

    'default' => 'sqlite',

    'connections' => array(
        'sqlite' => array(
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => ''
        ),
    )
);
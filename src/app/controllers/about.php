<?php

$title = 'My Blog :: About';

$post = 'Lorem';

$recent_posts= [
    1 => ['title' => 'A an item',
        'slug'=> lcfirst(str_replace('', '-','A n item'))
    ],2 => ['title' => 'A second item',
        'slug'=> lcfirst(str_replace('', '-','A second item'))
    ],3 => ['title' => 'A third item',
        'slug'=> lcfirst(str_replace('', '-','A third item'))
    ],4 => ['title' => 'A fourth item',
        'slug'=> lcfirst(str_replace('', '-','A fourth item'))
    ],5 => ['title' => 'And a fifth one',
        'slug'=> lcfirst(str_replace('', '-','And a fifth one'))
    ],
];

require_once VIEWS . '/about.tpl.php';
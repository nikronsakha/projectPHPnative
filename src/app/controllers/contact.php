<?php

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

$title = 'My Blog :: Contacts';
$contacts = [
    1 => [
        'user'=>'nikita',
        'number'=> 89241656972,
    ],2 => [
        'user'=>'nikita2',
        'number'=> 89241656972,
    ],3 => [
        'user'=>'nikita3',
        'number'=> 89241656972,
    ],4 => [
        'user'=>'nikita4',
        'number'=> 89241656972,
    ],5 => [
        'user'=>'nikita5',
        'number'=> 89241656972,
    ],
];

require_once VIEWS . '/posts.tpl.php';

<?php
$title = 'My Blog :: Home';


$posts = [
        1 =>['title'=> 'В Якутии',
            'desk' => 'Здесь история о моих путешествиях по восточной Якутии.',
            'slug' => 'В Якутии',
        ],
         2 =>[
                'title'=> 'В Кыргызтане',
                'desk' => 'Здесь история о моих путешествиях по .',
                'slug' => 'В Кыргызтане',
        ],
        3 =>['title'=> 'В Казахстане',
            'desk' => 'Здесь история о моих путешествиях по.',
            'slug' => 'В Казахстане',
            ],
        4 =>[
            'title'=> 'В Индия',
            'desk' => 'Здесь история о моих путешествиях по.',
            'slug' => 'В Индия',
        ]
];


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


require_once VIEWS . '/index.tpl.php';



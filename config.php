<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
            'people' => [
            'path' => 'people',
            'sort' => 'last_name',
        ],
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{filename}',
        ],
    ],
];

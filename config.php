<?php

return [
    'production' => false,
    'baseUrl' => 'https://www.brandonmoon.com',
    'site' => [
        'title' => 'Brandon Moon',
        'description' => 'Personal website of Brandon Moon.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Brandon Moon',
        'twitter' => 'brandonbmoon',
        'github' => 'brandonmoon',
    ],
    'services' => [
        'cmsVersion' => '2.10.57',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'brandonmoonswebsite',
        'formcarry' => 'MNye4oWZg2',
        'cloudinary' => [
            'cloudName' => 'df4nwdhdu',
            'apiKey' => '678398863467994',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];

<?php
return [
  'path' => base_path() . '/app/Modules',
    'base_namespace' => 'App\Modules',
    'groupWithoutPrefix' => 'Pub',

    'groupMiddleware' => [
        'Admin' => [
            'web' => ['auth'],
            'api' => ['auth:api'],
        ]
    ],

    'modules' => [
        'Admin' => [
            'Role',
            'Menu',
            'Dashboard',
            'User'
        ],

        'Pub' => [
            'Auth'
        ],
    ]
];

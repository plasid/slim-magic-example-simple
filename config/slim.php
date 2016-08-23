<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
    //'determineRouteBeforeAppMiddleware' => true //NB needed for $request->getAttribute('route')
    ],
    'cors_settings' => [
        'origin' => ['http://localhost', 'http://somesite.com'],
        'allowMethods' => 'GET,POST,PUT,DELETE,OPTIONS',
        'allowHeaders' => 'Content-Type, Accept, X-Requested-With, Set-Cookie, Cookie, PHPSESSID'
    //'exposeHeaders'=>["Content-Type", "X-Requested-With", "X-authentication", "X-client"]
    ],
    'db_settings' => [
        'dsn' => 'mysql:host=localhost;dbname=somedb',
        'username' => 'root',
        'password' => 'root',
        'log_to_screen' => true
    ],
    'slim_magic_settings' => [
        'debug'=>false,
        'routes' => [
            //Home
            '/' => [
                'methods' => ['GET'], //Can be an array of methods, or ommit for default GET
                'classmap' => 'app\Home:index', //String resolver app
                'middleware' => ['Cors', 'Test'], //Middleware to load for this app
                'arguments' => [2, 'abc'],//Arguments to pass to this app
                'name' => 'home' //App name, also used to generate URL's $slim->setName(...)
            ],
            '/user/get/{id}' => [
                'methods' => ['GET'],
                'classmap' => 'app\User:get',
                'middleware' => [],
                'arguments' => [1000, 'xyz'],
                'name' => ''
            ],            
            '/some/non-applied-route' => [
                'methods' => ['POST', 'PATCH'],
                'classmap' => 'add\your\own',
                'middleware' => [],
                'arguments' => [],
                'name' => ''
            ],
        ],
        //This will be applied to all routes/apps
        'all' => [
            'middleware' => ['Cors', 'Test'],//See Slim docs for importance of order           
            //Removed 'Db' from below service, you can add it once you have set the correct db_settings above
            'service' => ['Twig', 'notFoundHandler'] //Service dependencies
        ]
    ]
];

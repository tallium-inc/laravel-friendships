<?php
return array(
    'default' => 'mysql',
    'connections' => array(
        'mysql' => [
            'driver'    => 'mysql2',
            'host'      => '127.0.0.1',
            'database'  => 'friendships_test',
            'username'  => 'travis',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'mongodb' => [
            'driver' => 'mongodb',
            'host'   => env('DB_HOST', '127.0.0.1'),
            'port'	 => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE', 'friendships_test'),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'options' => [
                'database' => 'admin'
            ]
        ]
    ),
);


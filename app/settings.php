<?php

// Do not modify this file. Instead, copy it to settings.php and modify that one.

return [
    'db' => [
        // Illuminate/database configuration
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'bookshelf',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],
    'view' => [
        'template_path' => dirname(__FILE__).'/templates',
        'twig' => [
            'cache' => dirname(__FILE__).'/cache/twig',
            'debug' => true,
        ],
    ],
];

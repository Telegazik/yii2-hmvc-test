<?php
return [
    'id' => 'hmvc-demo',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'debug'],
    'components' => [
        'request' => [
            'cookieValidationKey' => '1234567890',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:' . realpath(__DIR__ . '/../data') . '/data.db',
            'charset' => 'utf8',
        ],
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*'],
        ],
    ],
];

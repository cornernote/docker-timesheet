<?php

// Basic configuration, used in web and console applications
return [
    'id' => getenv('APP_NAME'),
    'name' => getenv('APP_TITLE'),
    'language' => 'en',
    'basePath' => dirname(__DIR__),
    'vendorPath' => '@app/../vendor',
    'runtimePath' => '@app/../runtime',
    'bootstrap' => [
        'log',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass'=>'app\components\NullUser',
        ],
        'saasu' => [
            'class' => 'app\components\Saasu',
        ],
        'timeSheet' => [
            'class' => 'app\components\TimeSheet',
        ],
        'toggl' => [
            'class' => 'app\components\Toggl',
        ],
    ],
];

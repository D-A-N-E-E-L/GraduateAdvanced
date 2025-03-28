<?php

return [
  'id' => 'app-api',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'modules' => [],
  'components' => [
    'request' => [
      'csrfParam' => '_csrf-api',
      'cookieValidationKey' => 'hrwhgnjrwgnjewbfi34thj4bi',
      'parsers' => [
        'application/json' => 'yii\web\JsonParser',
      ]
    ],
    'db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=localhost:3306;dbname=Graduat',
      'username' => 'Daniil',
      'password' => 'Q1qqq',
      'charset' => 'utf8',
    ],
    'user' => [
      'identityClass' => 'common\models\User',
      'enableAutoLogin' => false,
      'enableSession' => false,
      'loginUrl' => null,
    ],
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets' => [
        [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ],
      ],
    ],
    'urlManager' => [
      'enablePrettyUrl' => true,
      'enableStrictParsing' => true,
      'showScriptName' => false,
      'rules' => [
        ['class' => 'yii\rest\UrlRule', 'controller' => ['user', 'student', 'work']]
      ],
    ],
  ],
];

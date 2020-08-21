<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'socialShare' => [
            'class' => \ymaker\social\share\configurators\Configurator::class,
            'socialNetworks' => [
                'facebook' => [
                    'class' => \ymaker\social\share\drivers\Facebook::class,
                    'label' => Yii::t('app', 'Facebook'),
                    'options' => ['class' => 'fb'],
                ],
                'twitter' => [
                    'class' => \ymaker\social\share\drivers\Twitter::class,
                    'label' => Yii::t('app', 'Twitter'),
                    'options' => ['class' => 'tw'],
                    'config' => [
                        'account' => $params['twitterAccount']
                    ],
                ],
                // ...
            ],
            'options' => [
                'class' => 'social-network',
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'my_super_secret_key',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'sell-house-fast/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                ['pattern' => 'robots', 'route' => 'robotsTxt/web/index', 'suffix' => '.txt'],
                ['pattern' => 'sitemap', 'route' => 'robotsTxt/web/index', 'suffix' => '.xml'],
                '/' => 'sell-house-fast/index',
                '/blog/delete' => '/blog/delete',
                '/blog/index' => '/blog/index',
                '/blog/update'=>'blog/update',
                '/blog/create'=>'blog/create',
                '/blog/<urlName:[a-zA-Z0-9\-_]*>' => 'blog/view',
            ],
        ],

    ],
    'modules' => [
        'robotsTxt' => [
            'class' => 'execut\robotsTxt\Module',
            'components'    => [
                'generator' => [
                    'class' => \execut\robotsTxt\Generator::class,
                    'host' => 'localhost',
                    'userAgent' => [
                        'anothercrawler' => [
                            'Sitemap' => '/web/sitemap.xml',
                            'Disallow' => [
                                '/admin/',
                                '/estates/',
                                '/faq/',
                                '/info-images/',
                                '/info-metatags/',
                                '/messages/',
                                '/users/',
                                '/contact-us/',
                                '/homepage/',
                                '/sell-house-fast/index',
                            ],
                            'Allow' => [
                                '/blog/view/'
                            ],
                        ],
                        'googlebot' => [
                            'Sitemap' => '/web/sitemap.xml',
                            'Disallow' => [
                                '/admin/',
                                '/estates/',
                                '/faq/',
                                '/info-images/',
                                '/info-metatags/',
                                '/messages/',
                                '/users/',
                                '/contact-us/',
                                '/homepage/',
                                '/sell-house-fast/index',
                            ],
                            'Allow' => [
                                '/blog/view/'
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
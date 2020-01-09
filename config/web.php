<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
    ],
    //控制访问权限
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            "site/*",
            "frontend/*",
            "wap/*"
        ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qchW9GeflxIJ_YZJvyVOFw6dP1u8jj-k',
        ],
        //挑选皮肤
        'assetManager' => [
            'bundles' => [
//                'yii\web\JqueryAsset' => [    //禁用jq
//                    'js' => []
//                ],
                'dmstr\web\AdminLteAsset' => [  //adminlte模板静态资源
                    'skin' => 'skin-yellow-light',
                ],
            ],
        ],
        //yii自带rbac管理组件
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
//            'loginUrl' => '/backend/site/login'
        ],
        'errorHandler' => [
            'errorAction' => '/site/error',
//            'layout'=>false
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
            'suffix' => '',
            'rules' => [

                '/' => '/frontend/data/index',
                '/w'=>'/wap/wap/index',
                '/backend' => 'backend/user/index',
                '/admin' => 'admin/assignment/index',

                '/newscontent/<id:\d+>' => '/frontend/data/newscontent',
                '/<action:\w+>' => '/frontend/data/<action>',
                '/w/<action:\w+>' => '/wap/wap/<action>',

                '/backend/<controller:\w+>/<action:\w+>' => '/backend/<controller>/<action>',


//                '<modules:\w+>/<controller:\w+>/<action:\w+>'=>'<modules>/<controller>/<action>',
//                '<modules:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<modules>/<controller>/<action>',
//                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
//                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'backend' => [
            'class' => 'app\modules\backend\Backend',
            'layout' => '@app/modules/backend/views/layouts/main.php',
        ],
        'frontend' => [
            'class' => 'app\modules\frontend\Frontend',
        ],
        'wap' => [
            'class' => 'app\modules\wap\WapModule',
        ],
        //控制器模块
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => '@app/modules/backend/views/layouts/main.php',
        ],
        //富文本框模块
        'redactor' => [
            'class' => 'app\components\RedactorModule',
            'uploadDir' => 'uploads',
            'uploadUrl' => '/uploads',
            'imageAllowExtensions' => ['jpg', 'png', 'gif']
        ],
    ],
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
];

if (true) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
    // uncomment the following to add your IP if you are not connecting from localhost.
    //'allowedIPs' => ['127.0.0.1', '::1'],
//    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;

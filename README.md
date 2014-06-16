`yii2-giiall`
===========

Goals
------------

Using Yii2-Gii to generate code for other PHP framework, such as Phalcon, PhalconEye, Laravel, etc.

**PROJECT IS IN DEVELOPMENT STAGE!**


Installation
------------

Create a basic yii application.

    php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic /path/to/yii-application

Go to the project directory and install ``yii2-giiall``

    cd yii-application
    php composer.phar require trandangtri/`yii2-giiall` @dev-master

Edit the application config...

    edit config/web.php

... and add the `yii2-giiall` generator in the `YII_ENV_DEV` section

    $config['modules']['gii'] = array();
    $config['modules']['gii']['class'] = 'yii\gii\Module';
    $config['modules']['gii'] = [
        'class'      => 'yii\gii\Module',
        'allowedIPs' => ['::1', '192.168.1.*'],
        'generators' => [
            // ...
            'phalconeye-model' => [
                'class' => 'trandangtri\giiall\phalconeye\model\Generator',
                'appPath' => '../../app/'
            ],
            // ...
        ],
    ];


Remember setup the 'appPath' to point to the application folder of your Core application. In this case, it pointed to PhalconEye application folder

And don't forget to setup a database application component, eg.

    'db' => [
         'class' => 'yii\db\Connection',
         'dsn' => 'mysql:host=localhost;dbname=devdb',
         'username' => 'root',
         'password' => 'root',
         'charset' => 'utf8',
    ],

> Note: You can use the MySQL sakila demo database for testing.


Open Gii...

    http://localhost/index.php?r=gii

...and select the **`yii2-giiall`** template, you may need to create some models in advance.

References
------------
* [Yii2 - Basic application template](http://www.yiiframework.com/doc-2.0/guide-apps-basic.html)
<?php

use Silex\Provider\MonologServiceProvider;

// include the production configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;

// サービスプロバイダーの登録
$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/logs/silex_dev.log',
));


<?php

use Silex\Application;

$app = new Application();

/* サービスプロバイダーの登録 */

// URL Generator (bindメソッドが利用可能に)
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// use twig
$app->register(new Silex\Provider\TwigServiceProvider());

return $app;
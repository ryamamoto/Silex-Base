<?php

use Symfony\Component\Debug\Debug;

/*
// ローカル接続しか許可しない
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1'))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
*/

require_once __DIR__.'/../vendor/autoload.php';

Debug::enable();

// サービスプロバイダーの登録
$app = require __DIR__.'/../src/app.php';

// 設定ファイル
require __DIR__.'/../config/dev.php';

// ルーティング
require __DIR__.'/../src/controllers.php';

$app->run();
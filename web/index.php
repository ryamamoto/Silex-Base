<?php

// エラーを画面に出力しない
ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

// サービスプロバイダーの登録
$app = require __DIR__.'/../src/app.php';

// 設定ファイル
require __DIR__.'/../config/prod.php';

// ルーティング
require __DIR__.'/../src/controllers.php';

$app->run();
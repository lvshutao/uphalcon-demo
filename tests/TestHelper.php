<?php

define('APPLICATION_ENV', 'test');
define('BASE_PATH', dirname(__DIR__));

// 可以用来其它的配置，此文件不会被提交
if (file_exists(__DIR__ . '/app.php')) {
    include_once __DIR__ . '/app.php';
}

include_once '../../framework/include.test.php';
include_once '../../framework/uphalcon/bootstrap/bootstrap_test.php';

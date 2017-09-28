<?php
define('BASE_PATH', dirname(dirname(__DIR__)));

// 请自行定义文件的位置
$filepath = substr(BASE_PATH, 0, -23) . '/framework/include.uphalcon.php';
if (!file_exists($filepath)) {
    die('could not found:' . $filepath);
}
require_once $filepath;

$di = \lyu\uphalcon\bootstrap\UPhalcon::di();

\Phalcon\Di::reset();
\Phalcon\Di::setDefault($di);

(new \lyu\uphalcon\bootstrap\UphalconTest())->run();
return new \Phalcon\Mvc\Application($di);
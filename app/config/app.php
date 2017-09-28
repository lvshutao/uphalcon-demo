<?php
// -------- 应用的配置
/*
 * 命名空间
 */
define('APP_NAMESPACE', 'app');

if (file_exists(__DIR__ . '/env.php')) {
    require_once __DIR__ . '/env.php';
}
// 钥匙位置
define('PATH_PRIVATE_KEY', __DIR__ . '/private.key');
define('PATH_PUBLIC_KEY', __DIR__ . '/public.key');

// 你可以在当前文件，或者 env.php 中定义其它的常量
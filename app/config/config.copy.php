<?php
// lyu\uphalcon\services\UPhpDebugBar::start();
// 程序配置
// cp config.copy.php config.php
return new \Phalcon\Config([
    'version' => '1.0',
    // todo 数据库配置需要修改
    'database' => [
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => '',
        'charset' => 'utf8',
    ],
    // 数据库日志记录
    'dbLog' => [
        'enabled' => true, // 启用日志记录
        'manager' => 'lyu\uphalcon\events\USqlLoggerEM', // 使用此记录器
        'adapter' => 'Phalcon\Logger\Adapter\File',
        'params' => PATH_TEMP . 'log/' . date('Y-m-d') . '.txt',
        'level' => \Phalcon\Logger::ERROR
    ],

    'modelsMetadata' => [
        'adapter' => '\Phalcon\Mvc\Model\Metadata\Files',
        'params' => [
            'metaDataDir' => PATH_CACHE . '/metadata/'
        ]
    ],

    'application' => [
        'appDir' => APP_PATH . '/',
        'modelsDir' => APP_PATH . '/common/models/',
        'migrationsDir' => APP_PATH . '/migrations/',
        'cacheDir' => BASE_PATH . '/cache/',
        'baseUri' => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),
        'timezone' => 'PRC',
        'app_id' => ''
    ],

    'printNewLine' => true,

    'cookies' => [
        'encryption' => true
    ],
    // 控制台默认配置
    'cli' => [
        'module' => 'cli',
        'task' => 'main',
        'action' => 'main',
        'params' => []
    ],
    // 默认的路由加载
    'router' => [
        'module' => 'index',
        'controller ' => 'index',
        'action' => 'index',
        'notFount' => [
            'module' => 'index',
            'controller' => 'error',
            'action' => 'show404'
        ]
    ],
    'dispatcher' => [
        'events' => [
            'lyu\uphalcon\events\UDispatcherNotFoundEM' => [
                'controller' => 'error',
                'action' => 'show404'
            ],
            'lyu\uphalcon\events\UDispatcherBeforeDispatchLoop' => [
                // todo 开启的模块需要修改，否则无法访问
                'web' => ['index', 'demo'], // 开启这些 web 模块
                'rest' => ['demo'] // 开户这些 rest 模块
            ]
        ],
        'redirect' => [
            'signup' => '/index/signup', // 注册界面
            'signin' => '/index/signin', // 登录界面
            'approved' => '/index/approved', // 授权界面
            'admin' => '/user'
        ]
    ],
]);

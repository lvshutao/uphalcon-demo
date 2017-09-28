<?php
/**
 * cp di-copy.php di.php
 * 程序需要注入的组件
 */

return [
    'common' => [
        'i18n' => 'lyu\uphalcon\dis\I18N',
        'url' => 'lyu\uphalcon\dis\Url',
        'db' => 'lyu\uphalcon\dis\Db',
        'metaData' => 'lyu\uphalcon\dis\MetaData',
        'dispatcher' => 'lyu\uphalcon\dis\Dispatcher',
        'modelsManager' => 'lyu\uphalcon\dis\ModelsManager',
        'modelsMetadata' => 'lyu\uphalcon\dis\ModelsMetadata',
        'logger' => 'lyu\uphalcon\dis\Logger',
        'request' => [
            'instance' => 'new',
            'class' => 'Phalcon\Http\Request'
        ],
        'response' => [
            'instance' => 'new',
            'class' => 'Phalcon\Http\Response'
        ]
    ],
    'web' => [
        'router' => 'lyu\uphalcon\dis\Router',
        'session' => 'lyu\uphalcon\dis\Session',
        'flash' => 'lyu\uphalcon\dis\Flash',
        'flashSession' => 'lyu\uphalcon\dis\FlashSession',
        'cookies' => 'lyu\uphalcon\dis\Cookies',
        'cache' => 'lyu\uphalcon\dis\CacheFile',
        'tag' => [ // 使用 new 方式来注入服务
            'instance' => 'new',
            'class' => 'lyu\uphalcon\dis\Tag'
        ]
    ],
    'cli' => [

    ],
    'rest' => [

    ],
    'test' => [
        'cache' => 'lyu\uphalcon\dis\CacheMock',
        'cookies' => 'lyu\uphalcon\dis\CookiesMock',
        'session' => 'lyu\uphalcon\dis\SessionMock',
        'email' => 'lyu\uphalcon\dis\EmailMock',
        'curl' => [ // 使用 new 方式来注入服务
            'instance' => 'new',
            'class' => '\Curl\Curl'
        ]
    ]
];

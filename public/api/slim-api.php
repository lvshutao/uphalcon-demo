<?php
define('_X', true);
include_once __DIR__ . '/include.php';
/**
 * @var \Slim\App $app
 */
/**
 * 示例
 * http://localhost:9001/api/slim-api.php/hello/uphalcon
 */
$app->get('/hello/{name}', function (\Slim\Http\Request $request, \Slim\Http\Response $response) {


    try {
//        $data = $request->getParsedBody(); // 如果使用 post 提交数据
        $name = $request->getAttribute('name');

        return $response->withJson([
            'status' => 200,
            'message' => 'Hello ' . $name
        ]);

    } catch (\lyu\base\library\UException $e) {
        $newResponse = $response->withStatus($e->getCode());
        return $newResponse->withJson($e->messages());
    }
});

$app->run();
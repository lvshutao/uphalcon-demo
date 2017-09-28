<?php

namespace app\modules\demo\controllers;

use lyu\uphalcon\controllers\JsonController;

/**
 * Class RestController
 * @package app\modules\demo\controllers
 * rest 接口示例
 */
class RestController extends JsonController
{
    /**
     * http://localhost:9001/rest1.php/demo/rest/user
     * @return array
     */
    public function userAction()
    {
        return [
            'status' => 200,
            'message' => 'welcome.'
        ];
    }
}
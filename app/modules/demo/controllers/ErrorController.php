<?php

namespace app\modules\demo\controllers;
/**
 * Class ErrorController
 * @package app\modules\demo\controllers
 * 自定义错误页面
 */
class ErrorController extends BaseController
{
    public function show404Action()
    {
        pr('404 not found', true);
    }

    public function show503Action()
    {
        pr('503 error', true);
    }
}
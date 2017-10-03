<?php

namespace app\modules\demo\controllers;

use lyu\oauth\controller\BaseUserController;
use lyu\uphalcon\library\Navigation;

/**
 * Class BaseController
 * @package app\modules\demo\controllers
 * 用户必须登录的页面，继承 BaseUserController 即可
 */
class BaseController extends BaseUserController
{
    protected function whenNotLogin()
    {
        // 如果用户没有登录，跳转到此页面
        Navigation::to('/');
    }
}
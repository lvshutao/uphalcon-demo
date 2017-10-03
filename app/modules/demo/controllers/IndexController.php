<?php

namespace app\modules\demo\controllers;

use lyu\oauth\controller\BaseIndexController;
use lyu\uphalcon\library\Navigation;

/**
 * Class IndexController
 * @package app\modules\demo\controllers
 * 普通首页，不需要强制用户登录，继承 BaseIndexController 即可
 * 注意，如果发现模板不起作用，则需要清除 cache/volt 下面的缓存文件
 */
class IndexController extends BaseIndexController
{
    /**
     * http://localhost:9001/web1.php/demo/index
     */
    public function indexAction()
    {
        $this->view->title = 'UPhalcon';
    }

    public function logoutAction()
    {
        parent::logoutAction();
        // 在退出之后，返回到首页
        Navigation::to('/');
    }
}
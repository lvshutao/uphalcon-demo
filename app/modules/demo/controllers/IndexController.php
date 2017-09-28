<?php

namespace app\modules\demo\controllers;

class IndexController extends BaseController
{
    /**
     * http://localhost:9001/web1.php/demo/index
     */
    public function indexAction()
    {
        $this->view->title = 'UPhalcon';
    }
}
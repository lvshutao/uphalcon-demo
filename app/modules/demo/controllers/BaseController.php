<?php

namespace app\modules\demo\controllers;

use lyu\uphalcon\controllers\ViewController;
use lyu\uphalcon\library\U;

class BaseController extends ViewController
{
    public function initialize()
    {
        parent::initialize();

        U::$di->i18n->domain('index');
        $this->view->setVars([
            'lang' => U::$di->i18n->bestLanguage(),
        ]);
    }
}
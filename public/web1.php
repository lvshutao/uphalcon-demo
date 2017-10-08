<?php

//die('just a web demo');
//cp web1.php index.php
// 示例访问地址:
// http://localhost:9001/web1.php/demo/index
// index 模块不存在，可复制 app/modules/demo 目录来创建其它的模块
define('BASE_PATH', dirname(__DIR__));
require '../../framework/include.uphalcon.php';
require '../../framework/uphalcon/bootstrap/bootstrap_web.php';

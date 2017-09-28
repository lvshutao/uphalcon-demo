<?php

namespace app\modules\cli\tasks;
/**
 * Class DemoTask
 * @package app\modules\cli\tasks
 * 命令行任务示例
 */
class DemoTask extends \Phalcon\Cli\Task
{
    /**
     * 无参数示例
     * php run cli/demo/main
     */
    public function mainAction()
    {
        echo "Congratulations! You are now flying with Phalcon CLI!", PHP_EOL;
    }

    /**
     * 带参数示例
     * php run cli/demo/argv a b c
     */
    public function argvAction($params = [])
    {
        echo "欢迎使用!", PHP_EOL;
        print_r($params);
    }

}

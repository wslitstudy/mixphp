<?php

namespace httpd\command;

use mix\console\Controller;
use httpd\library\Service;

/**
 * 工作控制器
 * @author 刘健 <coder.liu@qq.com>
 */
class WorkerController extends Controller
{

    // 重启工作进程
    public function actionReload()
    {
        if ($pid = Service::getPid()) {
            Service::reloadWorker($pid);
        }
        echo 'MixHttpd Worker 进程重新加载完成.' . PHP_EOL;
    }

}

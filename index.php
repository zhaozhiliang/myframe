<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/8
 * Time: 下午11:30
 *
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */

define('IMOOC', realpath('./'));
define('CORE', IMOOC.'/core');
define('MODULE', 'app');
define('APP', IMOOC.'/app');
define('DEBUG', true);

include "vendor/autoload.php";
if(DEBUG){
//    $whoops = new \Whoops\Run;
//    $errorTitle = '框架出错了';
//    $option = new \Whoops\Handler\PrettyPageHandler();
//    $option->setPageTitle($errorTitle);
//    $whoops->pushHandler($option);
//    $whoops->register();
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off');
}

//ssss();
include CORE.'/common/function.php';
include CORE.'/imooc.php';
//p(IMOOC);

spl_autoload_register('\core\imooc::load');
header("Content-type: text/html; charset=utf-8");
\core\imooc::run();
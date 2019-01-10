<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 下午8:32
 */
namespace core\lib;

class log
{
    static $class;
    /**
     * 1. 确定日志存储方式
     *
     * 2. 写日志
     */
    static public function init(){
        //确定存储方式
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name,$file)
    {
        self::$class->log($name,$file);
    }
}
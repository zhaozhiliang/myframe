<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 下午8:37
 */
namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path; #日志存储位置
    public function __construct()
    {
        $conf= conf::get('OPTION', 'log');
        $this->path = $conf['PATH'];
    }

    public function log($message, $file = 'log'){
        /**
         * 确定文件存储位置是否存在
         * 新建目录
         * 2。 写入日志
         */
        $dateHour = date('YmdH');
        if(!is_dir($this->path.$dateHour)) {
            mkdir($this->path.$dateHour, 0777, true);  //注意0777 不要加引号 它是 八进制
        }
        //p($this->path.$dateClock.'/'.$file.'.php');
        return file_put_contents($this->path.$dateHour.'/'.$file.'.php', date('Y-m-d H:i:s').json_encode($message).PHP_EOL, FILE_APPEND);

    }



}
<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 上午1:22
 */
namespace core\lib;


class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        //p('route ok');
        //xxx.com/index/index
        /**
         * 1. 隐藏index.php
         * 2. 获取URL 参数部分
         * 3. 返回对应的控制器和方法
         * nginx  使用 rewrite 加上index.php 来找到 入口文件index.php
         * apache 使用 .htaccess 文件
         */

        //request_uri  访问路径only 域名时，它是/； 其他情况/bbb/xxxx
        //p($_SERVER['REQUEST_URI']);
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/', trim($path,'/'));
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
                unset($patharr[0]);
            }
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = conf::get('ACTION', 'route');
            }

            //获取Get 参数
            //id/1/str/2/test/3
            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }

            //p($_GET);


        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }

    }
}
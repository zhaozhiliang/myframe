<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 上午12:00
 */

namespace core;

class imooc
{
    public static $classMap = array(); //为了实现不重复引入类
    public $assign = array();
    static public function run()
    {
        \core\lib\log::init();
        \core\lib\log::log('test','log');
        $route = new \core\lib\route();
        //$route2 = new \core\route2();
        //$route3 = new \core\route3();

        //p($route);
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        //p($ctrlFile);
        $newClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl = new $newClass;
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.' action:'.$action, 'log');
        } else {
            throw new \Exception('找不到控制器'.$ctrlClass);
        }

    }

    static public function load($class)
    {
        //自动加载类库
        //new \core\route()
        //$class = '\core\route';
        //转为 IMOOC.'/core/route.php';
        //p($class);

        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/',$class);
            $file = IMOOC.'/'.$class.'.php';

            if(is_file($file)){
                //echo 'bbb';
                include $file;  //用 不管条件是否成立 都会include todo
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }


    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

//    public function display($file)
//    {
//
//        $file = APP.'/views/'.$file;
//        if(is_file($file)){
//            extract($this->assign);
//            include $file;
//        }
//    }

    public function display($filename)
    {
        $file = APP.'/views/'.$filename;
        if(is_file($file)){
            extract($this->assign);


            //require_once IMOOC.'/vendor/autoload.php';
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, [
                'cache' => IMOOC.'/log/twig',
                'debug'=>DEBUG
            ]);
            $template = $twig->load($filename);

            echo $template->render($this->assign);
        }
    }
}
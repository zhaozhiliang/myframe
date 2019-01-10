<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 下午5:52
 */
namespace app\ctrl;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        p("it is index");

//        //model 测试
//        $model = new \core\lib\model();
//        $sql = "select * from goods";
//        $ret = $model->query($sql);
//        p($ret->fetchAll());
//
        //视图测试
        $data = 'hello world 亮';
        $title = '视图文件';
        $this->assign('data', $data);
        $this->assign('title', $data);
        $this->display('index.html');

        //配置测试
//        $temp = \core\lib\conf::get('CTRL', 'route');
//        $temp = \core\lib\conf::get('CTRL', 'route');
//        var_dump($temp);
//        p($temp);
//
//        //测试model2  medoo 方式
//        $model = new \core\lib\model2();
//
////        $data = array('stock'=> 99, 'total'=> 1000);
////        $ret = $model->insert('goods', $data);
////        p($ret);
//
//        $sql = "select * from goods";
//        $ret = $model->query($sql);
//        p($ret->fetchAll());

//        //测试- 使用自己封装的model
//        $model = new \app\model\goodsModel();
//        $ret = $model->lists();
//        p($ret);
//        $ret = $model->getOne(3);
//        p($ret);
//
//        $ret = $model->setOne(3, array('stock'=>50));
//        p($ret);
//
//        $ret = $model->delOne(3);
//        p($ret);

    }

    public function  test()
    {
        $data = 'test';
        $this->assign('data', $data);
        $this->display('test.html');
    }


}
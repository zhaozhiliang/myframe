<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/10
 * Time: 下午6:30
 */
namespace app\ctrl;
use app\model\guestbookModel;
class indexCtrl extends \core\imooc
{
    //所有留言
    public function index()
    {
        $model = new guestbookModel();
        $data = $model->all();
        dump($data);
        $this->assign('data', $data);
        $this->display('index.html');
    }

    //添加留言
    public function add()
    {
        $this->display('add.html');
    }

    //保存留言
    public function save()
    {

        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['createtime'] = time();
        $model = new guestbookModel();
        $ret = $model->addOne($data);
        if($ret){
            //p('ok');
            jump('/');
        }else{
            p('error');
        }
    }

    public function del()
    {
        $id = get('id', 0, 'int');
        if($id){
            $model = new guestbookModel();
            $ret = $model->delOne($id);
            if($ret){
                jump('/');
            }else{
                p('删除失败');
            }
        } else {
            exit('参数错误');
        }

    }


}
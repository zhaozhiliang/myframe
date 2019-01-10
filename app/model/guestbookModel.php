<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/10
 * Time: 下午6:00
 */

namespace app\model;


use core\lib\model2;

class guestbookModel extends model2
{
    public $table = 'guestbook';

    public function all()
    {
        return $this->select($this->table,'*');
    }

    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }

    public function delOne($id)
    {
        $ret = $this->delete($this->table,array('id'=> $id));
        if($ret !== false){
            return true;
        }else {
            return false;
        }
    }
}
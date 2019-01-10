<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/9
 * Time: 下午6:22
 */
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
//        $dsn = 'mysql:host=192.168.199.129;dbname=test';
//        $username = 'work';
//        $passwd = '123qwe';
        $database = conf::all('database');
        //p($temp);
        try{
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        }catch (\PDOException $e){
            p($e->getMessage());
            exit();
        }

    }
}
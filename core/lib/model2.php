<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/10
 * Time: 上午12:21
 */
namespace core\lib;
use Medoo\Medoo;
class model2 extends \Medoo\Medoo
{
    public function __construct()
    {
        $options = conf::all('database_medoo');
        parent::__construct($options);

    }
}

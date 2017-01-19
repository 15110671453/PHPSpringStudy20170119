
<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 上午10:48
 */

namespace OBJECTPHP;


class Object7
{
    /*
     *
     * 当我们实例化一个对象
     *
     * 会自动运行的方法
     *
     * 构造方法 详解
     *
     *
     *
     * */










}

class APP
{

    function __construct()
    {
        self::_include();
        self::_config();
    }


    static function _config()
    {
        echo '配置环境';
    }
    static function _include()
    {
        echo '载入文件';
    }
    private function dump($content='')
    {
        echo '<pre>';
        print_r($content);

    }


}

/*
 * 通过构造函数 很便利
 * */


















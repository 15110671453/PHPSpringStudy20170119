<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/19
 * Time: 下午1:40
 */

namespace OBJECTPHP;


class MoShuConstant
{
    /*
     * 魔术常量
     *
     *
     *
     * */


    function  moshu1()
    {
        //魔术常量 得到类名 区分大小写 OBJECTPHP\MoShuConstant
        echo '</br>'.__CLASS__.'</br>';
    }

    function  moshu2()
    {
        //魔术常量 得到方法名 区分大小写 OBJECTPHP\MoShuConstant::moshu2
        echo '</br>'.__METHOD__.'</br>';
    }
    function  moshu3()
    {
        //魔术常量 得到方法名 区分大小写 moshu3
        echo '</br>'.__FUNCTION__.'</br>';
    }

    function moshu4()
    {
        //魔术常量  只返回书写__FILE__ 的脚本所在的目录 绝对路径
        echo '</br>'.__FILE__.'</br>';
    }
}

$a = new MoShuConstant();

$a->moshu1();
$a->moshu2();
$a->moshu3();

$a->moshu4();



$path = dirname(__FILE__);

//微软 windows目录 斜杠 和 linux的区别
$path = str_replace('\\','/',dirname(__FILE__));


//路径分割符 DIRECTORY_SEPARATO
define('WEBDIR',$path);
define('TEMPLATE',WEBDIR.DIRECTORY_SEPARATOR.'template');


echo $path.'</br>';

echo TEMPLATE.'</br>';
echo '<pre>';


print_r($_SERVER);







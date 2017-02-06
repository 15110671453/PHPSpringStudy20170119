<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/2/6
 * Time: 下午4:59
 */

/*
 * + 代表一个 或者 多个
 * 星号 重复匹配 零个 或者 多个
 *
 *
 *
 *
 *
 *
 *
 * */


 $str  = ' sina.com';

$preg = '/sind*/is';
$preg2 = '/sind+/is';

try{

    if (preg_match($preg,$str,$arr))
    {
        echo $preg.'星号 匹配0个或者多个';
        var_dump($arr);
    }else
    {
        echo '失败';
    }
    if (preg_match($preg2,$str,$arr))
    {

        var_dump($arr);
    }else
    {
        echo $preg2.'加号至少匹配一个<br/>';
        echo '失败';
    }

}catch (Exception $e)
{
    echo $e->getMessage();
}


































































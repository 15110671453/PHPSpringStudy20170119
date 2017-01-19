<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 上午11:54
 */


/*
 * 通过自定义函数 回调函数 来对数组进行排序
 *
 * */

echo '<pre>';
$arr = array(5,3,2,7,3,8,5,9,1);

function func ($v1,$v2)
{
    if ($v1==$v2)
    {
        return 0;
    }
    return $v1 >$v2 ? 1:-1;
    //1 递增 -1 递减
}

//对数组进行排序 但是索引顺序改变
//usort($arr,'func');
//
//print_r($arr);

//对原数组排序 但是保留原数组中元素的键名
//uasort($arr,'func');
//
//print_r($arr);

//通过回调函数 对数组按照键名进行排序 关联数组 可以使用

$arr2 = array('a'=>5,'c'=>3,'e'=>2,'r'=>7,'b'=>1);
uksort($arr2,'func');

print_r($arr2);






















































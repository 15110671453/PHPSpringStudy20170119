<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 下午1:48
 */
/*
 * array_udiff 通过回调函数 求数组的差集  其实就是找不同 只比较键值
 *
 * array_udiff_assoc() 通过回调函数 求数组的差集 比较键值 或 键名 有一个不同 就会返回该元素 并组成新数组返回
 *
 * array_udiff_uassoc() 通过回调函数方式 处理 两个回调函数
 *
 * array_uintersect 通过回调函数 得到多个数组的 与 目标数组的 交集
 *
 * array_udiff_uassoc
 *
 * */

echo '字符串  调用函数 不报错  常量';

$arr1 = array('a'=>'a','b'=>'b');

$arr2 = array('a'=>'a','c'=>'c','d'=>'d');


function func ($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }
}


$arr3 = array_udiff($arr1,$arr2,'func');

print_r($arr3);

function func_data ($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }
}
function func_key ($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }
}

echo '</br>';
echo '不会报错 字符串';

$arr4 = array_udiff_uassoc($arr1,$arr2,'func_data','func_key');


print_r($arr4);


function func_5($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }

}

//只比较键值
echo '</br>交集';

$arr5 = array_uintersect($arr1,$arr2,'func_5');


print_r($arr5);



function func_6($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }

}
//键名交集
$arr6 = array_uintersect_assoc($arr1,$arr2,'func_6');

print_r($arr6);

//键名 键值 都进行比较

function func_data2($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }

}
function func_key2($v1,$v2)
{

    if ($v1===$v2)
    {
        return 0;
    }elseif($v1>$v2)
    {
        return 1;
    }else
    {
        return -1;
    }

}


$arr7 = array_udiff_uassoc($arr1,$arr2,'func_data2','func_key2');

print_r($arr7);




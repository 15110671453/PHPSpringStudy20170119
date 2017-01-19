<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 上午10:36
 */

/*
 * 数组漫游 数组地图 数组过滤
 *
 * array_reduce  关键在于递归   用回调函数递归的对数组元素进行处理 返回处理后的值
 *
 * */


$array = array('2','3','4','5','6');


function func($c,$i)
{
    $c+=$i;
    //

    echo $i.'</br>';
    echo $c.'--</br>';
    return $c;
}

function func2($c,$i)
{
    $c*=$i;
    //

    echo $i.'</br>';
    echo $c.'--</br>';
    return $c;
}

array_reduce($array,'func',1);

array_reduce($array,'func2',1);


$array = array('a','b','c','d','e');


$array = array(9,1,2,3,4,6,77,7);

//该函数 从 substr一样的 从原数组截取 小数组
//array_slice($array,$offset);

//第二个参数 是从原数组截取时的起点(新数组将是 相对原数组起点位置间隔两个元素 开始)
// 第三个参数 截取的终点(决定新数组的元素个数)  第四个参数 截取后返回的新数组是否保留原数组中的索引
// 第二个参数 第三个参数 可以是否数  否数 将从右端开始 只是 上面的相对位置间隔数为绝对值 并且 相对点为右端
//  和  （新元素的数组个数 为正数时） 为否数时 第三个参数 如何决定元素个数
//新数组的元素 为原数组的 012 2索引的元素 到 012345 5索引的元素 元素个数4
$arrayNew = array_slice($array,2,4,1);
//该函数不会修改原数组 但是出栈 入栈函数 pop push 会影响原数组
echo '<pre>';
print_r($array);
print_r($arrayNew);
//新数组的元素 为原数组的 1234末尾 索引的元素 到 末尾 123 的元素 元素个数1
$arrayNew2 = array_slice($array,-4,-3,1);


print_r($arrayNew2);



//array_splice 函数 也是 str_replace 一样的做法 这个函数是更改原数组的 这个是截取原数组 上面的是从原数组抽取 理解

$arr =  array(7,1,2,3,4,5,9,3);

$arr2 = array_splice($arr,2);

print_r($arr2);

print_r($arr);

//这个函数还可以做到将原数组截断的同时 在向截断位置插入一个会多个元素 (str_replce 字符串截取替换 。。。)


$arr3 =  array(7,1,2,3,4,5,9,3);

$arr4 = array_splice($arr3,2,4,array('test1','test2'));


print_r($arr4);
print_r($arr3);


//array_sum 对数组中的值进行求和运算

//array_product  对数组中的值进行乘积运算


$num=array_sum($arr3);

echo '</br>'.$num.'dudu';













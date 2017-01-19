<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 上午11:24
 */

$arr = array(4,5,1,3,2,1,4,7,9);

//对原数组进行排序 默认升序排序 影响原数组
//有第二个参数 指明 按数字 按区域 按字符串
echo '<pre>';
sort($arr);


print_r($arr);

$arr2 = array('c','rss','a','m','o','s','l','v','ee',);

//SORT_ASC 降序  不管用 不是给他用的？？

sort($arr2,SORT_ASC);


print_r($arr2);


$arr3 = array('class1','class12','class21','class2','alass32');


sort($arr3);

print_r($arr3);

$arr4 = array('class1','class12','class21','blass2','alass32');

//会对原数组的索引顺序保留
natsort($arr4);

print_r($arr4);

$arr5 = array('class1','class12','class21','class2','class32');

//会对原数组的索引顺序保留
natsort($arr5);

print_r($arr5);


//shuffle 对原数组进行随机排序 没有序啊


$arr6 = array(4,5,1,3,2,1,4,7,9);


shuffle($arr6);


print_r($arr6);

//对多个数组进行排序

//降序

array_multisort($arr6,SORT_DESC);


print_r($arr6);

//降序

array_multisort($arr6,SORT_ASC);


print_r($arr6);







































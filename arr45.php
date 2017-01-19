<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/18
 * Time: 下午1:59
 */


$arr = array(
  'url_sina'=>'sina.com',
    'url_com'=>'com.cn',
    'url_name'=>'娱乐',
    'url_2_name'=>'开发'
);

echo '<pre>';

//sort($arr);
//
//print_r($arr);
//依据键值排序 保留键名
//asort($arr);
////
//print_r($arr);

//依据键名排序
//ksort($arr);
////
//print_r($arr);
//
//array_reverse($arr);

//数组逆序 怎么来
//不需要正序 再逆序 原来的索引改变了 不能保留原数组的键名
//rsort($arr);

//对数组进行反向排序 同时保留键名
arsort($arr);
print_r($arr);
//对数组进行反向排序 按键名反向 同时排序成功返回真 失败返回假
krsort($arr);


//依据键值排序 保留键名 先正序 再 逆序 这样可以保留键名
asort($arr);
$new = array_reverse($arr);

print_r($arr);
print_r($new);



















































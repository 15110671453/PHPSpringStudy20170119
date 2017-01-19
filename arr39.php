<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 下午4:35
 */

$webname = '学习';
$hdGlobal = array('webname'=>'xuexi ','weburl'=>'sina.com','hdsn'=>'hhh','WEB_URL');

//当数组是关联数组 索引数组混合的时候  其中的索引键名加前缀 hdw

var_dump(extract($hdGlobal,EXTR_PREFIX_INVALID,'hdw'));


echo $hdw_0;

//extract 函数 将数组中每一个元素项 转变为 我们可以通过变量名 访问的 变量 数组的键名 就是变量名 数组的键值 就是变量存储的值


//in_array 判断元素是否存在数组中

echo '<pre>';

$arr=array(1,2,3,4,5);

$on =  in_array('1',$arr,true);//true false 决定是否判断数据类型 一致


$arrA1= array('webname'=>'houdunwang','weburl'=>'sina.com');


$arrA2= array('db_host'=>'localhost','db_user'=>'root','db_pas'=>'dyn123456','db_port'=>'3306');


$arrA3= array('db_host'=>'localhost','db_user'=>'root','db_pas'=>'asd1453NMDmysql','db_port');


print_r($arrA1);

print_r($arrA2);

print_r($arrA3);









































































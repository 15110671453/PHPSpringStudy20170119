<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 上午10:06
 */

/*
 * 数组的函数处理 32->33
 *  in_array() 判断一个元素 是否存在指定的数组 如果存在返回真
 * 寻找数组之间的差值
 *array_search 查找内容是为数组的键值 存在返回键名 不存在返回bool假
 * array_change_key_case() 更改数组键名大小写
 *
 *
 *
 * */

$arr = array(1,2,3,4,5,6);

if (in_array(1,$arr))
{

    echo "在数组中存在值";

}else
{
    echo  "不存在";

}


$arr2 =array("百度网","php教程","div视频");

//该函数返回 索引数组 剑名 这里是索引数组 返回 索引0
$k=array_search("百度网",$arr2);

echo "</br>";
echo $k;

function dump($arr)
{
    echo "<pre>";

    print_r($arr);
}

$arr3=array('url'=>'baidu.com','neirong'=>'学习','url1'=>'baidu.com','neirong1'=>'学习','url2'=>'baidu.com','neirong2'=>'学习');
//关联数组中 键名 前后中 出现一样的 会怎样  尽量注意 大小写 时 引发的 键名一致
//第一个参数 数组源 第二个指定改变大写 还是 小写
$arr4=array_change_key_case($arr3,CASE_UPPER);

dump($arr4);

//拆分数组 后 新的数组 是 索引数组的形式 并没有保留关联数组的形式 拆分 这里 本应该是等份的哦 不等份也支持
$arr5 = array_chunk($arr4,1);
dump($arr5);

//将两个数组合并 第一个参数 传入的数组 作为 新数组的键名 第二个参数 传入的数组 作为 新数组的键值
//返回的是新数组
$arr6 = array('url','name','content');
$arr7 = array('baidu.com','学习','坚持');

$arr8= array_combine($arr6,$arr7);

dump($arr8);

 //数组找不同 将一个数组中的键值 在一个或多个数组中 找不同 如果找到会将找到的内容以数组的形式返回
$arra = array('sina.com','bbs.com','web.com');

$arrb = array('sin.com','bbs.com');

$arrd = array_diff($arra,$arrb);

dump($arrd);


//数组 找不同 找的是键名的不同 关联数组

$arr71 =array('url'=>'bbs.com','name'=>'jianzhi');

$arr72 = array('weburl'=>'sina.com','name'=>'urlurl');

$arr73 = array_diff_key($arr71,$arr72);

dump($arr73);

//数组 找不同 找的是键名 和 键值 只要有不同 就返回 返回的 是不同的元素组成的新数组


$arr81 = array('url'=>'sina.com','name'=>'test1');

$arr82 = array('url2'=>'sina.com','name'=>'butong');

$arr83 = array_diff_assoc($arr81,$arr82);

dump($arr83);

















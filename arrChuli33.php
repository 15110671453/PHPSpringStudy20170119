<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 上午9:53
 */

/*
 * 数组的函数处理 32->33
 *  in_array() 判断一个元素 是否存在指定的数组 如果存在返回真
 * 寻找数组之间的差值
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


echo $k;






















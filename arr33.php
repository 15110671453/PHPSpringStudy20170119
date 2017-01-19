<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/1/16
 * Time: 上午10:51
 */
//通过回调函数的方式 返回一个数组在其它数组中不存在键名的值

function dump($arr)
{
    echo "<pre>";

    print_r($arr);
}
function afff($k1,$k2)
{
    if ($k1===$k2)
    {
        return 0 ;

    }elseif ($k1>$k2)
    {

        return 1 ;

    }else{

        return -1;
    }
}
$arr1 = array('url'=>'bbs.com','name'=>'baidu','naline'=>'jiaoji','naline2'=>'jiaoji','naline3'=>'jiaoji');

$arr2 = array('url'=>'sina.com','name2'=>'ssss','naline'=>'jiaoji','naline1'=>'jiaoji','naline3'=>'jiaoji1');

$arr3 = array_diff_ukey($arr1,$arr2,afff);





dump($arr3);

//array_diff_uassoc() 通过回调函数的方式 返回一个数组在其它数组中不存在的键名 或 键值



$arr3 = array_diff_uassoc($arr1,$arr2,afff);





dump($arr3);



//在多个数组当中 返回 仅键值  都存在 的  元素  交集
$arr4 = array_intersect($arr1,$arr2);

dump($arr4);

//在多个数组当中 返回 仅键名  都存在 的  元素  交集
$arr4 = array_intersect_key($arr1,$arr2);

dump($arr4);


//在多个数组当中 返回 键名 键值 都存在 的  元素  交集
$arr4 = array_intersect_assoc($arr1,$arr2);

dump($arr4);


//在多个数组当中 返回 键名 键值 都存在 的  元素  交集 使用回调函数的方式

function afff2($k1,$k2)
{
    if ($k1===$k2)
    {
        return 0 ;

    }elseif ($k1>$k2)
    {

        return 1 ;

    }else{

        return -1;
    }
}

$arr4 = array_intersect_uassoc($arr1,$arr2,afff2);
echo "回调返回";
dump($arr4);
















































